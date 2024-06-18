<?php
session_start();
include "connect.php";
$id_user = $_SESSION['id_user'];

if (isset($id_user)) {
    $query = mysqli_query($conn, "SELECT ListOrder.ID_jewel, ListOrder.count, Jewelries.Name_jewel, Jewelries.Price, Jewelries.Image
                              FROM ListOrder 
                              INNER JOIN Orders ON ListOrder.ID_order = Orders.ID 
                              INNER JOIN Jewelries ON ListOrder.ID_jewel = Jewelries.ID 
                              WHERE Orders.ID_user = $id_user");
                              $query = "SELECT product_id"
    $items = mysqli_fetch_all($query);
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Корзина</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/DwwykcV8Qyq46cDfL" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <h1>Ваша корзина</h1>

        <section class="h-100 h-custom">
            <div class="container h-100 py-5">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="h5">Товар</th>
                                        <th scope="col">Товар</th>
                                        <th scope="col">Цена</th>
                                        <th scope="col">Всего</th>
                                        <th scope="col">Статус</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $totalPrice = 0;
                                    foreach ($items as $item) {
                                        $itemTotal = $item['Price'] * $item['count'];
                                        $totalPrice += $itemTotal;
                                        ?>
                                        <tr>
                                            <th scope="row">
                                                <div class="d-flex align-items-center">
                                                    <img src="imges/<?= $item['Image'] ?>" class="img-fluid rounded-3"
                                                        style="width: 120px;" alt="Product Image">
                                                    <div class="flex-column ms-4">
                                                        <p class="mb-2">
                                                            <?= $item['Name_jewel'] ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </th>
                                            <td class="align-middle">
                                                <div class="d-flex flex-row">
                                                    <button class="btn btn-link px-2"
                                                        onclick="updateQuantity(<?= $item['ID_jewel'] ?>, 'decrease')">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                    <input id="form1" min="1" name="count" value="<?= $item['count'] ?>"
                                                        type="number" class="form-control form-control-sm" style="width: 50px;" readonly />
                                                    <button class="btn btn-link px-2"
                                                        onclick="updateQuantity(<?= $item['ID_jewel'] ?>, 'increase')">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <p class="mb-0" style="font-weight: 500;">
                                                    <?= $item['Price'] ?> $
                                                </p>
                                            </td>
                                            <td class="align-middle">
                                                <p class="mb-0" style="font-weight: 500;">
                                                    <?= $itemTotal ?> $
                                                </p>
                                            </td>
                                            <td class="align-middle">
                                                <a href="basket_delete.php?ID=<?= $item['ID_jewel'] ?>"
                                                    class="btn btn-danger">Удалить</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    <tr>
                                        <td colspan="3" class="text-end">Итого:</td>
                                        <td class="align-middle"><strong>
                                                <?= $totalPrice ?> $
                                            </strong></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card shadow-2-strong mb-5 mb-lg-0" style="border-radius: 16px;">
                            <div class="card-body p-4">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4 col-xl-6">
                                      
                                        <form action="checkout.php" method="post">
                                            <button type="submit" class="btn btn-primary btn-block btn-lg">
                                                <div class="d-flex justify-content-between">
                                                    <span>Оформить заказ, у вас всего:</span>
                                                    <span>$
                                                        <?= $totalPrice ?>
                                                    </span>
                                                </div>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="catalog.php" class="btn btn-secondary mt-3">Продолжить покупки</a>
                    </div>
                </div>
            </div>
        </section>
    <?php } else {
    echo "<script>
    alert('Пожалуйста, войдите в аккаунт!');
    location.href = 'index.php';
    </script>";
    exit;
}
?>
    <script>
        function updateQuantity(jewelId, action) {
            $.post('update_quantity.php', { id_jewel: jewelId, action: action }, function (response) {
                location.reload();
            });
        }
    </script>
</body>

</html>
