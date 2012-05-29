﻿<%@ Page Title="" Language="C#" MasterPageFile="~/Areas/aspx/Views/Shared/Web.Master" Inherits="System.Web.Mvc.ViewPage<dynamic>" %>

<asp:Content ContentPlaceHolderID="HeadContent" runat="server">
</asp:Content>

<asp:Content ContentPlaceHolderID="MainContent" runat="server">
<div class="demo-section">

    <h3>Menu with images</h3>

    <%= Html.Kendo().Menu()
          .Name("menuImages")
          .Items(items =>
          {
              items.Add().Text("Baseball")
                   .ImageUrl(Url.Content("~/Content/shared/icons/sports/baseball.png"))
                   .Items(children =>
                   {
                       children.Add().Text("Top News").ImageUrl(Url.Content("~/Content/shared/icons/16/star.png"));
                       children.Add().Text("Photo Galleries").ImageUrl(Url.Content("~/Content/shared/icons/16/photo.png"));
                       children.Add().Text("Videos Records").ImageUrl(Url.Content("~/Content/shared/icons/16/video.png"));
                       children.Add().Text("Radio Records").ImageUrl(Url.Content("~/Content/shared/icons/16/speaker.png"));
                   });

              items.Add().Text("Golf")
                   .ImageUrl(Url.Content("~/Content/shared/icons/sports/golf.png"))
                   .Items(children =>
                   {
                      children.Add().Text("Top News").ImageUrl(Url.Content("~/Content/shared/icons/16/star.png"));
                      children.Add().Text("Photo Galleries").ImageUrl(Url.Content("~/Content/shared/icons/16/photo.png"));
                      children.Add().Text("Videos Records").ImageUrl(Url.Content("~/Content/shared/icons/16/video.png"));
                      children.Add().Text("Radio Records").ImageUrl(Url.Content("~/Content/shared/icons/16/speaker.png"));
                   });

              items.Add().Text("Swimming")
                   .ImageUrl(Url.Content("~/Content/shared/icons/sports/swimming.png"))
                   .Items(children =>
                   {
                      children.Add().Text("Top News").ImageUrl(Url.Content("~/Content/shared/icons/16/star.png"));
                      children.Add().Text("Photo Galleries").ImageUrl(Url.Content("~/Content/shared/icons/16/photo.png"));
                   });

              items.Add().Text("Snowboarding")
                   .ImageUrl(Url.Content("~/Content/shared/icons/sports/snowboarding.png"))
                   .Items(children =>
                   {
                       children.Add().Text("Top News").ImageUrl(Url.Content("~/Content/shared/icons/16/star.png"));
                       children.Add().Text("Photo Galleries").ImageUrl(Url.Content("~/Content/shared/icons/16/photo.png"));
                   });
          })
    %>
</div>

<div class="demo-section">

    <h3>Menu with sprites</h3>

    <%= Html.Kendo().Menu()
          .Name("menuSprites")
          .Items(items =>
          {
              items.Add().Text("Brazil")
                   .SpriteCssClasses("brazilFlag")
                   .Items(children =>
                   {
                       children.Add().Text("History").SpriteCssClasses("historyIcon");
                       children.Add().Text("Geography").SpriteCssClasses("geographyIcon");
                   });
              
              items.Add().Text("India")
                   .SpriteCssClasses("indiaFlag")
                   .Items(children =>
                   {
                       children.Add().Text("History").SpriteCssClasses("historyIcon");
                       children.Add().Text("Geography").SpriteCssClasses("geographyIcon");
                   });
              
              items.Add().Text("Netherlands")
                   .SpriteCssClasses("netherlandsFlag")
                   .Items(children =>
                   {
                       children.Add().Text("History").SpriteCssClasses("historyIcon");
                       children.Add().Text("Geography").SpriteCssClasses("geographyIcon");
                   });
          })
    %>

</div>

<style scoped>
    .demo-section {
        width: 500px;
    }
    .demo-section h3 {
        font-weight: normal;
        padding-bottom: 10px;
    }
    #menuSprites .k-sprite {
        background-image: url("<%= Url.Content("~/Content/shared/styles/flags.png") %>");
    }
    .brazilFlag {
        background-position: 0 0;
    }
    .indiaFlag {
        background-position: 0 -32px;
    }
    .netherlandsFlag {
        background-position: 0 -64px;
    }
    .historyIcon {
        background-position: 0 -96px;
    }
    .geographyIcon {
        background-position: 0 -128px;
    }
</style>
</asp:Content>