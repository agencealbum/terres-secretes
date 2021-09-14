<!-- Graphique -->

<?php if (have_rows('rosace')):
    echo '<div id="chart-product">';
    echo '<div class="ts-graphic">';
    echo '<canvas id="myChart" width="298" height="298"></canvas>';

    $names = '[';
    $coordonnees = '[';
    $coordfake = '[';
    $nbPoints = 0;
    if (have_rows('rosace')):
        while (have_rows('rosace')) : the_row();

            if (get_row_index() == 1) {
                $names .= '"' . get_sub_field('champs') . '"';
                $coordonnees .= get_sub_field('valeur');
                $coordfake .= '5';
            } else {
                $names .= ',"' . get_sub_field('champs') . '"';
                $coordonnees .= ',' . get_sub_field('valeur');
                $coordfake .= ',0';
            }

            if (get_sub_field('champs')) {
                echo '<div class="ts-label" id="ts-pos_' . get_row_index() . '">' . get_sub_field('champs') . '</div>';
            }
            $nbPoints = get_row_index();
        endwhile;
    endif;
    $coordonnees .= ']';
    $names .= ']';
    $coordfake .= ']';
    ?>
    <script>
        var nbPoints = <?php echo $nbPoints; ?>;
        var coordonnees = <?php echo $coordonnees; ?>;
        var coordfake = <?php echo $coordfake; ?>;
        var names = <?php echo $names; ?>;
        var areaColor = 'rgba(255, 223, 112, 0.6)';
        showChart();
    </script>
    </div>
    </div>
<?php endif; ?>