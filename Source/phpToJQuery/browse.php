<!DOCTYPE html>
<html>
<head>
  <title>OCDX Browse</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"> </script>
    <div id="includedHeader"></div>
    <script>$("#includedHeader").load("header.php");</script>

<script>
function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    var id_token = googleUser.getAuthResponse().id_token;
    // TODO Send id_token to PHP Backend (This is in place of their user id for authentication)
    // $.ajax({
    //   type: "POST",
    //   url: 'insert.php',
    //   data:{
    //     userID: id_token
    //   }
    // });
    //Need url for insert
    $("#author-name").value(profile.getName());
}
</script>
</head>
  <body>
    <div id="includedNav"></div>
    <script>$("#includedNav").load("nav.php");</script>
    <main>
        <div class="section">
            <div class="container">                
                <div class="row center">
                    <div id="includedSearchBox"></div>
                    <script>$("#includedSearchBox").load("searchBox.php");</script>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div id="searchResults">
                        <table id="manifest-table" class="highlight">
                            <thead>
                                <tr>
                                    <th data-field="title">Title</th>
                                    <th data-field="author">Author</th>
                                    <th data-field="dateCreated">Date Created</th>
                                    <th data-field="dateModified">Date Modified</th>
                                    <th data-field="comments">Comments</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
      </main>
        <div id="includedFooter"></div>
        <script>$("#includedFooter").load("footer.php");</script>
  </body>
</html>
<script>
    $( document ).ready(function() {
        $.ajax({
            url: 'dummyData.json',
            type: 'get',
            dataType: 'text',
            error: function(data){
            },
            success: function(data){
                var json = $.parseJSON(data);
                for (var i=0;i<json.manifests.length;++i)
                {
                    var tr = $('<tr>');
                    tr.append('<td>' + json.manifests[i].title + '</td>');
                    tr.append('<td>' + json.manifests[i].author + '</td>');
                    tr.append('<td>' + json.manifests[i].dateCreated + '</td>');
                    tr.append('<td>' + json.manifests[i].dateModified + '</td>');
                    tr.append('<td>' + json.manifests[i].comments + '</td>');
                    tr.append('<td><a>edit</a></td>');
                    tr.append('<td><a>view</a></td>');
                    $('#manifest-table').append(tr);
                }     
            }
        });
    });
</script>