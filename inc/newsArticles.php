<?php
    include_once 'dbh.php';

    $sql = "SELECT * FROM news WHERE id=1;";
    $result = $conn->query($sql);


    echo '<div class="news-row">';
        
        if ($result->rowCount() > 0)  { //checks the results if its 0 then it can run the code (prevents errors)
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo '<div class="careers article">';
                    echo '<a href="#" class="news-card-link"></a>';
                        echo '<a href="#" class="img-banner-text">Careers</a>';
                            echo '<img class="main-article-img" src="'  . $row['imgsrc'] .  '" alt="A picture advertising a job for junior digital marketing executive.">';
                    echo '<div class="news-content">';
                        echo '<h3 class="h3-news">'    . $row['title'] .   '</h3>';
                        echo '<p class="description">' . $row['description'] . '</p>';
                        echo '<a href="#"><button class="news-read-more-btn" type="button">Read More</button></a>';
                        echo '<div class="posted-by-section">';
                            echo '<div>';
                                echo '<img class="avatar-img" src="' . $row['authorsrc'] . '" alt="An avatar of the user who posted the article.">';
                            echo '</div>';
                            echo '<div class="details">';
                                echo '<strong class="posted-strong">' . $row['author'] . '</strong><br>' . $row['dateposted'];
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            }
        }
                
        $secondSql = "SELECT * FROM news WHERE id=2;";
        $secondResults = $conn->query($secondSql);

        if ($secondResults->rowCount() > 0) { //checks the results if its 0 then it can run the code (prevents errors)
            while ($row = $secondResults->fetch(PDO::FETCH_ASSOC)) {
                echo '<div class="insights article">';
                    echo '<a href="#" class="news-card-link"></a>';
                    echo '<a href="#" class="img-banner-text">insights</a>';
                    echo '<img class="main-article-img" src="'  . $row['imgsrc'] .  '" alt="Text stating What you dont know about seo">';
                    echo '<div class="news-content">';
                        echo '<h3 class="h3-news">'    . $row['title'] .   '</h3>';
                        echo '<p class="description">' . $row['description'] . '</p>';
                        echo '<a href="#"><button class="news-read-more-btn" type="button">Read More</button></a>';
                        echo '<div class="posted-by-section">';
                            echo '<div>';
                                echo '<img class="avatar-img" src="' . $row['authorsrc'] . '" alt="An avatar of the user who posted the article.">';
                            echo '</div>';
                            echo '<div class="details">';
                                echo '<strong class="posted-strong">' . $row['author'] . '</strong><br>' . $row['dateposted'];
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            }
        }

        $thirdSql = "SELECT * FROM news WHERE id=3;";
        $thirdResults = $conn->query($thirdSql);

        if ($thirdResults->rowCount() > 0) { //checks the results if its 0 then it can run the code (prevents errors)
            while ($row = $thirdResults->fetch(PDO::FETCH_ASSOC)) {
                echo '<div class="careers hide article">';
                    echo '<a href="#" class="news-card-link"></a>';
                    echo '<a href="#" class="img-banner-text">Careers</a>';
                    echo '<img class="main-article-img" src="' . $row['imgsrc'] . '"alt="A picture with a phone advertising jobs for new business exectuives">';
                    echo '<div class="news-content">';
                        echo '<h3 class="h3-news">' . $row['title'] . '</h3>';
                        echo '<p class="description">' . $row['description'] . '</p>';
                        echo '<a href="#"><button class="news-read-more-btn" type="button">Read More</button></a>';
                        echo '<div class="posted-by-section">';
                            echo '<div>';
                                echo '<img class="avatar-img" src="' . $row['authorsrc'] . '" alt="An avatar of the user who posted the article.">';
                            echo '</div>';
                            echo '<div class="details">';
                                echo '<strong class="posted-strong">' . $row['author'] . '</strong><br>' . $row['dateposted'];
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            }
        }
    
    echo '</div>';
?>