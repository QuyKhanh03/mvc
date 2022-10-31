<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="show-cmt" style="width: 100%; border: solid 1px; height: 200px;padding: 20px;">
            <?php echo "binh luan" ?>
        </div>
        <form action="add-cmt.php" class="comment-form review-form">
            <span>Your review *</span>
            <textarea name="message" id="comment-message" placeholder="Your Comment"></textarea>
            <button class="btn-comment">Submit</button>
        </form>
    </div>
</body>

</html>