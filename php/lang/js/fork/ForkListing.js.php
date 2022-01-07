<?php

return array(
    'regex' => [
        '/`Created on: \$\{([a-zA-Z_\.]+)\(\)\(([a-zA-Z_\.]+)\)\.format\("DD MMM, YYYY"\)\}`/s' => '`创建于: ${$1()($2).format("DD MMM, YYYY")}`',
        '/"They aren\'t visible because they\'re in workspaces you don\'t have access to\. Learn more about ",([a-zA-Z_\.]+)/s' => '"它们是不可见的, 因为它们位于您无法访问的工作区中. 了解更多关于 ",$1',
        '/"All forks created from this ",([a-zA-Z_\.]+)," will appear here\. Learn more about "/s' => '"从此",$1,"创建的所有分叉都将显示在这里. 了解更多关于 "',
        '/`You cannot view the list of forks for this \$\{([a-zA-Z_\.]+)\}\.`/s' => '`您无法查看此集合${$1}的分叉列表.`',
        '/" ",([a-zA-Z_\.]+)," of "/s' => '"个",$1,"于"',
        '/______/s' => '______',
    ],
    [
        '` ${e.get(t,"forkInfo.hiddenForks")} of those aren\'t in this list because they\'re in workspaces you don\'t have access to.`' => '` 其中的${e.get(t,"forkInfo.hiddenForks")}个不在此列表中, 因为它们位于您无权访问的工作空间中.`',
        '______' => '______',
    ],
    [
        "______" => "______",
        "______" => "______",
    ],
    [
        '______' => '______',
        '______' => '______',
        '______' => '______',
    ],
    [
        "______" => "______",
        "______" => "______",
        "______" => "______",
    ],
    [
        "'______'" => "'______'",
        "'______'" => "'______'",
        "'______'" => "'______'",
        "'______'" => "'______'",
        "'______'" => "'______'",

    ],
    [
        '"Forks"' => '"分叉"',
        '"Retry"' => '"重试"',
        '"Check your connection"' => '"检查您的连接"',
        '"Get online to view your list of forks."' => '"联网查看您的分叉列表."',
        '"Unable to load list of forks"' => '"无法加载分叉列表"',
        '"Recently created:"' => '"最近创建的:"',
        '"Try refetching forks"' => '"尝试重新获取分叉"',
        '"No forks created yet"' => '"尚未创建分叉"',
        '"View details"' => '"查看详情"',
        '"View all forks"' => '"查看所有分叉"',
        '"fork"' => '"分叉"',
        '"forks"' => '"分叉"',
        '"______"' => '"______"',
        '"______"' => '"______"',
        '"______"' => '"______"',
    ]
);

