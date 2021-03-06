---
title: Positioning
page_title: Window Positioning | Telerik UI for ASP.NET Core HtmlHelpers
description: "Learn how to position and where to open the Kendo UI Window HtmlHelper for ASP.NET Core (MVC 6 or ASP.NET Core MVC)."
slug: htmlhelpers_window_positioning_aspnetcore
position: 3
---

# Window Positioning

The window positioning could be adjusted dynamically using the [Window JavaScript API](https://docs.telerik.com/kendo-ui/api/javascript/ui/window).

## Positioning and Opening

Usually, it is preferable to center the Window rather than open it near the HTML element used to define its content. Often, the Window is opened as a result of a user action rather than of the `load` event of the page. The [Window JavaScript API](https://docs.telerik.com/kendo-ui/api/javascript/ui/window) provides methods for handling these scenarios. Basically, the widget can be initialized as non-visible and can opened when needed.

The example below demonstrates how to center and open a Kendo UI Window on a button click. If content is loaded through Ajax, [centering occurs after request is complete]({% slug htmlhelpers_window_loadingcontent_aspnetcore %}#load-on-demand-content).

###### Example

    @(Html.Kendo().Window()
        .Name("window")
        .Title("Centered Window")
        .Visible(false)
        .Width(200)
        .Height(200)
        .Content(@<text>
                Window content here.
        </text>)
    )

    @(Html.Kendo().Button()
        .Name("button")
        .Content("Open Window")
        .Events(e => e.Click("onClick"))
    )

The example below demonstrates how to center, and open the Window upon button click action.

###### Example

    function onClick(e) {
        var win = $("#window").data("kendoWindow");
        win.center().open();
    }

## See Also

* [Overview of Window HTML helper]({% slug htmlhelpers_window_aspnetcore %})
* [Dimensions]({% slug htmlhelpers_window_dimensions_aspnetcore %})
* [Constraining Position]({% slug htmlhelpers_window_constrain_aspnetcore %})
* [Loading Content]({% slug htmlhelpers_window_loadingcontent_aspnetcore %})
* [Using iframe]({% slug htmlhelpers_window_iframe_aspnetcore %})
* [Integration with Forms]({% slug htmlhelpers_window_forms_aspnetcore %})
