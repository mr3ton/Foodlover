<?php
namespace app\models;
use Yii;
use yii\data\Pagination;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "tag".
 *
 * @property int $id
 * @property string $title
 *
 * @property ArticleTag[] $articleTags
 */
class Tag extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tag';
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'string', 'max' => 255],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
        ];
    }
    /**
     * @return \yii\db\ActiveQuery
     * @throws \yii\base\InvalidConfigException
     */
    public function getArticles()
    {
        return $this->hasMany(Article::className(), ['id' => 'article_id'])
            ->viaTable('article_tag', ['tag_id' => 'id']);
    }
    public static function getAll()
    {
        return Tag::find()->all();
    }
    public function getTitle()
    {
        $title = $this->title;
        return $title;
    }
    public function getArticlesCount()
    {
        return $this->getArticles()->count();
    }
    public static function getArticlesByTag($id)
    {
        $getID = ArticleTag::find()->where(['tag_id' => $id])->all();
        $article_id = ArrayHelper::getColumn($getID, 'article_id');
        
        $query = Article::find()->where(['id' => $article_id]);
        $count = $query->count();
        $pagination = new Pagination(['totalCount' => $count, 'pageSize' => 5]);
        $articles = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        $data ['articles'] = $articles;
        $data ['pagination'] = $pagination;
        return $data;
    }

}