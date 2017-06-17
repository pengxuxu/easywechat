<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyWeChat\Applications\OfficialAccount\Core;

use EasyWeChat\Applications\Base\AccessToken as BaseAccessToken;

/**
 * Class AccessToken.
 *
 * @author overtrue <i@overtrue.me>
 */
class AccessToken extends BaseAccessToken
{
    /**
     * {@inheritdoc}.
     */
    protected $prefix = 'easywechat.common.access_token.';

    // API
    const API_TOKEN_GET = 'https://api.weixin.qq.com/cgi-bin/token';
}