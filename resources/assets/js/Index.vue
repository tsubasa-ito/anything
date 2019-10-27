<template>
    <div>
        <mu-card class="mb-3" v-for="food in foods" :key="food.id" style="width: 100%; max-width: 375px; margin: 0 auto;">
          <mu-card-header :title=food.user.name sub-title="sub title">
            <mu-avatar slot="avatar">
              <img style="width:100%;" src="/resources/assets/image/IMG_2225.jpg">
            </mu-avatar>
          </mu-card-header>
          <mu-card-title :title="food.comment"></mu-card-title>
          <mu-card-title v-for="tag in food.tags" :key="tag.id" :sub-title="tag.tag_name">#</mu-card-title>
          <mu-card-text>
            {{ food.category_one.category_name }}
          </mu-card-text>
          <mu-card-text>
            {{ food.category_two.category_name }}
          </mu-card-text>
          <mu-card-text>
            {{ food.category_three.category_name }}
          </mu-card-text>
          <mu-card-text>
            {{ food.category_four.category_name }}
          </mu-card-text>
          <mu-card-text>
            {{ food.category_five.category_name }}
          </mu-card-text>
          <mu-card-text>
            {{ food.comment }}
          </mu-card-text>
          <mu-card-actions>
            <mu-button flat>Action 1</mu-button>
            <mu-button flat>Action 2</mu-button>
          </mu-card-actions>
        </mu-card>
    </div>
</template>

<script>
    export default{
        data() {
            return {
                foods: [
                    {
                        id: '',
                        user: {
                            name: '',
                        },
                        category_one: {
                            category_name: '',
                        },
                        category_two: {
                            category_name: '',
                        },
                        category_three: {
                            category_name:''
                        },
                        category_four: {
                            category_name: '',
                        },
                        category_five: {
                            category_name: '',
                        },
                        comment: '',
                        tags: [
                            {
                                tag_name: '',
                            }
                        ],
                        created_at: '',
                        updated_at: '',
                    }
                ],
            }
        },
        created() {
           const uri = '/api/';
           this.axios.get(uri).then(response => {
               console.log(response.data.data);
               this.foods = response.data.data;
               console.log(response.data.data[0].tags[0].tag_name);
           });
       },
        mounted() {
            }
    }
</script>