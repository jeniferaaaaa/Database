<?php

namespace App\Consts;

class FileConst
{
    //TMPディレクトリのパス
    const TMP_PATH = '/public/tmp';
    //imageディレクトリのパス
    const IMG_PATH = 'public/images/';
    /**
     * 各サイトのメイン画像のパス
     * /image/main
     */
    const MAIN_PATH = 'main';
    /**
     * 各サイトのサブ画像のパス
     * /image/sub
     */
    const SUB_PATH = 'sub';
    /**
     * カテゴリーの画像のパス
     * /image/category
     */
    const CATEGORY_PATH = 'category';
    /**
     * 投稿用データの画像パス
     * /image/data
     */
    const DATA_PATH = 'data';
    /**
     * 各サイトのロゴ画像のパス
     * /image/logo
     */
    const LOGO_PATH = 'logo';
    /**
     * デベロッパー用画像パス
     * /image/dev
     */
    const DEV_PATH = 'dev';
}