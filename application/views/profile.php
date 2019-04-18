<!DOCTYPE html>
<html>
<head>



</head>

<body>
	<div class="main_contentContainer">
		<div class="main_content">
			<div class="main_contentFloat">
				<div class="left_container">
					<div class="Profile_Picture">
						<a href="">
							<img width="150" alt="Rahmat asdfad" 
								class="profilePictureIcon circularIcon circularIcon--huge circularIcon--border" 
								src="https://s.gr-assets.com/assets/nophoto/user/f_225x300-9aa43f0ccc0355209c834d010c65a83b.png">
						</a>	<br>
						<div class="Status_Info">
							<a href=" ">
								rating
							</a>
							<a onclick=" ">(average)
							</a>
							<div class="floatingBox" 
								style="display:none; width: 550px;">
							</div>	<br>
							<a href="">
								reviews
							</a>        <br>
							<a rel="nofollow" href=" ">more photos (0)</a><br>
						</div>
  					</div>
					<div class="grey500Box userInfoBox" style="width: 460px;">
						<div class="grey500Box userInfoBoxBody">
							<div class="grey500Box userInfoBoxContent">
								<h1 id="profileNameTopHeading" class="userProfileName">
									Rahmat 
									<a class="smallText" href="/user/edit">
										(edit profile)
									</a>
								</h1>
  								<div class="infoBoxRowTitle">
								  	Details
								</div>
								<div class="infoBoxRowItem">
									Age 29, Female, fef, fsf
								</div> <br class="clear">
								<div class="infoBoxRowTitle">
									Birthday
								</div>
								<div class="infoBoxRowItem">
									October 17, 1989
								</div> <br class="clear">
								<div class="infoBoxRowTitle">
									Activity
								</div>
								<div class="infoBoxRowItem">
									Joined in March 2019,
									last active this month
								</div> <br class="clear">
								<div style="text-align: right; width: 90%" class="greyText smallText">
									https://www.goodreads.com/dawdaw
								</div>
							</div>
						</div>
						<div class="grey500Box userInfoBoxBottom">
						</div>
					</div>
					<div class=" clearFloats bigBox">
						<div class="h2Container gradientHeaderContainer">
							<h2 class="brownBackground">
								<a href="/review/list/95173436">
									Rahmat’s Bookshelves
								</a>
							</h2>
						</div>
						<div class="bigBoxBody">
							<div class="bigBoxContent containerWithHeaderContent">
								<div id="shelves">
									<div class="shelfContainer">
										<a class="actionLinkLite userShowPageShelfListItem" href="">
											read‎
											(0)
										</a>            <br>
									</div>
									<div class="shelfContainer">
										<a class="actionLinkLite userShowPageShelfListItem" href="">
											currently-reading‎
											(0)
										</a>            <br>
									</div>
									<div class="shelfContainer">
										<a class="actionLinkLite userShowPageShelfListItem" href="">
										to-read‎
										(0)
									</a>            <br>
									</div>
								</div> 		<br class="clear">
								<div class="right">
								<a class="actionLink" rel="nofollow" href="">Stats</a> |
								<a class="actionLink" href="">More…</a>
								</div>		<br class="clear">
								<div class="clear">
								</div>
							</div>
						</div>
						<div class="bigBoxBottom">
						</div>
					</div>
					<div class=" clearFloats bigBox">
						<div class="h2Container gradientHeaderContainer">
							<h2 class="brownBackground">
								<div class="extraHeader">
									<a href="">	
										edit
									</a>
								</div>
								<a href="">
									Rahmat’s Quotes
								</a>
							</h2>
						</div>
						<div class="bigBoxBody">
							<div class="bigBoxContent containerWithHeaderContent">
    							<div class="mediumText">
									Rahmat hasn't added any quotes yet.
									<a class="actionLink" href="">
										Add quotes now »
									</a>
    							</div>
								<div class="clear">
								</div>
							</div>
						</div>
						<div class="bigBoxBottom">
						</div>
					</div>
					<div class=" clearFloats bigBox">
						<div class="h2Container gradientHeaderContainer">
							<h2 class="brownBackground">
								<a href="">
									Rahmat’s Friend Comments
								</a>
							</h2>
						</div>
						<div class="gr-comment_form-container">
							<label for="comment_body" class="left">
								<strong>
									comment
								</strong>
							</label>
							<div class="right">
								<a href="#" onclick="gr.show_mention_box($('comment_body_usertext')); return false;">add book/author</a>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="#" onclick="Lightbox.showBoxByID('commentFormattingTips', 300); return false;">(some html is ok)</a>
							</div> <br>
  							<textarea name="comment[body_usertext]" 
							  	id="comment_body_usertext" maxlength="12000" 
								rows="8" style="width:100%; resize:auto;" 
								autocomplete="off">
							</textarea>
							<div class="left">
								<input type="submit" name="commit" value="Post" class="gr-button gr-button--small" style="margin-top:3px">
								<span id="comment_form_saving2" style="display:none">
									<img src="https://s.gr-assets.com/assets/loading-45f04d682f1e9151cf1e6fb18a1bde21.gif" alt="Loading">
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<style>
div {
    display: block;
}
.main_contentContainer {
    width: 100%;
    text-align: center;
    padding-bottom: 25px;
}
.main_content {
    margin: 0px auto;
    text-align: left;
    width: 970px;
    background: #FFFFFF;
}
.main_contentFloat {
    float: left;
    width: 960px;
    margin-top: 15px;
    margin-left: 5px;
    font-size: 12px;
    min-height: 400px;
    background: #FFFFFF;
}
.left_container {
    float: left;
    width: 625px;
    padding-right: 10px;
    padding-left: 8px;
    word-wrap: break-word;
}
.Profile_Picture {
    float: left;
    width: 150px;
    margin-right: 10px;
    overflow: hidden;
}
a {
    color: #00635d;
    text-decoration: none;
}
.circularIcon--huge.circularIcon--border {
    border-radius: 76px;
}
.profilePictureIcon {
    object-fit: cover;
    box-sizing: border-box;
}
.circularIcon--border {
    background-color: #FFFFFF;
    border: 1px solid #D8D8D8;
}
.circularIcon--huge {
    height: 150px;
    width: 150px;
}
.Status_Info {
    text-align: center;
}
element.style {
    width: 460px;
}
.grey500Box {
    width: 500px;
}
.bigGreyBox, .grey500Box, .big450Box {
	float:left;
    background-repeat: no-repeat;
    font-family: "Lato", "Helvetica Neue", Helvetica, Arial, sans-serif;
}
.userInfoBoxContent {
    width: 480px;
    float: right;
}
.userProfileName {
    border-bottom: 1px solid #d8d8d8;
    float: left;
    font-style: normal;
    font-size: 20px;
    line-height: 1.3;
    margin: 0;
    margin-bottom: 5px;
    padding: 4px 0 4px 0;
    top: 0;
    width: 445px;
}
.smallText, input.smallText {
    font-family: "Lato", "Helvetica Neue", "Helvetica", sans-serif;
    font-size: 11px;
    line-height: 14px;
}
h1, h2, h3, h4, h5, h6 {
    margin: 4px 0px 4px 0px;
    color: #382110;
    background-color: transparent;
}
.userInfoBox .infoBoxRowTitle {
    width: 25%;
}
.userInfoBox .infoBoxRowItem, .userInfoBox .infoBoxRowTitle {
    font-size: 14px;
    margin-bottom: 4px;
}
.userInfoBox .infoBoxRowItem {
    width: 67%;
}
.userInfoBox .infoBoxRowItem, .userInfoBox .infoBoxRowTitle {
    font-size: 14px;
    margin-bottom: 4px;
}
.infoBoxRowItem {
    float: left;
    width: 75%;
    margin: 1px 0px;
}
.bigBox {
    width: 100%;
    padding-bottom: 10px;
}
.gradientHeaderContainer {
    padding-bottom: 10px;
    width: 100%;
}
.h2Container {
    background-position: top right;
    background-repeat: no-repeat;
    height: 28px;
    overflow: hidden;
    white-space: nowrap;
}
.bigBox .h2Container h2 {
    display: block;
    font-family: "Lato", "Helvetica Neue", Helvetica, Arial, sans-serif;
    padding: 2px 0;
    width: auto;
    height: 24px;
    margin-bottom: 0;
    font-weight: bold;
    font-size: 12px;
    text-transform: uppercase;
}
h2.brownBackground {
    background: transparent;
    border-bottom: 1px solid #D8D8D8;
}
.h2Container h2 {
    position: relative;
    top: 0px;
}
H1, .h2Container H2, .pageHeader h2 {
    
    margin-top: 0;
    
    color: #382110;
    line-height: 24px;
}
h2 {
    margin-block-start: 0.83em;
    margin-block-end: 0.83em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}
.containerWithHeaderContent {
    padding: 0 0 10px 0;
}
.shelfContainer {
    float: left;
    margin-right: 5px;
    max-height: 230px;
    overflow: hidden;
    text-align: left;
    text-overflow: ellipsis;
    white-space: nowrap;
    width: 145px;
}
.userShowPageShelfListItem {
    font-size: 14px;
}
.actionLinkLite {
    color: #00635d;
    font-family: "Lato", "Helvetica Neue", Helvetica, Arial, sans-serif;
    text-decoration: none;
}
h2.brownBackground a {
    color: #382110;
    font-family: "Lato", "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
}
.right {
    float: right;
}
.actionLink {
    color: #00635d;
    font-family: "Lato", "Helvetica Neue", Helvetica, Arial, sans-serif;
    text-decoration: none;
    font-size: 13px;
    font-weight: bold;
}

</style>



</html>