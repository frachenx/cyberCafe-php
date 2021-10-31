<?php require_once("header.php") ?>
    <div class="mx-5">
        <form action="" id="mForm">
            <label for="">Search by Username or EntryID</label> 
            <input type="text" id="word" class="form-control">
            <input type="submit" class="btn btn-primary btn-block">
        </form>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>EntryID</th>
                    <th>Full Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="results">

            </tbody>
        </table>
    </div>


    <!--jQuery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>

        $(function(){
            $("#mForm").submit((e)=>{
                e.preventDefault();
                var searchWord = $("#word").val();
                $.ajax({
                    url: "includes/searchUser.php",
                    type: "POST",
                    data: {searchWord},
                    success: function(response){
                        console.log(response);
                        const users = JSON.parse(response);
                        var template="";
                        users.forEach(user =>{
                            template +=`
                                <tr>
                                    <td>${user.count}</td>
                                    <td>${user.id}</td>
                                    <td>${user.name}</td>
                                    <td>
                                    <a class="btn btn-primary" href="view-user-detail.php?id=${user.userID}"><i class="far fa-eye"></i></a>
                                    </td>
                                </tr>
                            `;
                        });
                        $("#results").html(template);

                    }
                })
            })

        })
    </script>
<?php require_once("footer.php") ?>