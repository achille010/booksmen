<?php
$libraryMembers = [
    ['id' => 1, 'name' => 'Alice Johnson'],
    ['id' => 2, 'name' => 'Bob Smith'],
    ['id' => 3, 'name' => 'Claire Mbonyinshuti']
];

$libraryBooks = [
    ['id' => 1, 'title' => 'Harry Potter and the Sorcerer\'s Stone', 'borrowed_by' => 1],
    ['id' => 2, 'title' => 'The Hobbit', 'borrowed_by' => null],
    ['id' => 3, 'title' => 'Clean Code', 'borrowed_by' => 2],
    ['id' => 4, 'title' => 'The Alchemist', 'borrowed_by' => null]
];

if (isset($_GET['borrow']) && isset($_GET['book_id']) && isset($_GET['member_id'])) {
    $bookId = (int)$_GET['book_id'];
    $memberId = (int)$_GET['member_id'];

    foreach ($libraryBooks as &$book) {
        if ($book['id'] === $bookId && $book['borrowed_by'] === null) {
            $book['borrowed_by'] = $memberId;
        }
    }
    unset($book);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Little libraryBooksmen app</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        table { border-collapse: collapse; margin-bottom: 40px; }
        th, td { border: 1px solid #aaa; padding: 8px 12px; }
        th { background-color: #f4f4f4; }
        a { text-decoration: none; color: blue; }
        * {font-family: 'Quicksand';}
    </style>
</head>
<body>
<h1>Mini Library Catalog</h1>

<h2>libraryBooks</h2>
<table>
<tr><th>Title</th><th>Status</th><th>Action</th></tr>
<?php foreach ($libraryBooks as $book): ?>
<tr>
    <td><?= htmlspecialchars($book['title']) ?></td>
    <td>
        <?php
        if ($book['borrowed_by'] === null) {
            echo "Available";
        } else {
            $memberName = '';
            foreach ($libraryMembers as $m) {
                if ($m['id'] === $book['borrowed_by']) $memberName = $m['name'];
            }
            echo "Borrowed by $memberName";
        }
        ?>
    </td>
    <td>
        <?php if ($book['borrowed_by'] === null): ?>
            <a href="?borrow=1&book_id=<?= $book['id'] ?>&member_id=1">Borrow as Alice</a>
        <?php else: ?>
            -
        <?php endif; ?>
    </td>
</tr>
<?php endforeach; ?>
</table>

<h2>Members</h2>
<ul>
<?php foreach ($libraryMembers as $m): ?>
    <li><?= htmlspecialchars($m['name']) ?></li>
<?php endforeach; ?>
</ul>

</body>
</html>
