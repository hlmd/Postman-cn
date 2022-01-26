<?php
# 修改PHP配置
ini_set('memory_limit', '-1');
ini_set('max_execution_time', '0');
ini_set('pcre.backtrack_limit', '2147483647');
ini_set('pcre.recursion_limit', '2147483647');
set_time_limit(0);

# 应用程序
const APP_NAME = 'Postman';               // 名称
const APP_IMAGE = './images/app.png';  // 图片
const APP_VERSION = '9.10.1';             // 版本

# 路径配置
const APP_PATH = 'D:/App/Network/Postman/Install/app-' . APP_VERSION . '/resources/app/';            // 应用程序根目录
const BACKUP_PATH = '../app-' . APP_VERSION . '/';     // 备份目录
const ORIGINAL_PATH = '../original/';   // 原文件目录
const LANG_PATH = './lang/';            // 语言转换文件目录
const OUTPUT_PATH = './output/';        // 提取存放目录

# 需汉化文件信息
const FILES_INFO = [
    'html/loader.html',
    'html/proxyAuth.html',
    'html/auth/auth.html',
    'html/auth/error.html',
    'js/changelog/components/CollectionChangelog.js',
    'js/components/api/api-context-bar/APIInfoContextBarView/APIInfoContextBarView.js',
    'js/components/api/api-context-bar/CommentsContextBarView/APICommentsContextBarView.js',
    'js/components/api-sidebar/APISidebarContainer/APISidebarContainer.js',
    'js/components/api-version/context-bar/api-version-changelog/APIVersionChangelogContextBarView/APIVersionChangelogContextBarView.js',
    'js/components/api-version/context-bar/api-version-changelog/APIVersionChangelogContextBarView/APIVersionChangelogContextBarViewController.js',
    'js/components/api-version/context-bar/APIVersionInfoContextBarView/APIVersionInfoContextBarView.js',
    'js/components/api-version/context-bar/CommentsContextBarView/CommentsContextBarView.js',
    'js/components/context-bar/RelatedCollectionCBView.js',
    'js/components/release/context-bar/ReleaseChangelogContextBarView/ReleaseChangelogContextBarView.js',
    'js/components/release/context-bar/ReleaseChangelogContextBarView/ReleaseChangelogContextBarViewController.js',
    'js/components/release/context-bar/ReleaseInfoContextBarView/ReleaseInfoContextBarView.js',
    'js/components/CodeCBView.js',
    'js/components/DocumentationContextBarView.js',
    'js/components/MockInfoContextView.js',
    'js/components/SidebarMockListing.js',
    'js/containers/MonitorActivityInfo.js',
    'js/containers/MonitorActivityLogs.js',
    'js/containers/MonitorSidebarContainer.js',
    'js/containers/SchemaChangelogContainer.js',
    'js/contextbar/CollectionInfoCBView/CollectionInfoCBView.js',
    'js/contextbar/EnvironmentInfoCBView/EnvironmentInfoCBView.js',
    'js/contextbar/ExampleInfoCBView/ExampleInfoCBView.js',
    'js/contextbar/ExtensibleCollectionChangelog/ExtensibleCollectionChangelogCBView.js',
    'js/contextbar/ExtensibleCollectionInfo/ExtensibleCollectionInfoCBView.js',
    'js/contextbar/FolderInfoCBView/FolderInfoCBView.js',
    'js/contextbar/GlobalsInfoCBView/GlobalsInfoCBView.js',
    'js/contextbar/RequestInfoCBView/RequestInfoCBView.js',
    'js/contextbar/contextbarView.js',
    'js/context-bar/WebSocketRequestDocumentation/WebSocketRequestDocumentationView.js',
    'js/context-bar/WebSocketRequestInfo/WebSocketRequestInfoCBView.js',
    'js/controllers/SideBarMockController.js',
    'js/fork/ForkListing.js',
    'js/pull-request/components/PullRequestMeta/index.js',
    'js/pull-request/components/PullRequestComments.js',
    'js/schema/components/CodegenContextBarView/Code.js',

    'js/scratchpad/components/CodeCBView.js',
    'js/scratchpad/components/DocumentationContextBarView.js',
    'js/scratchpad/sidebar/CollectionSidebarView.js',
    'js/scratchpad/sidebar/EnvironmentSidebarView.js',
    'js/scratchpad/CommonLazyChunk.js',
    'js/scratchpad/FindReplace.worker.js',
    'js/scratchpad/HistorySidebarContainer.js',
    'js/scratchpad/postman-code-generators.js',
    'js/scratchpad/postman-converters.js',
    'js/scratchpad/RequesterModalContainer.js',
    'js/scratchpad/scratchpad.js',
    'js/scratchpad/StatusBarContainer.js',
    'js/scratchpad/swagger2-to-postmanv2.js',

    'js/sidebar/CollectionSidebarView.js',
    'js/sidebar/EnvironmentSidebarView.js',
    'js/sidebar/FlowSidebarController.js',
    'js/sidebar/FlowSidebarView.js',
    'js/src/MimirEditor.js',
    'js/authentication.js',
    'js/CommonLazyChunk.js',
    'js/console.css',
    'js/console.js',
    'js/FindReplace.worker.js',
    'js/HistorySidebarContainer.js',
    'js/openapi-to-postmanv2.js',
    'js/postman-code-generators.js',
    'js/postman-converters.js',
    'js/proxyAuth.css',
    'js/requester.css',
    'js/requester.js',
    'js/RequesterModalContainer.js',
    'js/StatusBarContainer.js',
    'js/swagger2-to-postmanv2.js',
    'js/text-editor.js',
    'js/vendor-ui.js',
    'services/electronProxy.js',
    'services/AuthHandler.js',
    'services/menuManager.js',
    'services/gpu.js',
    'main.js',
];

// 引号
const QUOTES = ["'", '"', "'", '"', '"', "'", "'", "'", "'", "'", "'", "'", "'", "'", "'", 'regex' => "'"];


/**
 * 输出json数据
 * @param mixed $data
 * @return false|string
 */
function json($data)
{
    return json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
}


/**
 * 美化详细输出
 * @param mixed ...$var
 */
function dump(...$var)
{
    echo '<pre>';
    foreach ($var as $v) {
        var_dump($v);
    }
    echo '</pre>';
}

/**
 * 单引号转双引号
 * @param $string
 * @return mixed
 */
function json_quote_single_to_double($string)
{
    $new_string = trim($string, "'");
    $new_string = str_replace("\\'", "'", $new_string);
    $new_string = str_replace('"', '\\"', $new_string);
    $new_string = json_encode($new_string, JSON_UNESCAPED_UNICODE + JSON_UNESCAPED_SLASHES);
    $new_string = '\\' . $new_string;
    $new_string = substr_replace($new_string, '\\', -1, 0);
    return $new_string;
}

/**
 * 单引号转双引号
 * @param $string
 * @return mixed
 */
function quote_single_to_double($string)
{
    return preg_replace("/^'(.*)'$/", '"$1"', $string);
}