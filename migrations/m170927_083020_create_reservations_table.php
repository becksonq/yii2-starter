<?php

use yii\db\Migration;

/**
 * Handles the creation of table `reservations`.
 */
class m170927_083020_create_reservations_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('reservations', [
            'id' => $this->primaryKey(),
            'room_id'          => $this->integer(11)->notNull(),
            'customer_id'      => $this->integer(11)->notNull(),
            'price_per_day'    => $this->decimal(20, 2)->notNull(),
            'date_from'        => $this->date()->notNull(),
            'date_to'          => $this->date()->notNull(),
//            'reservation_date' => $this->timestamp()->notNull()->defaultValue(CURRENT_TIMESTAMP),
            'reservation_date' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('reservations');
    }
}
