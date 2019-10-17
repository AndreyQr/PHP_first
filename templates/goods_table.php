<table class="table table-striped">
    <thead>
    <tr>
        <th>#</th>
        <th>Название товара</th>
        <th>Описание</th>
        <th>Цена</th>
    </tr>
    </thead>

    <tbody>
		<?php foreach ($images as $item): ?>
        <tr>
            <th scope="row"><?= $item['images_id'] ?></th>
            <td>
							<?php if ($item['is_active'] == 0): ?>
                  <s><?= $item['images_name'] ?></s>
							<?php else: ?>
								<?= $item['images_name'] ?>
							<?php endif; ?>
            </td>
            <td><?= $item['images_description'] ?></td>
            <td><?= $item['images_price'] ?></td>
        </tr>
		<?php endforeach; ?>
    </tbody>
</table>