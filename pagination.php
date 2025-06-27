<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pagination Example</title>
    <style>
        .pagination a {
            margin: 0 5px;
            text-decoration: none;
            padding: 5px 10px;
            border: 1px solid #ccc;
            color: #333;
        }
        .pagination a.active {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }
    </style>
</head>
<body>
    <?php
    // Sample data array to paginate
    $data = range(1, 100); // Array of numbers from 1 to 100

    // Number of items per page
    $itemsPerPage = 10;

    // Get the current page from query parameter, default is 1
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    if ($page < 1) {
        $page = 1;
    }

    // Calculate total pages
    $totalItems = count($data);
    $totalPages = ceil($totalItems / $itemsPerPage);

    // Calculate the offset for the current page
    $offset = ($page - 1) * $itemsPerPage;

    // Slice the data array to get items for the current page
    $currentPageData = array_slice($data, $offset, $itemsPerPage);
    ?>

    <h1>Page <?php echo $page; ?> of <?php echo $totalPages; ?></h1>
    <ul>
        <?php foreach ($currentPageData as $item): ?>
            <li><?php echo $item; ?></li>
        <?php endforeach; ?>
    </ul>

    <div class="pagination">
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <a href="?page=<?php echo $i; ?>" class="<?php echo ($i == $page) ? 'active' : ''; ?>">
                <?php echo $i; ?>
            </a>
        <?php endfor; ?>
    </div>
</body>
</html>
