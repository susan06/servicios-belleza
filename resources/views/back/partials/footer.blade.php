<div class="footer">
    <div class="pull-right">
        Template <strong>
            <?php
            $git_log = shell_exec("git log -1 --pretty=format:'%h %ci' --abbrev-commit");
            $explode = explode(' ', $git_log);

            if (isset($explode[1]) && isset($explode[2])) {
                echo $explode[0] . ' ' . \App\Components\Helper::date($explode[1] . ' ' . $explode[2], 'Y-m-d H:i:s');
            } else {
                echo 'v1.0';
            }
            ?>
        </strong>
    </div>
    <div>
        <strong>Copyright</strong> Template by Template Services.com &copy; {{date('Y')}}
    </div>
</div>