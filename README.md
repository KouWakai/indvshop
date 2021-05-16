# indvshop
個人でネット販売されたい方向けの小規模なECサイトです。  
現在はポートフォリオとしてレザークラフト・革細工の販売サイトのようなデザインにしてあります。  


URL:http://ec2-13-208-45-230.ap-northeast-3.compute.amazonaws.com/home

# 仕様技術
* フロントエンド
    * Vue.js 2.5.17
    * jQuery
    * HTML/CSS/Sass/Bootstrap 4
* バックエンド
    * PHP 8.0.3
    * Laravel Framework 8.40.0
    * PHPUnit 9.3.3
* インフラ
    * CircleCI
    * Docker 20.10.6 / Docker-compose 1.29.1
    * nginx 1.2
    * mysql 5.7.34
    * AWS (EC2 S3 RDS)
    * gitlab(github移行まで)
* ツール
    * Visual Studio Code
* ライブラリ
    * bumbummen99/shoppingcart
    * hooper
    * intervention Image

# 機能一覧
* ユーザー認証
* ページネーション
* 商品検索　カテゴリ検索機能
* お問い合わせ　画像アップロード機能
* 管理者認証機能
* 商品管理機能
* ユーザー管理機能
* ホーム画面デザイン変更機能
* カート機能
* 注文機能
* ゲスト注文機能
* 見積もり・お問い合わせ管理機能

# 画面一覧
![IndvshopsPages](https://user-images.githubusercontent.com/35868597/118271642-83bea600-b4fc-11eb-8361-b6040edac694.png)

# インフラ構成図

![awsstructure (2)](https://user-images.githubusercontent.com/35868597/118274130-b8802c80-b4ff-11eb-8315-3e045d974d26.png)

# ER図

![Screenshot from 2021-05-15 19-06-05](https://user-images.githubusercontent.com/35868597/118356521-a4e0ce80-b5b0-11eb-94f3-d3478db8e7d2.png)


# 開発環境
* デスクトップPC
    os Linux ubuntu 20.04LTS  
    CPU core i5 3450  
    メモリ 18gb  
    グラフィックボード gtx1050ti  
* ノートPC(出先にて使用)  
    macbook air 13inch mid 2011(os sierra)
