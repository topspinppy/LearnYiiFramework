<h2>ประเภทหนังสือ</h2>
<?php foreach($book_types as $book_type): ?>
<ul>
    <li>
        <a href="#"><?php echo $book_type->book_type_name; ?> </a>
        <ul>
            <?php foreach ($book_type->books as $book): ?>
            <li>
                <?php echo $book->name; ?>
                <?php echo $book->price; ?>
            </li>
            <?php endforeach; ?>
        </ul>
    </li>
</ul>
<?php endforeach; ?>