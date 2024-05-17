下記内容のお問い合わせがありました。

<?php if ($__serial) : ?>
[お問い合わせ番号] <?php echo $__serial ?> 
<?php endif; ?>

[会社名] <?php echo $company ?> 

[メールアドレス] <?php echo $email ?> 

[電話番号] <?php echo $tel ?> 

[お問い合わせ種別] <?php echo implode(', ', $class) ?> 

[お問い合わせ内容]
<?php echo $comment ?>　

