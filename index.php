<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>JSON 2</title>
</head>

<body>

    <div class="container text-center">
        <div class="row">
            <div class="col-4 mx-auto">
                <img src="https://images3.alphacoders.com/113/1132528.jpg" class="img-fluid rounded" alt="chongyun">
                <p class='fs-5 fw-bold'>Chongyun from Genshin impact</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1>[float:left]</h1>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <img src="https://soject.com/wp-content/uploads/2021/04/1_j18U6uvAg-ta2XBvDKNQlA.jpeg"
                            class="img-fluid" alt="dream">
                        <p class='fw-bold fs-5'>Full Stack Development</p>
                        <p>ถ้าอนาคตได้แบบนี้ คงจะดีไม่น้อย</p>
                    </div>
                    <div class="col">
                        <img src="https://www.blognone.com/sites/default/files/externals/316c7b3fec8e63e6b241daf9603c3569.jpg"
                            class="img-fluid" alt="chongyun">
                        <p class='fw-bold fs-5'>Game development with Unity</p>
                        <p>สิ่งนี้ก็อยากได้</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody id='tblPosts'>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h4>Thanabodi Limjoo 63104079</h4>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    loadPosts = () => {
        var url = "https://jsonplaceholder.typicode.com/posts";
        $.getJSON(url)
            .done((data) => {
                $.each(data, (k, item) => {
                    var line = "<tr>";
                    line += "<td>" + item.id + "</td>";
                    line += "<td class='text-start'><b>" + item.title + "</b><br/>";
                    line += item.body + "</td>";
                    line += "<td> <button class='btnLink' onClick='showDetails(" + item.id + ");' > link </button> </td>";

                    line += "</tr>";
                    $("#tblPosts").append(line);
                    if (k + 1 == 10) {
                        return false
                    }
                });
                $("#main").show();
            })
            .fail((xhr, status, error) => {

            })
    }

    $(() => {
        loadPosts();
    })

</script>

</html>
