<?php
function cardActivity(String $imagePath, String $title, String $description, String $id){
    echo "
    <div class=\"card\" id='$id'>
                <div class=\"card-image waves-effect waves-block waves-light\">
                    <img class=\"activator\" src=\"$imagePath\" style='height: 259.05px; width: 404.16px;'>

                </div>
                <div class=\"card-content\">
                    <span class=\"card-title activator grey-text text-darken-4\">$title<i class=\"material-icons right\">more_vert</i></span>
                    <p><a href=\"#\">Découvrir</a></p>
                </div>
                <div class=\"card-reveal\">
                    <span class=\"card-title grey-text text-darken-4\">$title<i class=\"material-icons right\">close</i></span>
                    <p style='padding: 50px;'>$description</p>
                </div>
            </div>
    ";
}

function cardProvider(String $title, String $activity, String $groupMode){
    echo "
    <div class=\"card\">
                <a href=\"item_events.php\">
                    <div class=\"card-image\">
                        <img src=\"https://source.unsplash.com/800x600/?beach\" height=\"200px\">
                        <span class=\"card-title\">$title</span>
                    </div>
                    <div class=\"card-content themeColorSecondary\">
                        <table class=\"white-text\">
                            <tbody>
                            <tr>
                                <td class=\"right\">$activity</td>
                            </tr>
                            <tr>
                                <td class=\"right\" style=\"text-transform: uppercase;\">$groupMode</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </a>
                <div class=\"card-action justifyContentBetween ml20\">
                    <a class=\"btn-floating btn-small themeColorPurple mr20\"><i class=\"material-icons\">supervisor_account</i></a>
                    <a class=\"btn-floating btn-small themeColorDark mr20\">🤍</a>
                    <a class=\"btn-floating btn-small themeColorDark mr20\" style='display: none;'>❤️</a>
                </div>
            </div>
    ";
}

function cardEvents(String $title, String $activity, String $groupMode, String $priceMode, String $childMode, String $datetime){
    echo "
    <div class=\"card\">
                <a href=\"item_events.php\">
                    <div class=\"card-image\">
                        <img src=\"https://source.unsplash.com/800x600/?beach\" height=\"300px\">
                        <span class=\"card-title\">$title</span>
                    </div>
                    <div class=\"card-content\">
                        <table class=\"\">
                            <tbody>
                            <tr>
                                <td class=\"right\">$activity</td>
                            </tr>
                            <tr>
                                <td class=\"right\" style=\"text-transform: uppercase;\">$groupMode</td>
                            </tr>
                            <tr>
                                <td class=\"right\">$priceMode</td>
                            </tr>
                            <tr>
                                <td class=\"right\">$childMode</td>
                            </tr>
                            <tr>
                                <td class=\"right\">$datetime</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </a>
                <div class=\"card-action justifyContentBetween ml20\">
                    <a class=\"btn-floating btn themeColorPurple mr20\"><i class=\"material-icons\">supervisor_account</i></a>
                    <a class=\"btn-floating btn themeColorDark mr20\">🤍</a>
                    <a class=\"btn-floating btn-large themeColorDark mr20\" style='display: none;'>❤️</a>
                </div>
            </div>
    ";
}
?>