<?php

    $api_key = "0A63431E94B935A639E8332AF7B527AE";
    $steamid = "76561198011299233";

    $api_url_summary = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=$api_key&steamids=$steamid";
    $api_url_recent = "http://api.steampowered.com/IPlayerService/GetRecentlyPlayedGames/v0001/?key=$api_key&steamid=$steamid&format=json"; 
    $jsummary = json_decode(file_get_contents($api_url_summary), true);
    $jrecent = json_decode(file_get_contents($api_url_recent), true);
    $join_date = date("D, M j, Y", $jsummary["response"]["players"][0]["timecreated"]);

    $last_login_date = date("D, M j, Y H:i:s", $jsummary["response"]["players"][0]["lastlogoff"]);

    function personaState($state,$date,$mins)
    {
        if ($state == 1)
        {
            return "Online";
        }
        elseif ($state == 2)
        {
            return "Busy";
        }
        elseif ($state == 3)
        {
            return "Away";
        }
        elseif ($state == 4)
        {
            return "Snooze";
        }
        elseif ($state == 5)
        {
            return "Looking to trade";
        }
        elseif ($state == 6)
        {
            return "Looking to play";
        }
        else
        {
            $offlinetime = round((time() - $mins)/60,2);
            $unit = " Minutes";
            if($offlinetime >= 120) {
                $offlinetime = round((time() - $mins)/60 / 60,2);
                $unit = " Hours";
            }
            $str = "Offline - ";
            $str .= $offlinetime;
            $str .= $unit;
            return  $str;
        }
    }

?>