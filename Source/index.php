<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'materialize.php'; ?>
</head>

<body>
    <?php include "nav.php"; ?>
    <div id="index-banner">
        <div class="section">
            <div class="container">
                <h2 class="header center teal-text text-lighten-2">Open Community Data Exchange</h2>
                <div class="row center">
                  <?php include "searchBox.php" ?>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div id="searchResults">
                        <table>
                            <thead>
                                <tr>
                                    <th data-field="title">Title</th>
                                    <th data-field="author">Author</th>
                                    <th data-field="dateCreated">Date Created</th>
                                    <th data-field="dateModified">Date Modified</th>
                                    <th data-field="comments">Comments</th>
                                    <th data-field="edit"></th>
                                    <th data-field="view"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>dataset1</td>
                                    <td>First Last</td>
                                    <td>12-10-2015</td>
                                    <td>3-1-2016</td>
                                    <td>lorem ipsum</td>
                                    <td><a>Edit</a></td>
                                    <td><a>View</a></td>
                                </tr>
                                <tr>
                                    <td>dataset2</td>
                                    <td>First Last</td>
                                    <td>12-13-2015</td>
                                    <td>3-5-2016</td>
                                    <td>lorem ipsum</td>
                                    <td><a>Edit</a></td>
                                    <td><a>View</a></td>
                                </tr>
                                <tr>
                                    <td>dataset3</td>
                                    <td>First Last</td>
                                    <td>1-10-2016</td>
                                    <td>4-8-2016</td>
                                    <td>lorem ipsum</td>
                                    <td><a>Edit</a></td>
                                    <td><a>View</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
</body>

</html>
