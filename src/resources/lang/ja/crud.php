<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Backpack Crud Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the CRUD interface.
    | You are free to change them to anything
    | you want to customize your views to better match your application.
    |
    */

    // Forms
    'save_action_save_and_new'                => '保存して作成',
    'save_action_save_and_edit'               => '保存して編集',
    'save_action_save_and_back'               => '保存して戻る',
    'save_action_changed_notification'        => '保存後のデフォルト動作が変更されました。',

    // Create form
    'add'                                     => '追加',
    'back_to_all'                             => 'Back to all ',
    'cancel'                                  => 'キャンセル',
    'add_a_new'                               => 'Add a new ',

    // Edit form
    'edit'                                    => '編集',
    'save'                                    => '保存',

    // Revisions
    'revisions'                               => 'リビジョン',
    'no_revisions'                            => 'リビジョンは見つかりません',
    'created_this'                            => 'が作成した',
    'changed_the'                             => 'が変更した',
    'restore_this_value'                      => 'この値を復元',
    'from'                                    => '旧',
    'to'                                      => '新',
    'undo'                                    => '復元',
    'revision_restored'                       => 'リビジョンを復元しました',
    'guest_user'                              => 'ゲストユーザー',

    // Translatable models
    'edit_translations'                       => '翻訳を編集',
    'language'                                => '言語',

    // CRUD table view
    'all'                                     => '全 ',
    'in_the_database'                         => 'データベース上の',
    'list'                                    => '一覧',
    'actions'                                 => '操作',
    'preview'                                 => '表示',
    'delete'                                  => '削除',
    'admin'                                   => '管理者',
    'details_row'                             => 'これは詳細列です。必要に応じて修正して下さい。',
    'details_row_loading_error'               => '詳細列の読み込み時にエラーが発生しました。もう一度お試し下さい。',

    // Confirmation messages and bubbles
    'delete_confirm'                          => 'このデータを削除してもよろしいですか？',
    'delete_confirmation_title'               => 'データを削除しました。',
    'delete_confirmation_message'             => 'データは正常に削除されました。',
    'delete_confirmation_not_title'           => '削除できません',
    'delete_confirmation_not_message'         => 'エラーが発生しました。データは削除されませんでした。',
    'delete_confirmation_not_deleted_title'   => '削除できません',
    'delete_confirmation_not_deleted_message' => 'データは削除されませんでした。',

    // Bulk actions
    'bulk_no_entries_selected_title'          => 'データが未選択',
    'bulk_no_entries_selected_message'        => '一括操作を行うには、1 件以上データを選択して下さい。',

    // Bulk confirmation
    'bulk_delete_are_you_sure'                => ':number 件のデータを削除してもよろしいですか？',
    'bulk_delete_sucess_title'                => '削除成功',
    'bulk_delete_sucess_message'              => ' 件のデータを削除しました',
    'bulk_delete_error_title'                 => '削除失敗',
    'bulk_delete_error_message'               => '1 件以上のデータを削除できません',

    // Ajax errors
    'ajax_error_title'                        => 'エラー',
    'ajax_error_text'                         => 'ページロードエラー。ページを更新してください。',

    // DataTables translation
    'emptyTable'                              => 'テーブルにデータが存在しません',
    'info'                                    => '_TOTAL_ 件中 _START_ から _END_ を表示',
    'infoEmpty'                               => '',
    'infoFiltered'                            => '(全 _MAX_ 件からフィルター)',
    'infoPostFix'                             => '',
    'thousands'                               => ',',
    'lengthMenu'                              => '_MENU_ 件表示',
    'loadingRecords'                          => '読み込み中...',
    'processing'                              => '実行中...',
    'search'                                  => '検索: ',
    'zeroRecords'                             => '一致するレコードが見つかりませんでした',
    'paginate'                                => [
        'first'    => '先頭',
        'last'     => '最後',
        'next'     => '次',
        'previous' => '前',
    ],
    'aria'                                    => [
        'sortAscending'  => ': 昇順に並び替え',
        'sortDescending' => ': 降順に並び替え',
    ],
    'export'                                  => [
        'export'            => 'エクスポート',
        'copy'              => 'コピー',
        'excel'             => 'Excel',
        'csv'               => 'CSV',
        'pdf'               => 'PDF',
        'print'             => '印刷',
        'column_visibility' => 'カラムの表示',
    ],

    // global crud - errors
    'unauthorized_access'                     => '許可されていないアクセス - このページを表示する為に必要なパーミッションがありません。',
    'please_fix'                              => '次のエラーを修正して下さい:',

    // global crud - success / error notification bubbles
    'insert_success'                          => 'データは正常に追加されました。',
    'update_success'                          => 'データは正常に更新されました。',

    // CRUD reorder view
    'reorder'                                 => '並び替え',
    'reorder_text'                            => 'ドラッグアンドドロップで並び替え可能です。',
    'reorder_success_title'                   => '完了',
    'reorder_success_message'                 => '並び順を保存しました。',
    'reorder_error_title'                     => 'エラー',
    'reorder_error_message'                   => '並び順は保存されませんでした。',

    // CRUD yes/no
    'yes'                                     => 'はい',
    'no'                                      => 'いいえ',

    // CRUD filters navbar view
    'filters'                                 => 'フィルター',
    'toggle_filters'                          => 'フィルター切り替え',
    'remove_filters'                          => '全フィルターを削除',

    // Fields
    'browse_uploads'                          => 'アップロードから選択',
    'select_all'                              => '全て選択',
    'select_files'                            => '複数ファイル選択',
    'select_file'                             => 'ファイル選択',
    'clear'                                   => 'クリア',
    'page_link'                               => 'ページリンク',
    'page_link_placeholder'                   => 'http://example.com/your-desired-page',
    'internal_link'                           => '内部リンク',
    'internal_link_placeholder'               => '内部スラッグ 例: \':url\' に続く \'admin/page\' (クォーテーション無し)',
    'external_link'                           => '外部リンク',
    'choose_file'                             => 'ファイルを選択',

    // Table field
    'table_cant_add'                          => '新しい :entity を追加できません',
    'table_max_reached'                       => '最大数 :max に達しました',

    // File manager
    'file_manager'                            => 'ファイルマネージャー',
];
