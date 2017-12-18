<?php

Blade::directive('md', function ($expression) {
    return "<?php echo md_to_html($expression); ?>";
});

Blade::directive('error', function ($expression) {
    return "<?php echo \$errors->first($expression, '<span class=\"help-block\">:message</span>'); ?>";
});

Blade::directive('formGroup', function ($expression) {
    return "<div class=\"form-group<?php echo \$errors->has($expression) ? ' has-error' : '' ?>\">";
});

Blade::directive('endFormGroup', function ($expression) {
    return '</div>';
});

Blade::directive('title', function ($expression) {
    return "<?php \$title = $expression ?>";
});
