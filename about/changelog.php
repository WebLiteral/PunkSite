<?php include_once ('../variables.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>LiteralChangelog.</title>
    <meta name="LiteralHat | Changelog." content="View the site's version history and changes here." />
    <?php include_once ($folder . '/elements/headtags.php') ?>
</head>

<body>
    <main>

        <!-- Header and opening main content div used for styling  -->
        <?php include_once ($header) ?>
        <?php include_once ($menutop) ?>
        <!-- side bar on the left.  -->

        <div class="contentrowstripe centerbox">
            <div class='boxedsection'>
                <div class='sidecontainer'>

                    <?php include_once ($menusimple) ?>
                </div>

                <div class='widthcontainer'>
                    <div class='contentcontainer'>
                        <div class="whitebox center toneblack">
                            <div class='whiteborder padded'>
                                <hr>
                                <h1 class='white padtop large'>
                                    Changelog.
                                </h1>
                                <hr>
                            </div>
                        </div>
                    </div>

                    <section>
                        <div class='contentcontainer'>

                            <div class="whitebox padded">
                                <p class="bold">This is the site's official changelog.</p>
                                <p>This website is still in development. Functionality is limited as a result. Please
                                    forgive any broken links, images, etc.</p>
                                <p>To view this website's Git repository and version history, <a
                                        href="https://github.com/LiteralHat/literalhat.com" target="_blank">click
                                        here.</a>
                                </p>
                                <p class="warning">If this website appears broken, you need to clear your cache (hard
                                    refresh on desktop with CTRL + SHIFT R).</p>
                            </div>

                        </div>
                    </section>

                    <section>
                        <div class='contentcontainer'>
                            <div class='whitebox tone2 paddedsm'>
                                <div class="whitebox padded">
                                    <h2 class='textred'>Known Major Issues</h2>
                                    <ul>
                                        <li>None at the moment</li>
                                    </ul>

                                    <h2 class='textgreen'>Unreleased</h2>
                                    <ul>
                                        <li>Working search bar</li>
                                        <li>Better site theme</li>
                                        <li>Toggleable site theme (dark mode, high contrast, etc.)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>


                    <section>
                        <div class='contentcontainer'>
                            <div class="whitebox padded">

                                <h3>v13.6.0-beta 13.04.2024</h3>
                                <ul>
                                    <li>Fixed incorrect variable causing entire gallery sorting methods to break in gallery</li>
                                </ul>

                                <h3>v13.5.0-beta 12.04.2024</h3>
                                <ul>
                                    <li>Added sortby functionality to gallery page</li>
                                    <li>Added <a href='../artworks/archive'>gallery archive</a> page</li>
                                    <li>Added spacer to bottom of gallery page</li>
                                    <li>Fixed random button on gallery header</li>
                                    <li>Changed 'known issues' to 'known major issues'</li>
                                    <li>Updated About + FAQ</li>
                                    <li>Added pagenation to gallery</li>
                                    <li>Added session to gallery</li>
                                    <li>Removed jQuery scripts</li>
                                </ul>

                                <h3>v12.5.0-beta 11.04.2024</h3>
                                <ul>
                                    <li>Added filter functionality to gallery page</li>
                                    <li>Added artwork counter to gallery page</li>
                                    <li>Added mobile responsiveness to all gallery pages</li>
                                    <li>Added better individual artwork viewer buttons</li>
                                    <li>Fixed thumbnail spacing issues</li>
                                </ul>

                                <h3>v11.5.0-beta 09.04.2024</h3>
                                <ul>
                                    <li>Added LiteralGallery!</li>
                                    <li>Added individual gallery pages</li>
                                    <li>Added placeholder images for gallery</li>
                                    <li>Added gallery to menu</li>
                                    <li>Updated About FAQ page</li>
                                </ul>


                                <h3>v10.5.0-beta 06.04.2024</h3>
                                <ul>
                                    <li>Added thumbnail rendering to fanart page</li>
                                    <li>Fixed changelog issues</li>
                                </ul>

                                <h3>v10.4.0-beta 06.04.2024</h3>
                                <ul>
                                    <li>Updated frontpage</li>
                                    <li>Added gallery loading animation</li>
                                    <li>Added gallery basic hover effect</li>
                                    <li>Added better gallery lightbox</li>
                                    <li>Added better gallery credits</li>
                                    <li>Added better responsiveness on tablet width devices</li>
                                    <li>Fixed unwanted whitespace on right of screen on some devices</li>
                                    <li>Fixed gallery year hover colors</li>
                                </ul>

                                <h3>v9.4.0-beta 05.04.2024</h3>
                                <ul>
                                    <li>Added gallery functionality</li>
                                </ul>

                                <h3>v8.4.0-beta 04.04.2024</h3>
                                <ul>
                                    <li>Added Rock Paper Scissors</li>
                                    <li>Updated Patreon Name List</li>
                                    <li>Fixed responsiveness issue on medium tablet pagewidths</li>
                                    <li>Updated About + FAQ</li>
                                </ul>

                                <h3>v7.4.0-beta 23.03.2024</h3>
                                <ul>
                                    <li>Added placeholder fanart gallery</li>
                                    <li>Added placeholder gallery tab</li>
                                    <li>Fixed display issues on certain contentwidths on mobile</li>
                                    <li>Fixed broken 'back to top' display</li>
                                    <li>Added better header color functionality</li>
                                </ul>

                                <h3>v6.4.0-beta 20.03.2024</h3>
                                <ul>
                                    <li>Removed padding from footer that caused a white bar on right side of page</li>
                                    <li>Removed 'back to top' button on mobile devices</li>
                                    <li>Added mobile responsive 'side' menu</li>
                                    <li>Changed spacing on top of menu bar on subpages</li>
                                </ul>

                                <h3>v6.3.0-beta 20.03.2024</h3>
                                <ul>
                                    <li>Added page sectioning</li>
                                    <li>Added 404 page</li>
                                    <li>Added mobile responsiveness</li>
                                    <li>Added better stylesheet on literalhat.com/cat_sounds</li>
                                    <li>Added super cool homepage splash picture</li>
                                    <li>Added Patron list</li>
                                    <li>Added cat pictures</li>
                                    <li>Removed search bar</li>
                                    <li>Changed site navbar</li>
                                    <li>Changed site logo</li>
                                    <li>Fixed site templating and some backend issues</li>
                                    <li>Fixed typo on 'Pugglester'</li>
                                    <li>Punched a homophobe</li>
                                </ul>

                                <h3>v5.3.0-beta 17.03.2024</h3>
                                <ul>
                                    <li>Added useless random site icon</li>
                                    <li>Added .htaccess</li>
                                    <li>Fixed fonts breaking on some browsers</li>
                                    <li>Fixed missing margin on top menu on mobile devices</li>
                                    <li>Moved Terms of Use and Privacy Policy to footer</li>
                                </ul>

                                <h3>v5.2.0-beta 16.03.2024</h3>
                                <ul>
                                    <li>Added menu navigation bar</li>
                                    <li>Added consistent site colors</li>
                                    <li>Added about+FAQ page</li>
                                    <li>Added gamer QnA</li>
                                    <li>Removed goback button</li>
                                    <li>Added variables in place of fonts on stylesheet</li>
                                    <li>Changed link colors to gray</li>
                                </ul>


                                <h3>v4.2.0-beta 15.03.2024</h3>
                                <ul>
                                    <li>Added basic templating to site</li>
                                    <li>Added cache warning to front page</li>
                                    <li>Fixed several formatting issues on about/terms_of_use</li>
                                    <li>Added temporary goback button on non-homepage pages</li>
                                </ul>

                                <h3>v3.2.0-beta 13.03.2024</h3>
                                <ul>
                                    <li>Changed site file hierachy</li>
                                    <li>Added social media links to some testers</li>
                                </ul>

                                <h3>v3.1.0-beta 10.03.2024</h3>
                                <ul>
                                    <li>Added changelog, terms of use, privacy policy</li>
                                    <li>Added temporary special thanks section</li>
                                    <li>Changed margin spacing on mobile devicfes</li>
                                    <li>Fixed scaling issues on certain mobile resolutions</li>
                                    <li>Fixed goback button on temporary pages (like this one)</li>
                                    <li>Added useless cat sounds</li>
                                </ul>

                                <h3>v2.1.0-beta 09.03.2024</h3>
                                <ul>
                                    <li>Website is now fully mobile responsive!!</li>
                                </ul>

                                <h3>v1.1.0-beta 09.03.2024</h3>
                                <ul>
                                    <li>Changed organisation of divs, overlapping class properties, internal file
                                        structure</li>
                                    <li>Fixed non semantic html tags</li>
                                    <li>Fixed mobile specific issue where the background would appear as black instead
                                        of white</li>
                                </ul>
                                <h3>v1.0.0-beta 07.03.2024</h3>
                                <ul>
                                    <li>Added basic styling to site</li>
                                    <li>Added link colors</li>
                                    <li>Added basic css styling to text</li>
                                    <li>Added cat picture</li>
                                </ul>
                                <h3>v1.0.0-alpha 05.03.2024</h3>
                                <ul>
                                    <li>Added basic landing webpage to ensure propagation has occured</li>
                                </ul>


                            </div>
                        </div>
                    </section>


                </div>







                <div class='sidecontainer'>
                    <div class='contentbox padtop'>
                    </div>
                </div>

            </div>

        </div>
        <!-- Footer and closing div tags used for styled main content box  -->

        <?php include ($footer) ?>
    </main>
</body>

</html>