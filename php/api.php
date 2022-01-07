<?php
require 'common.php';

class api
{

    /**
     * 简称
     * @var string[]
     */
    public $abb = [
        's' => 'sinicization',
        'b' => 'backup',
        'r' => 'restore',
        'h' => 'help',
        'v' => 'version',
        'rb' => 'restoreFormBackup',
        'g' => 'getString',
    ];

    /**
     * 运行方法
     * @return string
     */
    public function run($action)
    {
        if (empty($action)) {
            return json(['code' => -1, 'msg' => '参数缺失']);
        }
        if (is_array($action)) {
            $return = [];
            foreach ($action as $a) {
                $return[] = $this->call($a);
            }
            return join("\n", $return);
        } else {
            return $this->call($action);
        }
    }

    /**
     * 调用
     * @param $action
     * @return false|mixed|string
     */
    protected function call($action)
    {
        if (!is_callable([$this, $action], false, $do)) {
            return json(['code' => -1, 'msg' => '方法不存在']);
        }
        return call_user_func($do);
    }

    /**
     * 帮助
     */
    protected function help()
    {
        echo "使用：php api.php [命令]\n\n";
        echo "进行文件文本替换\n\n";
        echo "命令：\n";
        echo "  s, sinicization            汉化\n";
        echo "  b, backup                  备份\n";
        echo "  r, restore                 还原\n";
        echo "  rb, restoreFormBackup      从备份还原\n";
        echo "  g, getString               提取文本\n";
        echo "  h, help                    帮助\n";
        echo "  b, version                 版本\n";
    }

    /**
     * 版本
     */
    protected function version()
    {
        return '版本：' . APP_VERSION;
    }

    /**
     * 汉化
     * @return string
     */
    protected function sinicization()
    {
        $no = []; // 不存在的替换
        foreach (FILES_INFO as $item) {
            if (!$item) continue;
            if (!file_exists(APP_PATH . $item)) {
                return json(['code' => -1, 'msg' => $item . ' 文件不存在']);
            }
            $no[$item] = [];
        }

        foreach (FILES_INFO as $item) {

            if (!$item) continue;

            $replace = require LANG_PATH . $item . '.php';

            $content = file_get_contents(APP_PATH . $item);
            foreach ($replace as $k2 => $v2) {

                // 将不存在的显示出来
                if ($k2 === 'regex') {
                    foreach ($v2 as $k => $v) {
                        if (empty($k)) continue;
                        if (preg_match($k, $content)) {
                            $content = preg_replace($k, $v, $content);
                        } else {
                            $no[$item][$k2][] = QUOTES[$k2] . str_replace(QUOTES[$k2], '\\' . QUOTES[$k2], $k) . QUOTES[$k2] . ' => ' . QUOTES[$k2] . str_replace(QUOTES[$k2], '\\' . QUOTES[$k2], $v) . QUOTES[$k2] . ',';
                        }
                    }
                } else {
                    foreach ($v2 as $k => $v) {
                        if (empty($k)) continue;
                        if (strpos($content, $k) !== false) {
                            $content = str_replace($k, $v, $content);
                        } else {
                            $no[$item][$k2][] = QUOTES[$k2] . str_replace(QUOTES[$k2], '\\' . QUOTES[$k2], $k) . QUOTES[$k2] . ' => ' . QUOTES[$k2] . str_replace(QUOTES[$k2], '\\' . QUOTES[$k2], $v) . QUOTES[$k2] . ',';
                        }
                    }
                }
            }


            if (!file_put_contents(APP_PATH . $item, $content)) {
                return json(['code' => -1, 'msg' => '汉化' . $item . '失败']);
            }

        }

        return json(['code' => 1, 'msg' => '汉化成功', 'no' => $no]);
    }

    /**
     * 从当前备份
     * @return string
     */
    protected function backup()
    {
        foreach (FILES_INFO as $item) {

            if (!$item) continue;

            if (!copy(APP_PATH . $item, BACKUP_PATH . $item)) {
                return json(['code' => -1, 'msg' => '备份失败']);
            }

        }
        return json(['code' => 1, 'msg' => '备份成功']);

    }

    /**
     * 还原
     * @return string
     */
    protected function restore()
    {
        foreach (FILES_INFO as $item) {

            if (!$item) continue;
            if (!copy(ORIGINAL_PATH . $item, APP_PATH . $item)) {
                return json(['code' => -1, 'msg' => '还原失败']);
            }

        }
        return json(['code' => 1, 'msg' => '还原成功']);

    }

    /**
     * 从备份还原
     * @return string
     */
    protected function restoreFormBackup()
    {
        foreach (FILES_INFO as $item) {

            if (!$item) continue;

            if (!copy(BACKUP_PATH . $item, APP_PATH . $item)) {
                return json(['code' => -1, 'msg' => '还原失败']);
            }

        }
        return json(['code' => 1, 'msg' => '还原成功']);
    }

    /**
     * 提取字符串
     * @return false|string
     */
    protected function getString()
    {
        $files = [];
        foreach (FILES_INFO as $item) {
            if (!$item) continue;

            $content = file_get_contents(APP_PATH . $item);

            // 替换字符 用作去除多余无用字符
            $replace_str = [
                '/\{\s+?e\.exports\s?=\s?\[.+?\]\s+?\}/s' => '',
                '/\{\s+?e\.exports\s?=\s?JSON\.parse\(\s+?(.+?)\s+?\)\s+?\}/s' => '',
                '/\{\s+?e\.exports\s?=\s?\{\s+?([a-zA-Z]+\s?:\s?\[(.+?)(\],\s+?|\]\s+?\})+)+\s+?\}/s' => '',
                '/\'<\?xml(.*)<\/plist>(\\\\r\\\\n)?\'/s' => '', //
//                '/"application\/1d\-interleaved\-parityfec"(.+?)"x\-shader\/x\-vertex"/s' => '',
//                '/"UAE Dirham"(.+?)"Zimbabwe Dollar"/s' => '',
//                '/"À"(.+?)"ſ"/s' => '',
                '/"data:image\/.*"/' => '',    // Base64 图片
                '/"#[A-Za-z\d]{3,6}"/' => '',  // 16 进制颜色
                '/"([a-zA-Z\d]+)?(\/[a-zA-Z\d]+)+(\/)?"/' => '', // 像 /api/login/index 的 Path

                // 美化源代码后的去除 console 换行，用作后续的替换
                '/console(\s+)?\.(error|warn|info|trace|log)\((\s+)?(`|")/s' => 'console.$2($4',
                '/logger(\s+)?\.(error|warn|info|log)\((\s+)?(`|")/s' => 'logger.$2($4',
                '/Error\((\s+)?(`|")/s' => 'Error($2',
            ];
            $content = preg_replace(array_keys($replace_str), array_values($replace_str), $content);

            // 提取字符 && 找出不需要汉化的字符 以...开头 console.log('No Sinicization');
            $log_str = '(className:\s|console\.log\(|console\.error\(|console\.trace\(|console\.info\(|console\.warn\(|logger\.warn\(|logger\.error\(|logger\.info\(|Error\()?';
            $string_pattern = '/((' . $log_str . '".+?")|(' . $log_str . '\'.+?\')|(' . $log_str . '`.+?`)|(\/\*\s\d+?\s\*\/))/';
            preg_match_all($string_pattern, $content, $string_list);

            $string_list = $string_list[1] ?? [];

            // 移除的字符
            $remove_list = [
                '("([a-zA-Z]+)?(\.[a-zA-Z]+)+")', // "one.two.three" 对象操作
                '("\/\*.*")', // "/*..."  注释
                '("[\d\.\s]+")', // "100.100 20.20" 数字
                '("([a-z\d]+)?([\-]+[a-z\d]+)+")', // "one-two-three" css Class 名称
                '("[a-zA-Z]+([A-Z]+[a-z]+)+")', // "oneTwoThree" 驼峰变量名
                '("[A-Za-z]+(_[a-zA-Z]+)+")', // "ONE_TWO_THREE" 常量名
                '(\'\/\*.*\')', // '/*...' 注释
                '(\'\{".*"\}\')', // '{"...."}' JSON 字符串
                '("(M|m)(\d+)?\.?\d+.*")', // "M.241 ..." Svg
            ];
            $remove_string = implode('|', $remove_list);

            // 移除 以...开头 console.log('No Sinicization');
            $start_remove_arr = ['className:\s', 'Error\(', 'console\.log\(', 'console\.error\(', 'console\.info\(', 'console\.warn\(', 'console\.trace\(', 'logger\.warn\(', 'logger\.error\(', 'logger\.info\('];
            $start_remove = '';
            if (!empty($start_remove_arr)) {
                $start_remove = '|(^(' . implode('|', $start_remove_arr) . ').*)';
            }
            $string_list = array_unique($string_list); // 移除重复
            $filter_one = '/(' . $remove_string . $start_remove . ')/';
            foreach ($string_list as $key => $string) {
                if (empty($string) || preg_match($filter_one, $string)) {
                    unset($string_list[$key]);
                }
            }

            // 输出位置
//            file_put_contents(OUTPUT_PATH . str_replace('/', '_', $item . '.txt'), implode("\n", $string_list)); // 以文件名
            file_put_contents(OUTPUT_PATH . 'output.txt', implode("\n", $string_list));  // 固定
            $files[] = $item;
        }
        return json(['code' => 1, 'msg' => '成功', 'data' => $files]);
    }

}

$api = new api();

$action = [];
if (!empty($_REQUEST['action'])) $action = $_REQUEST['action'];

if (count($argv ?: []) > 1) {
    foreach ($argv as $index => $value) {
        if ($index > 0) {
            $action[] = $api->abb[$value] ?? $value;
        }
    }
}

echo (new api())->run($action);