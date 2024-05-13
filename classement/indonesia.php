<?php

$league_id = 194;
require './aksescurl.php';

?>

<div class="card">
  <div class="card-body">
    <h6 class="card-subtitle mb-2 text-body-secondary">Classement</h6>
    <h5 class="card-title border-bottom border-primary pb-3">Indonesia League</h5>
    <table class="table">
        <thead>
            <tr class="text-center">
                <th scope="col">Position</th>
                <th scope="col">Team</th>
                <th scope="col">Played</th>
                <th scope="col">Won</th>
                <th scope="col">Drawn</th>
                <th scope="col">Lost</th>
                <th scope="col">Points</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($response as $country): ?>
                <tr>
                    <td class="text-center"><?php echo $country['overall_league_position']; ?></td>
                    <td>
                        <img src="<?php echo $country['team_badge']; ?>" alt="Logo team" width="50px">
                        <?php echo $country['team_name']; ?>
                    </td>
                    <td class="text-center"><?php echo $country['overall_league_payed']; ?></td>
                    <td class="text-center"><?php echo $country['overall_league_W']; ?></td>
                    <td class="text-center"><?php echo $country['overall_league_D']; ?></td>
                    <td class="text-center"><?php echo $country['overall_league_L']; ?></td>
                    <td class="text-center"><?php echo $country['overall_league_PTS']; ?></td>
                </tr>
            <?php endforeach; ?> 
        </tbody>
    </table>
  </div>
</div>


 