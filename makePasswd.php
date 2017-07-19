<?php
/**
 * password_hash ( PHP Manual )
 * http://php.net/manual/ja/function.password-hash.php
 *
 * デフォルトのアルゴリズムを使ってパスワードをハッシュします。
 * 現時点でのデフォルトは BCRYPT で、その結果は 60 文字になります。
 *
 * デフォルトは、今後変わる可能性があることに注意しましょう。結果が
 * 60 文字以上になっても対応できるようにしておきましょう (255 あたりが適切です)
 */
$pw = "qwer";
echo password_hash($pw, PASSWORD_DEFAULT)."\n";
?>