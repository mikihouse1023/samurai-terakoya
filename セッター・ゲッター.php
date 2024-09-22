<?php
/*ゲッター
・Getterはクラスの "プライベート(private) 属性の値を取得するため" に使用されるメソッド。
・直接プロパティにアクセスするのではなく、このメソッドを通じて"値を読み取ります"。これにより、
　クラスの内部実装を隠蔽しつつ、「外部から安全にプロパティ値を読み取る」ことが可能になります。
*/
class User
{
    private $name;

    //getterメソッド
    public function getName()
    {
        $this->name; //[$name]ではエラー
    }
}

/*セッター
・setterはクラスの"プライベート属性に値を設定する"ために使用されるメソッド。
・外部から直接プロパティを変更するのではなく、このメソッドを通じて"値を設定"します。これにより、
　値を設定する前にバリデーションを行うなど、「追加のロジックを設定する」ことが可能になります。
*/
class secondUser
{
    private $secondname;

    public function setName($secondname)
    {
        $this->secondname = $secondname;
    }
}
