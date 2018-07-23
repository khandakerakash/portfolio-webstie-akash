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
                                    <div class="experience-heading" @click.prevent="showActive(1)">
                                        <h3><span class="employment-time job-current">2018 - Present</span><span class="experience-heading-icon">↘</span><span class="employer">TGA Limited</span><span class="position">Front-End Developer</span></h3>
                                    </div>
                                    <div class="experience-details" v-if="activeTab === 1">
                                        <div class="expereince-details-inner">
                                            <p>Software and BPO services company headquartered in Dhaka, Bangladesh with offices in the UK and Italy. Continuously innovating to provide the best in class software development, design services, custom products, app etc.</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="experience-list-item">
                                    <div class="experience-heading" @click.prevent="showActive(2)">
                                        <h3><span class="employment-time job-past">2017 - 2018</span><span class="experience-heading-icon">↘</span><span class="employer">Juvenile Pacers BD</span><span class="position">Software Engineer</span></h3>
                                    </div>
                                    <div class="experience-details" v-if="activeTab === 2">
                                        <div class="expereince-details-inner">
                                            <p>Juvenile Pacers is a software company. The motto is to make the lives of customers simpler through the use of modern technology.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="experience-list-item">
                                    <div class="experience-heading" @click.prevent="showActive(3)">
                                        <h3><span class="employment-time job-past">2016 - 2017</span><span class="experience-heading-icon">↘</span><span class="employer">BioBank of Bangladesh</span><span class="position">Jr. Software Developer</span></h3>
                                    </div>
                                    <div class="experience-details" v-if="activeTab === 3">
                                        <div class="expereince-details-inner">
                                            <p>It is a health related combined project of Government of Bangladesh, BIRDEM and University of Dhaka.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="experience-list-item">
                                    <div class="experience-heading" @click.prevent="showActive(4)">
                                        <h3><span class="employment-time job-current">2017 - Present</span><span class="experience-heading-icon">↘</span><span class="employer">Tutexp software</span><span class="position">Software Engineer</span></h3>
                                    </div>
                                    <div class="experience-details" v-if="activeTab === 4">
                                        <div class="expereince-details-inner">
                                            <p>Team member of Tutexp Software since 2017. It's our own startup team. We are trying to build an Energetic Software Development team in the earth.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="edu-experience experience-row py-5 mt-2">
                            <div class="experience-side-title edu-height"><h3>Education</h3></div>
                            <ul class="experience">
                                <li class="experience-list-item">
                                    <div class="experience-heading" @click.prevent="showActive(5)">
                                        <h3><span class="experience-heading-icon">↘</span><span class="employer">Computer Science &amp; Engineering</span><span class="position">Bachelor of Science</span><span class="employment-time">2011 - 2014</span></h3>
                                    </div>
                                    <div class="experience-details" v-if="activeTab === 5">
                                        <div class="expereince-details-inner">
                                            <p>Completed graduation in Computer Science &amp; Engineering form Dhaka City College under National University of Bangladesh </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="skills experience-row py-5 mt-2">
                            <div class="experience-side-title skills-height"><h3>Skills</h3></div>
                            <ul class="experience">
                                <li class="experience-list-item">
                                    <div class="experience-heading" @click.prevent="showActive(6)">
                                        <h3><span class="experience-heading-icon">↘</span><span class="employer">GIT</span><span class="position">khandakerakash</span></h3>
                                    </div>
                                    <div class="experience-details" v-if="activeTab === 6">
                                        <div class="expereince-details-inner">
                                            <a href="https://github.com/khandakerakash" target="_blank" class="url-btn">Profile URL</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="experience-list-item">
                                    <div class="experience-heading"  @click.prevent="showActive(7); calculateSkills(0);">
                                        <h3><span class="experience-heading-icon">↘</span><span class="employer">Database</span><span class="position">MongoDB, MySQLi, MySQL</span></h3>
                                    </div>
                                    <div class="experience-details" v-if="activeTab === 7">
                                        <div class="expereince-details-inner">
                                            <b-progress :value="skillsParcentage" show-progress variant="info"></b-progress>
                                        </div>
                                    </div>
                                </li>

                                <li class="experience-list-item">
                                    <div class="experience-heading" @click.prevent="showActive(8); calculateSkills(1);">
                                        <h3><span class="experience-heading-icon">↘</span><span class="employer">Programming Language</span><span class="position">C, Java, PHP</span></h3>
                                    </div>
                                    <div class="experience-details" v-if="activeTab === 8">
                                        <div class="expereince-details-inner">
                                            <b-progress :value="skillsParcentage" show-progress variant="secondary"></b-progress>
                                        </div>
                                    </div>
                                </li>

                                <li class="experience-list-item">
                                    <div class="experience-heading" @click.prevent="showActive(9); calculateSkills(2);">
                                        <h3><span class="experience-heading-icon">↘</span><span class="employer">PHP Framework</span><span class="position">Laravel 5.6</span></h3>
                                    </div>
                                    <div class="experience-details" v-if="activeTab === 9">
                                        <div class="expereince-details-inner">
                                            <b-progress :value="skillsParcentage" show-progress variant="danger"></b-progress>
                                        </div>
                                    </div>
                                </li>

                                <li class="experience-list-item">
                                    <div class="experience-heading" @click.prevent="showActive(10); calculateSkills(3);">
                                        <h3><span class="experience-heading-icon">↘</span><span class="employer">Scripting Language</span><span class="position">JavaScript</span></h3>
                                    </div>
                                    <div class="experience-details" v-if="activeTab === 10">
                                        <div class="expereince-details-inner">
                                            <b-progress :value="skillsParcentage" show-progress variant="dark"></b-progress>
                                        </div>
                                    </div>
                                </li>

                                <li class="experience-list-item">
                                    <div class="experience-heading" @click.prevent="showActive(11); calculateSkills(4);">
                                        <h3><span class="experience-heading-icon">↘</span><span class="employer">JavaScript Library</span><span class="position">jQuery, React JS</span></h3>
                                    </div>
                                    <div class="experience-details" v-if="activeTab === 11">
                                        <div class="expereince-details-inner">
                                            <b-progress :value="skillsParcentage" show-progress variant="warning"></b-progress>
                                        </div>
                                    </div>
                                </li>

                                <li class="experience-list-item">
                                    <div class="experience-heading" @click.prevent="showActive(12); calculateSkills(5);">
                                        <h3><span class="experience-heading-icon">↘</span><span class="employer">JavaScript Framework</span><span class="position">Vue Js, Expressjs</span></h3>
                                    </div>
                                    <div class="experience-details" v-if="activeTab === 12">
                                        <div class="expereince-details-inner">
                                            <b-progress :value="skillsParcentage" show-progress variant="success"></b-progress>
                                        </div>
                                    </div>
                                </li>

                                <li class="experience-list-item">
                                    <div class="experience-heading" @click.prevent="showActive(13); calculateSkills(6);">
                                        <h3><span class="experience-heading-icon">↘</span><span class="employer">Front-end component library</span><span class="position">Bootstrap-Vue, Bootstrap V4, Material Design for Bootstrap V4, Materialize CSS</span></h3>
                                    </div>
                                    <div class="experience-details" v-if="activeTab === 13">
                                        <div class="expereince-details-inner">
                                            <b-progress :value="skillsParcentage" show-progress variant="primary"></b-progress>
                                        </div>
                                    </div>
                                </li>

                                <li class="experience-list-item">
                                    <div class="experience-heading" @click.prevent="showActive(14)">
                                        <h3><span class="experience-heading-icon">↘</span><span class="employer">Markup &amp; Styling Tools</span><span class="position">HTML5, CSS, SASS</span></h3>
                                    </div>
                                    <div class="experience-details" v-if="activeTab === 14">
                                        <div class="expereince-details-inner">
                                            <b-progress :value="skillsParcentage" show-progress variant="info"></b-progress>
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
                activeTab: 0,
                skills: [50, 70, 65, 70, 40, 70, 80, 90],
                skillsParcentage: 0
            }
        },
        methods: {
            showActive (index) {
              this.activeTab = this.activeTab === index ? 0:index
            },
            calculateSkills (index) {
                let skillsRate = this.skills.find(el => {
                    return el === this.skills[index]
                })
                this.skillsParcentage = skillsRate
            }
        }
    }
</script>

<style scoped>

</style>