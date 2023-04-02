<?php
include "partials/header.php";
?>
    <section class="dashboard">
        <div class="container dashboard__container">
            <aside>
                <ul>
                    <li>
                        <a href="add-post.php">Add Post</a>
                    </li>
                    <li>
                        <a href="dashboard.php" >Manage Post</a>
                    </li>
                    <li>
                        <a href="add-User.php">Add User</a>
                    </li>
                    <li>
                        <a href="manage-user.php" class="active">Manage User</a>
                    </li>
                    <li>
                        <a href="add-category.php">Add Category</a>
                    </li>
                    <li>
                        <a href="manage-category.php"  >Manage Category</a>
                    </li>
                </ul>
            </aside>

            <main>
                <h2>Manage User</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>UserName</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>Admin</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Shruti Rathore</td>
                                <td>Shruti15</td>
                                <td><a href="edit-user.html" class="btn sm"> Edit </a></td>
                                <td><a href="delete-user.html" class="btn sm danger"> Delete </a></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>ABC</td>
                                <td>ABC001</td>
                                <td><a href="edit-user.html" class="btn sm"> Edit </a></td>
                                <td><a href="delete-user.html" class="btn sm danger"> Delete </a></td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td>XYZ</td>
                                <td>XYZ123</td>
                                <td><a href="edit-user.html" class="btn sm "> Edit </a></td>
                                <td><a href="delete-user.html" class="btn sm danger"> Delete </a></td>
                                <td>No</td>
                            </tr>
                        </tbody>
                    </table>
                </main>


        </div>
    </section>

</body>
</html>