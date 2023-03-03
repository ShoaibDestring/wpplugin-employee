<table class="table table-dark table-hover">

    <thead class="h-data">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
        </tr>
    </thead>
    <tbody>

        <?php

        foreach ($results as $data) {
        ?>
            <tr>
                <th scope="row"><?php echo $data->id ?></th>
                <td scope="row"><?php echo $data->name ?></td>
                <td scope="row"><?php echo $data->email ?></td>
                <td scope="row"><?php echo $data->phone_no ?></td>
                <td scope="row"><?php echo $data->address ?></td>

            </tr>
        <?php
        }
        ?>



    </tbody>
</table>