<h1>Predictions</h1>
<table>
    <tr>
        <th>Slug</th>
        <th>Name</th>
        <th>Founded</th>
    </tr>

    <?php foreach ($predictions as $prediction): ?>
    <tr>
        <td><?php echo $prediction['Prediction']['slug']; ?></td>
        <td>
            <?php echo $this->Html->link($prediction['Prediction']['name'],
array('controller' => 'predictions', 'action' => 'view', $prediction['Prediction']['slug'])); ?>
        </td>
        <td><?php echo $prediction['Prediction']['founded']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>