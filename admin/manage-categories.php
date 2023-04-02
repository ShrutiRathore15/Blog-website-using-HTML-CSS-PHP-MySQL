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
                        <a href="manage-user.php">Manage User</a>
                    </li>
                    <li>
                        <a href="add-category.php">Add Category</a>
                    </li>
                    <li>
                        <a href="manage-categories.php" class="active" >Manage Category</a>
                    </li>
                </ul>
            </aside>


            <main>
                <h2>Manage Categories</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Travel</td>
                                <td><a href="edit-category.html" class="btn sm"> Edit </a></td>
                                <td><a href="delete-category.html" class="btn sm danger"> Delete </a></td>
                            </tr>
                            <tr>
                                <td>Lifestyle</td>
                                <td><a href="edit-category.html" class="btn sm"> Edit </a></td>
                                <td><a href="delete-category.html" class="btn sm danger"> Delete </a></td>
                            </tr>
                            <tr>
                                <td>Sciene & Technology</td>
                                <td><a href="edit-category.html" class="btn sm "> Edit </a></td>
                                <td><a href="delete-category.html" class="btn sm danger"> Delete </a></td>
                            </tr>
                        </tbody>
                    </table>
                </main>


        </div>
    </section>

</body>
</html>