<?php

/**
 * default 为默认配置，你可以添加其他配置，但必须保证默认配置存在
 *
 * Checks 填写为没有直接在规则文件中使用的并且使用了筛选规则且组内或可能无节点的策略组名
 *  - 例如使用 regex 分类国家分组，未匹配时组内无节点，此类需要填入 Checks 中以保证配置文件无误
 *
 * Surge 以及 Surfboard 的 General 中，布尔值请填写为字符串
 *
 * Surge 以及 Surfboard 的 Proxy 中，请填写为该应用的格式
 * Clash 的 Proxy 中，请填写为数组
 */

/**
 * Surge 配置文件定义
 */
$_ENV['Surge_Profiles'] = [
    'default' => [
        'Checks' => [],
        'General' => [
            'loglevel'                    => 'notify',
            'dns-server'                  => 'system, 117.50.10.10, 119.29.29.29, 223.6.6.6',
            'skip-proxy'                  => '127.0.0.1, 192.168.0.0/16, 10.0.0.0/8, 172.16.0.0/12, 100.64.0.0/10, 17.0.0.0/8, localhost, *.local, *.crashlytics.com',
            'external-controller-access'  => 'China@0.0.0.0:8233',
            'allow-wifi-access'           => 'true',
            'enhanced-mode-by-rule'       => 'false',
            'exclude-simple-hostnames'    => 'true',
            'show-error-page-for-reject'  => 'true',
            'ipv6'                        => 'true',
            'replica'                     => 'false',
            'http-listen'                 => '0.0.0.0:8234',
            'socks5-listen'               => '0.0.0.0:8235',
            'wifi-access-http-port'       => 6152,
            'wifi-access-socks5-port'     => 6153,
            'internet-test-url'           => 'http://baidu.com',
            'proxy-test-url'              => 'http://www.qualcomm.cn/generate_204',
            'test-timeout'                => 3
        ],
        'Proxy' => [
            '🚀直接连接 = direct'
        ],
        'ProxyGroup' => [
            [
                'name' => '🔰国外流量',
                'type' => 'select',
                'content' => [
                    'regex' => '(.*)',
                    'right-proxies' => [
                        '🚀直接连接'
                    ],
                ]
            ],
            [
                'name' => '⚓️其他流量',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量',
                        '🚀直接连接'
                    ]
                ]
            ],
            [
                'name' => '✈️Telegram',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量'
                    ],
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => '🎬Youtube',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量'
                    ],
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => '🎬Netflix',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量'
                    ],
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => '🎬国外媒体',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量'
                    ],
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => '🍎苹果服务',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🚀直接连接',
                        '🔰国外流量'
                    ]
                ]
            ]
        ],
        'Rule' => [
            'source' => 'surge/default.tpl'
        ]
    ]
];

/**
 * Surge 2.x 版本的配置文件定义
 */
$_ENV['Surge2_Profiles'] = [
    'default' => [
        'Checks' => [],
        'General' => [
            'loglevel'                   => 'notify',
            'ipv6'                       => 'true',
            'replica'                    => 'false',
            'dns-server'                 => 'system, 119.29.29.29, 223.5.5.5',
            'skip-proxy'                 => '127.0.0.1, 192.168.0.0/16, 10.0.0.0/8, 172.16.0.0/12, 100.64.0.0/10, 17.0.0.0/8, localhost, *.local, *.crashlytics.com',
            'bypass-system'              => 'true',
            'allow-wifi-access'          => 'true',
            'external-controller-access' => 'ChinaX@0.0.0.0:8233'
        ],
        'Proxy' => [
            '🚀直接连接 = direct'
        ],
        'ProxyGroup' => [
            [
                'name' => '🔰国外流量',
                'type' => 'select',
                'content' => [
                    'regex' => '(.*)',
                    'right-proxies' => [
                        '🚀直接连接'
                    ],
                ]
            ],
            [
                'name' => '⚓️其他流量',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量',
                        '🚀直接连接'
                    ]
                ]
            ],
            [
                'name' => '✈️Telegram',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量'
                    ],
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => '🎬Youtube',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量'
                    ],
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => '🎬Netflix',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量'
                    ],
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => '🎬国外媒体',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量'
                    ],
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => '🍎苹果服务',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🚀直接连接',
                        '🔰国外流量'
                    ]
                ]
            ]
        ],
        'Rule' => [
            'source' => 'surge2/default.tpl'
        ]
    ]
];

/**
 * Clash 配置文件定义
 */
$_ENV['Clash_Profiles'] = [
    'default' => [
        'Checks' => [],
        'General' => [
            'port'                => 7890,
            'socks-port'          => 7891,
            'redir-port'          => 7892,
            'allow-lan'           => false,
            'mode'                => 'rule',
            'log-level'           => 'silent',
            'external-controller' => '0.0.0.0:9090',
            'secret'              => ''
        ],
        'Proxy' => [],
        'ProxyGroup' => [
            [
                'name' => '🔰国外流量',
                'type' => 'select',
                'content' => [
                    'regex' => '(.*)',
                    'right-proxies' => [
                        '🚀直接连接'
                    ],
                ]
            ],
            [
                'name' => '⚓️其他流量',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量',
                        '🚀直接连接'
                    ]
                ]
            ],
            [
                'name' => '✈️Telegram',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量'
                    ],
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => '🎬Youtube',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量'
                    ],
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => '🎬Netflix',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量'
                    ],
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => '🎬国外媒体',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量'
                    ],
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => '🍎苹果服务',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🚀直接连接',
                        '🔰国外流量'
                    ]
                ]
            ],
            [
                'name' => '🚀直接连接',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        'DIRECT'
                    ]
                ]
            ]
        ],
        'Rule' => [
            'source' => 'clash/default.tpl'
        ]
    ],
    'ACL4SSR_Online_Mini_MultiCountry' => [
        'Checks' => [],
        'General' => [
            'port'                => 7890,
            'socks-port'          => 7891,
            'redir-port'          => 7892,
            'allow-lan'           => true,
            'mode'                => 'rule',
            'log-level'           => 'info',
            'external-controller' => '0.0.0.0:9090',
            'secret'              => ''
        ],
        'Proxy' => [],
        'ProxyGroup' => [
            [
                'name' => '🚀 节点选择',
                'type' => 'select',
                'content' => [
                   'left-proxies' => [
                        '♻️ 自动选择',
                        '🇭🇰 香港节点',
                        '🇺🇲 美国节点',
                        '🇯🇵 日本节点',
                        '🚀 手动切换',
                        'DIRECT'
                    ],
                ]
            ],
            [
                'name' => '🚀 手动切换',
                'type' => 'select',
                'content' => [
                    'regex' => '(.*)'
                ]
            ],
            [
                'name' => '♻️ 自动选择',
                'type' => 'url-test',
                'url' => 'http://www.gstatic.com/generate_204',
                'interval' => '300',
                'interval' => '50',
                'content' => [
                    'regex' => '(.*)'
                ]
            ],
            [
                'name' => '🎯 全球直连',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        'DIRECT',
                        '🚀 节点选择',
                        '♻️ 自动选择'
                    ],
                ]
            ],
            [
                'name' => '🛑 全球拦截',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        'REJECT',
                        'DIRECT'
                    ],
                ]
            ],
            [
                'name' => '🐟 漏网之鱼',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🚀 节点选择',
                        '🎯 全球直连',
                        '♻️ 自动选择'
                    ],
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => '🇭🇰 香港节点',
                'type' => 'url-test',
                'url' => 'http://www.gstatic.com/generate_204',
                'interval' => '300',
                'tolerance' => '50',
                'content' => [
                    'regex' => '(港|HK|Hong Kong)'
                ]
            ],
            [
                'name' => '🇯🇵 日本节点',
                'type' => 'url-test',
                'url' => 'http://www.gstatic.com/generate_204',
                'interval' => '300',
                'tolerance' => '50',
                'content' => [
                    'regex' => '(日本|川日|东京|大阪|泉日|埼玉|沪日|深日|[^-]日|JP|Japan)'
                ]
            ],
            [
                'name' => '🇺🇲 美国节点',
                'type' => 'url-test',
                'url' => 'http://www.gstatic.com/generate_204',
                'interval' => '300',
                'tolerance' => '150',
                'content' => [
                    'regex' => '(美|波特兰|达拉斯|俄勒冈|凤凰城|费利蒙|硅谷|拉斯维加斯|洛杉矶|圣何塞|圣克拉拉|西雅图|芝加哥|US|United States)'
                ]
            ]
        ],
        'Rule' => [
            'source' => 'clash/ACL4SSR_Online_Mini_MultiCountry.tpl'
        ]
    ]
];

/**
 * Surfboard 配置文件定义
 */
$_ENV['Surfboard_Profiles'] = [
    'default' => [
        'Checks' => [],
        'General' => [
            'loglevel'   => 'notify',
            'dns-server' => 'system, 119.29.29.29, 223.5.5.5',
            'skip-proxy' => '127.0.0.1, 192.168.0.0/16, 10.0.0.0/8, 172.16.0.0/12, 100.64.0.0/10, 17.0.0.0/8, localhost, *.local, *.crashlytics.com',
        ],
        'Proxy' => [
            '🚀直接连接 = direct'
        ],
        'ProxyGroup' => [
            [
                'name' => '🔰国外流量',
                'type' => 'select',
                'content' => [
                    'regex' => '(.*)',
                    'right-proxies' => [
                        '🚀直接连接'
                    ],
                ]
            ],
            [
                'name' => '⚓️其他流量',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量',
                        '🚀直接连接'
                    ]
                ]
            ],
            [
                'name' => '✈️Telegram',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量'
                    ],
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => '🎬Youtube',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量'
                    ],
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => '🎬Netflix',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量'
                    ],
                    'regex' => '(.*)',
                ]
            ],
            [
                'name' => '🎬国外媒体',
                'type' => 'select',
                'content' => [
                    'left-proxies' => [
                        '🔰国外流量'
                    ],
                    'regex' => '(.*)',
                ]
            ]
        ],
        'Rule' => [
            'source' => 'surfboard/default.tpl'
        ]
    ]
];
