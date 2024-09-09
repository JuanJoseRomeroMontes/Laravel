<h1>Activities</h1>
<ol>
    <?php foreach($activities as $activity): ?>
        <li>
            <ul>
                <li>Type: <?= $activity["type"] ?></li>
                <li>Date: <?= $activity["date"] ?></li>
                <li>Notes: <?= $activity["notes"] ?></li>
            </ul>
        </li>
    <?php endforeach?>
</ol>