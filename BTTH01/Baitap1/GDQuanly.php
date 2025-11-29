<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        require_once ("flowers.php")
    ?>
<main class="container">
        <h2 class="text-center text-uppercase text-success my-3">Danh sách hoa</h2>
        <a class="btn btn-primary" href="">Thêm hoa</a>
        <table class = " table table-border">
            <thead>
                <th scope="col">Tên hoa</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Ảnh</th>
            </thead>
            <body>
                <main class="container1"> 
                  
                    <?php foreach ($flowers as $gdkhach => $flowers): ?>
                        <tr>
                            <th scope="row"><?php $gdkhach + 1 ?></th>
                            <td><?= $flowers['name']?></td> 
                            <td><?= $flowers['describe'] ?></td>
                            <td><img style="max-width:100px;" src="<?= $flowers['img']?>" ></td>
                            
                        </tr>
                    <?php endforeach; ?>
                </main>
            </body>
        </table>


</main>
</body>
</html>