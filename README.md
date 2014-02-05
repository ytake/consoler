consoler

[![Latest Stable Version](https://poser.pugx.org/comnect/consoler/v/stable.png)](https://packagist.org/packages/comnect/consoler) [![Total Downloads](https://poser.pugx.org/comnect/consoler/downloads.png)](https://packagist.org/packages/comnect/consoler) [![Latest Unstable Version](https://poser.pugx.org/comnect/consoler/v/unstable.png)](https://packagist.org/packages/comnect/consoler) [![License](https://poser.pugx.org/comnect/consoler/license.png)](https://packagist.org/packages/comnect/consoler)
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

basic.controller
===========================
```php
<?php
// namespaceはコマンドライン実行時に指定します。
namespace Controller\Sample;
// controllerをextendsします
use Comnect\Console\Controller;
use Model\Sample;
class Sample extends Controller {
    
    protected $sample;
    // sampleモデルをコンストラクターにタイプヒントで指定します。
    
    public function __construct(Sample $sample)
    {
        // container
        $this->sample = $sample;
    }
 
    /**
     * インターフェースで実装が定義づけられているのは、このperformのみです
     */
    public function perform(array $array)
    {
        // コマンド実行時に指定したoptionは$arrayに渡されます
    }
}
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
