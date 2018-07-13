<template>
    <div class="resume">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <div class="resume-headings text-center py-5">
                        <h2 class="h2-responsive">
                            Resume
                            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                        </h2>
                        <p class="py-4">Academic and professional timeline.</p>
                    </div>

                    <div class="resume-wrapper py-5">
                        <div class="work-experience experience-row">
                            <div class="experience-side-title"><h3>Experience</h3></div>

                            <ul class="experience">
                                <li class="experience-list-item">
                                    <div class="experience-heading">
                                        <h3><span class="employment-time job-current">2018 - Present</span><span class="experience-heading-icon">↘</span><span class="employer">TGA Limited</span><span class="position">Front-End Developer</span></h3>
                                    </div>
                                    <div class="experience-details">
                                        <div class="expereince-details-inner">
                                            <p>Codetic is a high standards WordPress agency providing quality WordPress solutions. Codetic also crafts premium products for Envato.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="experience-list-item">
                                    <div class="experience-heading">
                                        <h3><span class="employment-time job-past">2017 - 2018</span><span class="experience-heading-icon">↘</span><span class="employer">Juvenile Pacers BD</span><span class="position">Software Engineer</span></h3>
                                    </div>
                                    <div class="experience-details">
                                        <div class="expereince-details-inner">
                                            <p>Themeco is the proud home of the one and only <a href="http://bit.ly/x-theme-wp" target="_blank">"X - The Theme" for WordPress.</a> My key job was helping people use Themeco’s products, including X, Pro, Cornerstone and more; investigating and analyzing bugs, creating detailed bug reports and help to extend features.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="experience-list-item">
                                    <div class="experience-heading">
                                        <h3><span class="employment-time job-past">2016 - 2017</span><span class="experience-heading-icon">↘</span><span class="employer">BioBank of Bangladesh</span><span class="position">Jr. Software Developer</span></h3>
                                    </div>
                                    <div class="experience-details">
                                        <div class="expereince-details-inner">
                                            <p>Bdinfosys is fundamentally changing the way information is published and consumed in the enterprise, helping customers to improve operations, drive growth, and quickly adapt to changes in business demands. Lead the development team there.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="experience-list-item">
                                    <div class="experience-heading">
                                        <h3><span class="employment-time job-current">2017 - Present</span><span class="experience-heading-icon">↘</span><span class="employer">Tutexp software</span><span class="position">Software Engineer</span></h3>
                                    </div>
                                    <div class="experience-details">
                                        <div class="expereince-details-inner">
                                            <p>Team member of “Tutexp Software” since 2017. It's our own startup team. We are trying to build an Energetic Software Development team all over the world.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="edu-experience experience-row py-5 mt-2">
                            <div class="experience-side-title edu-height"><h3>Education</h3></div>
                            <ul class="experience">
                                <li class="experience-list-item">
                                    <div class="experience-heading">
                                        <h3><span class="experience-heading-icon">↘</span><span class="employer">Computer Science &amp; Engineering</span><span class="position">Bachelor of Science</span><span class="employment-time">2011 - 2014</span></h3>
                                    </div>
                                    <div class="experience-details" style="display: none;">
                                        <div class="expereince-details-inner">
                                            <p>Completed graduation in Computer Science &amp; Engineering form <br> Dhaka City College under National University of Bangladesh </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="skills experience-row py-5 mt-2">
                            <div class="experience-side-title skills-height"><h3>Skills</h3></div>
                            <ul class="experience">
                                <li class="experience-list-item">
                                    <div class="experience-heading">
                                        <h3><span class="experience-heading-icon">↘</span><span class="employer">GIT</span><span class="position">khandakerakash</span></h3>
                                    </div>
                                    <div class="experience-details" >
                                        <div class="expereince-details-inner">
                                            <a href="https://github.com/khandakerakash" target="_blank" class="url-btn">Profile URL</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="experience-list-item">
                                    <div class="experience-heading"  @click="Database">
                                        <h3><span class="experience-heading-icon">↘</span><span class="employer">Database</span><span class="position">MongoDB, MySQLi, MySQL</span></h3>
                                    </div>
                                    <div class="experience-details" v-show="showBool">
                                        <div class="expereince-details-inner">
                                            <b-progress :value="counter" show-progress variant="info"></b-progress>
                                        </div>
                                    </div>
                                </li>

                                <li class="experience-list-item">
                                    <div class="experience-heading" @click="Programming">
                                        <h3><span class="experience-heading-icon">↘</span><span class="employer">Programming Language</span><span class="position">C, Java, PHP</span></h3>
                                    </div>
                                    <div class="experience-details" v-show="showBool">
                                        <div class="expereince-details-inner">
                                            <b-progress :value="counter" show-progress variant="secondary"></b-progress>
                                        </div>
                                    </div>
                                </li>

                                <li class="experience-list-item">
                                    <div class="experience-heading" @click="phpFramework">
                                        <h3><span class="experience-heading-icon">↘</span><span class="employer">PHP Framework</span><span class="position">Laravel 5.6</span></h3>
                                    </div>
                                    <div class="experience-details" v-show="showBool">
                                        <div class="expereince-details-inner">
                                            <b-progress :value="counter" show-progress variant="danger"></b-progress>
                                        </div>
                                    </div>
                                </li>

                                <li class="experience-list-item">
                                    <div class="experience-heading" @click="scriptingLang">
                                        <h3><span class="experience-heading-icon">↘</span><span class="employer">Scripting Language</span><span class="position">JavaScript</span></h3>
                                    </div>
                                    <div class="experience-details" v-show="showBool">
                                        <div class="expereince-details-inner">
                                            <b-progress :value="counter" show-progress variant="success"></b-progress>
                                        </div>
                                    </div>
                                </li>

                                <li class="experience-list-item">
                                    <div class="experience-heading" @click="jsLibrary">
                                        <h3><span class="experience-heading-icon">↘</span><span class="employer">JavaScript Library</span><span class="position">jQuery, React JS</span></h3>
                                    </div>
                                    <div class="experience-details" v-show="showBool">
                                        <div class="expereince-details-inner">
                                            <b-progress :value="counter" show-progress variant="warning"></b-progress>
                                        </div>
                                    </div>
                                </li>

                                <li class="experience-list-item">
                                    <div class="experience-heading" @click="jsFramework">
                                        <h3><span class="experience-heading-icon">↘</span><span class="employer">JavaScript Framework</span><span class="position">Vue Js, Expressjs</span></h3>
                                    </div>
                                    <div class="experience-details" v-show="showBool">
                                        <div class="expereince-details-inner">
                                            <b-progress :value="counter" show-progress variant="dark"></b-progress>
                                        </div>
                                    </div>
                                </li>

                                <li class="experience-list-item">
                                    <div class="experience-heading" @click="componentLibrary">
                                        <h3><span class="experience-heading-icon">↘</span><span class="employer">Front-end component library</span><span class="position">Bootstrap-Vue, Bootstrap V4, Material Design for Bootstrap V4, Materialize CSS</span></h3>
                                    </div>
                                    <div class="experience-details" v-show="showBool">
                                        <div class="expereince-details-inner">
                                            <b-progress :value="counter" show-progress variant="primary"></b-progress>
                                        </div>
                                    </div>
                                </li>

                                <li class="experience-list-item">
                                    <div class="experience-heading" @click="stylingTools">
                                        <h3><span class="experience-heading-icon">↘</span><span class="employer">Markup &amp; Styling Tools</span><span class="position">HTML5, CSS, SASS</span></h3>
                                    </div>
                                    <div class="experience-details" v-show="showBool">
                                        <div class="expereince-details-inner">
                                            <b-progress :value="counter" show-progress variant="info"></b-progress>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { Progress } from 'bootstrap-vue/es/components';
    Vue.use(Progress);

    export default {
        name: "Resume",
        data () {
            return {
                counter: 0,
                percentageIcon: "%",
                showBool: false
            }
        },
        methods: {
            Database () {
                if (this.showBool == false) {

                    this.showBool = true
                }else {
                    this.showBool = false
                }

                this.counter = 50
            },

            Programming () {
                if (this.showBool == false) {

                    this.showBool = true
                }else {
                    this.showBool = false
                }

                this.counter = 70
            },

            scriptingLang () {
                if (this.showBool == false) {

                    this.showBool = true
                }else {
                    this.showBool = false
                }

                this.counter = 65
            },

            jsLibrary () {
                if (this.showBool == false) {

                    this.showBool = true
                }else {
                    this.showBool = false
                }

                this.counter = 40
            },

            jsFramework () {
                if (this.showBool == false) {

                    this.showBool = true
                }else {
                    this.showBool = false
                }

                this.counter = 60
            },

            phpFramework () {
                if (this.showBool == false) {

                    this.showBool = true
                }else {
                    this.showBool = false
                }

                this.counter = 70
            },

            componentLibrary () {
                if (this.showBool == false) {

                    this.showBool = true
                }else {
                    this.showBool = false
                }

                this.counter = 80
            },

            stylingTools () {
                if (this.showBool == false) {

                    this.showBool = true
                }else {
                    this.showBool = false
                }

                this.counter = 85
            }
        }
    }
</script>

<style scoped>

</style>