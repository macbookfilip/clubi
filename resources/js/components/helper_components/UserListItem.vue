<template>
    <div class="d-flex align-items-baseline">
        <div class="pr-3" v-if="!disable_profile_picture">
            <img :src="user.profile.profile_picture"
                class="rounded-circle w-100"
                :style="{'max-width': profile_picture_size+'px'}"
                :alt="user.username+'_avatar'"
            >
        </div>
        <div>
            <span style="white-space: nowrap;">
                <span class="font-weight-bold text-dark" ref="username_tooltip">
                    {{ user.username }}
                </span>

                <span v-if="is_author" class="fa fa-pen-nib" />
                <span v-if="is_owner" class="fa fa-shield-alt" />
                <span v-else-if="user.is_admin == '1'" class="fa fa-tools" />
            </span>
            <span class="pl-md-1" style="white-space: nowrap;">
                <a :href="link" v-if="link">
                    {{ relativeTime }}
                </a>
                <span v-else>{{ relativeTime }}</span>
            </span>
        </div>

        <!-- slot for buttons or whatever -->
        <slot></slot>
    </div>
</template>

<script>
    import moment from 'moment';

    export default {
        props: {
            user: Object,
            date: String,
            link: String,
            is_owner: Boolean,
            is_author: Boolean,
            profile_picture_size: {default: 40, type: Number},
            disable_profile_picture: Boolean,
        },

        computed: {
            relativeTime: function () {
                if ( this.date ) {
                    return moment(this.date).fromNow();
                }
                return '';
            }
        },

        mounted() {
            let content = this.user.profile.description;
            if ( !content ) {
                content = 'No description set.'
            }

            $(this.$refs.username_tooltip).popover({
                title: 'Description:',
                content: content,
                placement: 'bottom',
                trigger: 'hover',
            });
        },
    }
</script>
