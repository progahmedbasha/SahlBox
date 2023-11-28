<style>
    .secondary_nav_bar_background_color {
        background-color: {{ $theme['secondary_nav_bar_background_color']?? '' }} !important;
    }

    .primary_button_color {
        background-color: {{ $theme['primary_button_color']  }};
        border-color: {{ $theme['primary_button_color']  }};
    }
    .icon_color{
        color: {{ $theme['icon_color']  }} !important;
    }
    .primary_button_color:hover{
        background-color: {{ $theme['primary_button_hover_color'] }} !important;
        border-color: {{ $theme['primary_button_hover_color']  }} !important;
    }
        .primary_nav_bar_background_color{
         background-color: {{ $theme['primary_nav_bar_background_color']  }}  !important;
    }
    .secondary_button_color {
    color: {{ $theme['secondary_button_color']  }}  !important;
    border-color: {{ $theme['secondary_button_color']  }}  !important;
    }
    .secondary_button_color:hover {
    color: #212529 !important;
    background-color: {{ $theme['secondary_button_hover_color']  }} !important;
    border-color: {{ $theme['secondary_button_hover_color']  }} !important;
    }
    /* secondary */
    .primary_text_color {
        color: {{ $theme['primary_text_color']  }} !important;
    }
    
    .secondary_text_color {
        color: {{ $theme['secondary_text_color']  }} !important;
    }
    .form-control:focus {
        border-color: {{ $theme['input_focus_color']  }} !important;
    }
    a {
        color: {{ $theme['a_href_color']  }} !important;;
    }
    a:hover {
        color: {{ $theme['a_href_hover_color']  }} !important;
    }
/*  */
</style>