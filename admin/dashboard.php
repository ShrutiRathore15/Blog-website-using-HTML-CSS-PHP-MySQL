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
                        <a href="dashboard.php" class="active">Manage Post</a>
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
                        <a href="manage-categories.php" >Manage Category</a>
                    </li>
                </ul>
            </aside>

            <main>
                <h2>Manage Posts</h2>
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
                                <td>Pellentesque rutrum velit sed placerat aliquet.</td>
                                <td><a href="edit-posts.php" class="btn sm"> Edit </a></td>
                                <td><a href="delete-posts.php" class="btn sm danger"> Delete </a></td>
                            </tr>
                            <tr>
                                <td>Nulla nec commodo orci.</td>
                                <td><a href="edit-posts.php" class="btn sm"> Edit </a></td>
                                <td><a href="delete-posts.php" class="btn sm danger"> Delete </a></td>
                            </tr>
                            <tr>
                                <td>Sed semper nisl eget tellus lacinia dictum</td>
                                <td><a href="edit-posts.php" class="btn sm "> Edit </a></td>
                                <td><a href="delete-posts.php" class="btn sm danger"> Delete </a></td>
                            </tr>
                        </tbody>
                    </table>
                </main>


        </div>
    </section>

</body>
</html>