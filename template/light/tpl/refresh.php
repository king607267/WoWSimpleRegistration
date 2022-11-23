<?php
                        foreach (get_config('realmlists') as $onerealm_key => $onerealm) {
                            $status = user::get_server_status($onerealm['db_host'], get_config('realm_port'));
                            $status_txt = $status ? "[<span style='color: green'>". lang('server_status_online') ."</span>]": "[<span style='color: red'>". lang('server_status_offline') ."</span>]";
                            echo "<p>$status_txt <span style='color: #005cbf;font-weight: bold;'>{$onerealm['realmname']}</span> <span style='font-size: 12px;'>(" . lang('online_players_msg1') . " " . user::get_online_players_count($onerealm['realmid']) . ")</span></p><hr>";
                            $online_chars = user::get_online_players($onerealm['realmid']);
                            if (!is_array($online_chars)) {
                                echo "<span style='color: #0d99e5;'>" . lang('online_players_msg2') . "</span>";
                            } else {
                                echo '<table class="table table-striped"><thead><tr><th scope="col">' . lang('name') . '</th><th scope="col">' . lang('race') . '</th> <th scope="col">' . lang('class') . '</th><th scope="col">' . lang('level') . '</th></tr></thead><tbody>';
                                foreach ($online_chars as $one_char) {
                                    echo '<tr><th scope="row">' . $antiXss->xss_clean($one_char['name']) . '</th><td><img src=\'' . get_config("baseurl") . '/template/' . $antiXss->xss_clean(get_config("template")) . '/images/race/' . $antiXss->xss_clean($one_char["race"]) . '-' . $antiXss->xss_clean($one_char["gender"]) . '.gif\'></td><td><img src=\'' . get_config("baseurl") . '/template/' . $antiXss->xss_clean(get_config("template")) . '/images/class/' . $antiXss->xss_clean($one_char["class"]) . '.gif\'></td><td>' . $antiXss->xss_clean($one_char['level']) . '</td></tr>';
                                }
                                echo '</table>';
                            }
                            echo "<hr>";
                        }
?>
