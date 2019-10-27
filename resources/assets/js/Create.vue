<template>
    <div>
         <mu-container>
    <mu-form ref="form" :model="normal" class="mu-demo-form">
        <mu-row gutter>
            <mu-form-item label="UserId" help-text="help text" prop="user_id">
                <mu-text-field v-model="normal.user_id" prop="user_id"></mu-text-field>
            </mu-form-item>
            <mu-form-item label="Category1" help-text="help text" prop="categoryid_one">
              <mu-select v-model="normal.categoryid_one" full-width>
                <mu-option v-for="option in options" :key="option.category_id" :label="option.categroy_name" :value="option.category_id"></mu-option>
              </mu-select>
            </mu-form-item>
            <mu-form-item label="Category2" help-text="help text" prop="categoryid_two">
              <mu-select v-model="normal.categoryid_two" full-width>
                <mu-option v-for="option in options" :key="option.category_id" :label="option.categroy_name" :value="option.category_id"></mu-option>
              </mu-select>
            </mu-form-item>
            <mu-form-item label="Category3" help-text="help text" prop="categoryid_three">
              <mu-select v-model="normal.categoryid_three" full-width>
                <mu-option v-for="option in options" :key="option.category_id" :label="option.categroy_name" :value="option.category_id"></mu-option>
              </mu-select>
            </mu-form-item>
            <mu-form-item label="Category4" help-text="help text" prop="categoryid_four">
              <mu-select v-model="normal.categoryid_four" full-width>
                <mu-option v-for="option in options" :key="option.category_id" :label="option.categroy_name" :value="option.category_id"></mu-option>
              </mu-select>
            </mu-form-item>
            <mu-form-item label="Category5" help-text="help text" prop="categoryid_five">
              <mu-select v-model="normal.categoryid_five" full-width>
                <mu-option v-for="option in options" :key="option.category_id" :label="option.categroy_name" :value="option.category_id"></mu-option>
              </mu-select>
            </mu-form-item>
            <mu-form-item span="12" lg="4" sm="6" label="Textarea" prop="comment">
                <mu-text-field multi-line v-model="normal.comment" :rows="3" :rows-max="6"></mu-text-field>
            </mu-form-item>
            <mu-form-item>
                <mu-button color="primary" @click="submit">submit</mu-button>
            </mu-form-item>
            <form>

            </form>
        </mu-row>
    </mu-form>
    </mu-container>
    </div>
</template>

<script>
    export default{
        data() {
            return {
                options: [
                    {
                        category_id: 1,
                        categroy_name: '日本料理'
                    },
                    {
                        category_id: 2,
                        categroy_name: '寿司'
                    },
                    {
                        category_id: 3,
                        categroy_name: '魚介料理・海鮮料理'
                    },
                    {
                        category_id: 4,
                        categroy_name: '天ぷら'
                    },
                    {
                        category_id: 5,
                        categroy_name: 'とんかつ'
                    },
                    {
                        category_id: 6,
                        categroy_name: '串かつ・串揚げ'
                    },
                    {
                        category_id: 7,
                        categroy_name: 'そば'
                    },
                    {
                        category_id: 8,
                        categroy_name: 'うどん'
                    },
                    {
                        category_id: 9,
                        categroy_name: '焼き鳥・串焼き'
                    },
                    {
                        category_id: 10,
                        categroy_name: '焼肉'
                    },
                    {
                        category_id: 11,
                        categroy_name: 'すき焼き'
                    },
                    {
                        category_id: 12,
                        categroy_name: 'しゃぶしゃぶ'
                    },
                    {
                        category_id: 13,
                        categroy_name: 'おでん'
                    },
                    {
                        category_id: 14,
                        categroy_name: 'お好み焼き・もんじゃ焼き・たこ焼き)'
                    },
                    {
                        category_id: 15,
                        categroy_name: '丼もの（牛丼・親子丼など）'
                    },
                    {
                        category_id: 16,
                        categroy_name: 'ハンバーガー'
                    },
                    {
                        category_id: 17,
                        categroy_name: 'ステーキ'
                    },
                    {
                        category_id: 18,
                        categroy_name: 'ハンバーグ'
                    },
                    {
                        category_id: 19,
                        categroy_name: 'パスタ'
                    },
                    {
                        category_id: 20,
                        categroy_name: 'オムライス'
                    },
                    {
                        category_id: 21,
                        categroy_name: 'フレンチ'
                    },
                    {
                        category_id: 22,
                        categroy_name: '四川料理'
                    },
                    {
                        category_id: 23,
                        categroy_name: 'カレーライス'
                    },
                    {
                        category_id: 24,
                        categroy_name: '欧風カレー'
                    },
                    {
                        category_id: 25,
                        categroy_name: 'インドカレー'
                    },
                    {
                        category_id: 26,
                        categroy_name: 'スープカレー'
                    },
                    {
                        category_id: 27,
                        categroy_name: 'ラーメン'
                    },
                    {
                        category_id: 28,
                        categroy_name: 'つけ麺'
                    },
                    {
                        category_id: 29,
                        categroy_name: '油そば'
                    },
                    {
                        category_id: 30,
                        categroy_name: '担々麺'
                    },
                    {
                        category_id: 31,
                        categroy_name: 'ジンギスカン'
                    },
                    {
                        category_id: 32,
                        categroy_name: '鍋'
                    },
                    {
                        category_id: 33,
                        categroy_name: 'もつ鍋'
                    },
                    {
                        category_id: 34,
                        categroy_name: 'てっちゃん焼き'
                    },
                    {
                        category_id: 35,
                        categroy_name: 'サムギョップサル'
                    },
                    {
                        category_id: 36,
                        categroy_name: 'ベトナム料理'
                    },
                    {
                        category_id: 37,
                        categroy_name: 'タイ料理'
                    },
                    {
                        category_id: 38,
                        categroy_name: '創作料理'
                    },
                ],
                normal: {
                    user_id: 1,
                    categoryid_one: '',
                    categoryid_two: '',
                    categoryid_three: '',
                    categoryid_four: '',
                    categoryid_five: '',
                    comment: ''
                },
            }
        },
        created() {
       },
        methods: {
            submit(){
                console.log(this.normal);
                const uri = '/api/food/create';
                this.axios.post(uri, this.normal).then((response) => {
                    this.$router.push({name: 'Index'});
                });
            },
        },
    }
</script>