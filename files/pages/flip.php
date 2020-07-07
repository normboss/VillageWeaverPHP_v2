<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/flip.css">
    <title>Flip</title>
</head>

<body>

    <ul class="gallery-elements">
        <li class="item transition">
            <div class="item-flipper">
                <div class="item-front">
                    <div class="item-content">
                        <h4>Cultural Transformation</h4>
                    </div>
                </div>
                <div class="item-back">
                    <div class="item-content">
                        <p>Global energy company recognized that <strong>cultural transformation</strong> and <strong>organizational alignment</strong> would be required to achieve sustainable growth and implement critical changes in operations to realize necessary safety changes.</p>
                    </div>
                </div>
            </div>
        </li>
        <li class="item transition">
            <div class="item-flipper">
                <div class="item-front">
                    <div class="item-content">
                        <h4>Redesign Work Environment</h4>
                    </div>
                </div>
                <div class="item-back">
                    <div class="item-content">
                        <p>Using a national retailer's long-range vision and brand guidelines, the firm <strong>redesigned the work environment</strong>, with appropriate design narratives, to recreate the brand and its corresponding experience for customers and employees.</p>
                    </div>
                </div>
            </div>
        </li>
        <li class="item dislocation">
            <div class="item-flipper">
                <div class="item-front">
                    <div class="item-content">
                        <h4>Workforce Alignment</h4>
                    </div>
                </div>
                <div class="item-back">
                    <div class="item-content">
                        <p>Conducted collaborative leadership work sessions to help <strong>develop, implement and align the human capital management applications</strong> hiring, evaluation, development, and succession planning) of a Fortune 100 company with the organization’s vision, values and strategic objectives.</p>
                    </div>
                </div>
            </div>
        </li>
    </ul>

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $(function () {
        var items = $('.gallery-elements').find('.item');
        $.each(items, function () {
        $(this).on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('flip');
        });
        });
        });
    </script>

</body>

</html>