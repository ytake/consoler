consoler
========
consoler is command line application with simply, easy  
architecture of the console is only controller and model  
changing folder structure easily, quickly  

php コンソール  
モデルとコントローラーを採用しています。  
composer利用により、簡単にフォルダー構造を変更する事が出来ます。  

install
========
use composer  
composerを使ってインストールします  
```bash
$ composer create-project comnect/consoler your-console-project
```

commands
=======
using the Symfony Console Component  
symfony consoleコンポーネントを使用しています  
###command list / コマンドリスト
```bash
$ php console
```

###consoler perform / コントローラーの実行
```bash 
$ php console consoler:perform (namespace controller)
```
実行するコントローラーをnamespaceで指定します。
```bash 
#example
$ php console consoler:perform \\Sample
```

###consoler version / consoler バージョン
```bash
$ php console consoler:version
```

container
=================
using the Illuminate Container(laravel4)  
コンテナにlaravel4で利用されているIlluminate Containerを使用しています。  
phpリフレクション機能を使って、各クラスを解決します。  

datastore
=================
supports four database systems: MySQL, Postgres, SQLite, and SQL Server  
and Redis  
データベースはMySQL, Postgres, SQLite, SQL Serverをサポートしています。  
他にredisも使用する事が出来ます。  

他に
================
クラス等を追加したらdump-autoloadを忘れずに実行してください
```bash
$ composer dump-autoload
```
