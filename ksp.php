<?php
/*************************************************************************************
 * ksp.php
 * ----------
 * Author: Peter O'Regan (peteroregan@gmail.com)
 * Copyright: (c) 2015 Peter O'Regan (peteroregan.com)
 * Release Version: 1.0.8.11
 * Date Started: 2015/11/22
 *
 * Kontakt Script Programming (KSP) language file for GeSHi.
 *
 * CHANGES
 * 2015/11/22 (0.9.0)
 *   -  First Release
 *
 *
 * TODO (updated 2015/11/22)
 * -------------------------
 *
 *
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'KSP',
    'COMMENT_SINGLE' => array(1 => ''),
    'COMMENT_MULTI' => array('{' => '}'),
    //Compiler directives
    //'COMMENT_REGEXP' => array(2 => //'/\\{\\$.*?}|\\(\\*\\$.*?\\*\\)/U'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '',

    'KEYWORDS' => array(
        //KSP_CALLBACKS
        1 => array(
            'end on', 'on async_complete', 'on controller', 'on init', 'on listener',
            'on midi_in', 'on note', 'on nprn', 'on persistence_changed', 'on pgs_changed',
            'on poly_at', 'on release', 'on rpn', 'on ui_control', 'on ui_update'
            ),

        //KSP_KEYWORDS
        2 => array(
            '.and.', '.not.', '.or.', 'and', 'call', 'case', 'const', 'declare', 'else',
            'end function', 'end if', 'end select', 'end while', 'exit', 'function',
            'if', 'not', 'or', 'polyphonic', 'select', 'while'
            ),

        //KSP_CONSTANTS                                                                   
        3 => array(
            '$ALL_EVENTS', '$ALL_GROUPS', '$CC_NUM', '$CONTROL_PAR_ALLOW_AUTOMATION', 
            '$CONTROL_PAR_AUTOMATION_NAME', '$CONTROL_PAR_BAR_COLOR', '$CONTROL_PAR_BASEPATH',
            '$CONTROL_PAR_BG_COLOR', '$CONTROL_PAR_COLUMN_WIDTH', '$CONTROL_PAR_DEFAULT_VALUE',
            '$CONTROL_PAR_DND_BEHAVIOUR', '$CONTROL_PAR_FILEPATH', '$CONTROL_PAR_FILE_TYPE',
            '$CONTROL_PAR_FONT_TYPE', '$CONTROL_PAR_GRID_X', '$CONTROL_PAR_GRID_Y', 
            '$CONTROL_PAR_HEIGHT', '$CONTROL_PAR_HELP', '$CONTROL_PAR_HIDE',
            '$CONTROL_PAR_KEY_ALT', '$CONTROL_PAR_KEY_CONTROL', '$CONTROL_PAR_KEY_SHIFT',
            '$CONTROL_PAR_LABEL',   '$CONTROL_PAR_MAX_VALUE', '$CONTROL_PAR_MIN_VALUE',
            '$CONTROL_PAR_MOUSE_BEHAVIOUR', '$CONTROL_PAR_NONE', '$CONTROL_PAR_NUM_ITEMS', 
            '$CONTROL_PAR_OFF_COLOR', '$CONTROL_PAR_ON_COLOR', '$CONTROL_PAR_OVERLOAD_COLOR',
            '$CONTROL_PAR_PEAK_COLOR', '$CONTROL_PAR_PICTURE',  '$CONTROL_PAR_PICTURE_STATE',
            '$CONTROL_PAR_POS_X', '$CONTROL_PAR_POS_y', '$CONTROL_PAR_SELECTED_ITEM_IDX',
            '$CONTROL_PAR_SHOW_ARROWS',  '$CONTROL_PAR_TEXT', '$CONTROL_PAR_TEXTLINE',
            '$CONTROL_PAR_TEXTPOS_Y', '$CONTROL_PAR_TEXT_ALIGNMENT', '$CONTROL_PAR_UNIT',
            '$CONTROL_PAR_VERTICAL',  '$CONTROL_PAR_WIDTH', '$CONTROL_PAR_ZERO_LINE_COLOR',
            '$CURRENT_EVENT', '$CURRENT_SCRIPT_SLOT', '$DURATION_BAR', '$DURATION_BAR_START', 
            '$DURATION_EIGHTH', '$DURATION_EIGHTH_TRIPLET', '$DURATION_QUARTER',
            '$DURATION_QUARTER_TRIPLET', '$DURATION_SIXTEENTH',  '$DURATION_SIXTEENTH_TRIPLET',
            '$EFFECT_TYPE_AET_FILTER', '$EFFECT_TYPE_BUS_COMP', '$EFFECT_TYPE_CABINET',
            '$EFFECT_TYPE_CHORUS',  '$EFFECT_TYPE_COMPRESSOR', '$EFFECT_TYPE_DELAY',
            '$EFFECT_TYPE_DISTORTION', '$EFFECT_TYPE_FB_COMP', '$EFFECT_TYPE_FILTER',
            '$EFFECT_TYPE_FLANGER',  '$EFFECT_TYPE_GAINER', '$EFFECT_TYPE_INVERTER',
            '$EFFECT_TYPE_IRC', '$EFFECT_TYPE_JUMP', '$EFFECT_TYPE_LIMITER',
            '$EFFECT_TYPE_LOFI',  '$EFFECT_TYPE_NONE', '$EFFECT_TYPE_PHASER',
            '$EFFECT_TYPE_REVERB', '$EFFECT_TYPE_ROTATOR', '$EFFECT_TYPE_SEND_LEVELS',
            '$EFFECT_TYPE_SHAPER',  '$EFFECT_TYPE_SKREAMER', '$EFFECT_TYPE_SOLID_GEQ',
            '$EFFECT_TYPE_STEREO', '$EFFECT_TYPE_SURROUND_APNER', '$EFFECT_TYPE_TAPE_SAT', 
            '$EFFECT_TYPE_TRANS_MASTER', '$EFFECT_TYPE_TWANG', '$ENGINE_PAR_ATK_CURVE',
            '$ENGINE_PAR_ATTACK', '$ENGINE_PAR_BANDWIDTH', '$ENGINE_PAR_BITS', 
            '$ENGINE_PAR_BREAK', '$ENGINE_PAR_BW1', '$ENGINE_PAR_BW2', '$ENGINE_PAR_BW3',
            '$ENGINE_PAR_CABINET_TYPE', '$ENGINE_PAR_CB_AIR',  '$ENGINE_PAR_CB_BASS',
            '$ENGINE_PAR_CB_SIZE', '$ENGINE_PAR_CB_TREBLE', '$ENGINE_PAR_CH_DEPTH',
            '$ENGINE_PAR_CH_PHASE', '$ENGINE_PAR_CH_SPEED',  '$ENGINE_PAR_COMP_ATTACK',
            '$ENGINE_PAR_COMP_DECAY', '$ENGINE_PAR_CUTOFF', '$ENGINE_PAR_DAMPING',
            '$ENGINE_PAR_DECAY', '$ENGINE_PAR_DECAY1',  '$ENGINE_PAR_DECAY2',
            '$ENGINE_PAR_DL_DAMPING', '$ENGINE_PAR_DL_FEEDBACK', '$ENGINE_PAR_DL_PAN',
            '$ENGINE_PAR_DL_TIME', '$ENGINE_PAR_DRIVE',  '$ENGINE_PAR_EFFECT_BYPASS',
            '$ENGINE_PAR_EFFECT_SUBTYPE', '$ENGINE_PAR_EFFECT_TYPE',
            '$ENGINE_PAR_ENVELOPE_ORDER', '$ENGINE_PAR_EXP_FILTER_AMOUNT', 
            '$ENGINE_PAR_EXP_FILTER_MORPH', '$ENGINE_PAR_FCOMP_ATTACK',
            '$ENGINE_PAR_FCOMP_INPUT', '$ENGINE_PAR_FCOMP_MAKEUP', '$ENGINE_PAR_FCOMP_MIX', 
            '$ENGINE_PAR_FCOMP_RATIO', '$ENGINE_PAR_FCOMP_RELEASE', '$ENGINE_PAR_FILTER_BYPA',
            '$ENGINE_PAR_FILTER_BYPB', '$ENGINE_PAR_FILTER_BYPC',  '$ENGINE_PAR_FILTER_GAIN',
            '$ENGINE_PAR_FILTER_RESB', '$ENGINE_PAR_FILTER_RESC', '$ENGINE_PAR_FILTER_SHIFTB',
            '$ENGINE_PAR_FILTER_SHIFTC', '$ENGINE_PAR_FILTER_TYPEA',
            '$ENGINE_PAR_FILTER_TYPEB', '$ENGINE_PAR_FILTER_TYPEC', '$ENGINE_PAR_FLIDE_COEF',
            '$ENGINE_PAR_FL_COLOR', '$ENGINE_PAR_FL_DEPTH', '$ENGINE_PAR_FL_FEEDBACK',
            '$ENGINE_PAR_FL_PHASE', '$ENGINE_PAR_FL_SPEED', '$ENGINE_PAR_FORMANT', 
            '$ENGINE_PAR_FORMANT_SHARP', '$ENGINE_PAR_FORMANT_SHIFT',
            '$ENGINE_PAR_FORMANT_SIZE', '$ENGINE_PAR_FORMANT_TALK', '$ENGINE_PAR_FREQ1', 
            '$ENGINE_PAR_FREQ2', '$ENGINE_PAR_FREQ3', '$ENGINE_PAR_FREQUENCY',
            '$ENGINE_PAR_GAIN', '$ENGINE_PAR_GAIN1', '$ENGINE_PAR_GAIN2',  '$ENGINE_PAR_GAIN3',
            '$ENGINE_PAR_GN_GAIN', '$ENGINE_PAR_GRAIN_LENGTH', '$ENGINE_PAR_HF_ROLLOFF',
            '$ENGINE_PAR_HOLD', '$ENGINE_PAR_HP_CUTOFF',            '$ENGINE_PAR_INSERT_EFFECT_OUTPUT_GAIN', 
            '$ENGINE_PAR_INTMOD_BYPASS', '$ENGINE_PAR_INTMOD_BYPASS_PULSEWIDTH',
            '$ENGINE_PAR_INTMOD_FREQUENCY', '$ENGINE_PAR_INTMOD_SUBTYPE',
            '$ENGINE_PAR_INTMOD_TYPE', '$ENGINE_PAR_INVERT_SOURCE',
            '$ENGINE_PAR_IRC_FREQ_HIGHPASS_ER',  '$ENGINE_PAR_IRC_FREQ_HIGHPASS_LR',
            '$ENGINE_PAR_IRC_FREQ_LOWPASS_ER', '$ENGINE_PAR_IRC_FREQ_LOWPASS_lR',
            '$ENGINE_PAR_IRC_LENGTH_RATIO_ER',  '$ENGINE_PAR_IRC_LENGTH_RATIO_LR',
            '$ENGINE_PAR_IRC_PREDELAY', '$ENGINE_PAR_JMP_BASS', '$ENGINE_PAR_JMP_HIGAIN',
            '$ENGINE_PAR_JMP_MASTER',  '$ENGINE_PAR_JMP_MID', '$ENGINE_PAR_JMP_MONO',
            '$ENGINE_PAR_JMP_PREAMP', '$ENGINE_PAR_JMP_PRESENCE', '$ENGINE_PAR_JMP_TREBLE', 
            '$ENGINE_PAR_LFO_DELAY', '$ENGINE_PAR_LFO_RAND', '$ENGINE_PAR_LFO_RECT',
            '$ENGINE_PAR_LFO_SAW', '$ENGINE_PAR_LFO_SINE', '$ENGINE_PAR_LFO_TRI', 
            '$ENGINE_PAR_LIM_IN_GAIN', '$ENGINE_PAR_LIM_RELEASE', '$ENGINE_PAR_LP_CUTOFF',
            '$ENGINE_PAR_MOD_TARGET_INTENSITY', '$ENGINE_PAR_NOISECOLOR', 
            '$ENGINE_PAR_NOISELEVEL', '$ENGINE_PAR_PAN', '$ENGINE_PAR_PH_DEPTH',
            '$ENGINE_PAR_PH_FEEDBACK', '$ENGINE_PAR_PH_PHASE', '$ENGINE_PAR_PH_SPEED', 
            '$ENGINE_PAR_RATIO', '$ENGINE_PAR_RELEASE', '$ENGINE_PAR_RESONANCE',
            '$ENGINE_PAR_RT_ACCEL_HI', '$ENGINE_PAR_RT_ACCEL_LO', '$ENGINE_PAR_RT_BALANCE', 
            '$ENGINE_PAR_RT_DISTANCE', '$ENGINE_PAR_RT_MIX', '$ENGINE_PAR_RT_SPEED',
            '$ENGINE_PAR_RV_COLOUR', '$ENGINE_PAR_RV_DAMPING',  '$ENGINE_PAR_RV_PREDELAY',
            '$ENGINE_PAR_RV_SIZE', '$ENGINE_PAR_RV_STEREO', '$ENGINE_PAR_SCOMP_ATTACK',
            '$ENGINE_PAR_SCOMP_MAKEUP',  '$ENGINE_PAR_SCOMP_MIX', '$ENGINE_PAR_SCOMP_RATIO',
            '$ENGINE_PAR_SCOMP_RELEASE', '$ENGINE_PAR_SCOMP_THRESHOLD',
            '$ENGINE_PAR_SENDLEVEL_0',  '$ENGINE_PAR_SENDLEVEL_1', '$ENGINE_PAR_SENDLEVEL_2',
            '$ENGINE_PAR_SENDLEVEL_3', '$ENGINE_PAR_SENDLEVEL_4', '$ENGINE_PAR_SENDLEVEL_5', 
            '$ENGINE_PAR_SENDLEVEL_6', '$ENGINE_PAR_SENDLEVEL_7',
            '$ENGINE_PAR_SEND_EFFECT_BYPASS', '$ENGINE_PAR_SEND_EFFECT_DRY_LEVEL', 
            '$ENGINE_PAR_SEND_EFFECT_OUTPUT_GAIN', '$ENGINE_PAR_SEND_EFFECT_TYPE',
            '$ENGINE_PAR_SEQ_HF_BELL', '$ENGINE_PAR_SEQ_HF_FREQ',  '$ENGINE_PAR_SEQ_HF_GAIN',
            '$ENGINE_PAR_SEQ_HMF_FREQ', '$ENGINE_PAR_SEQ_HMF_GAIN', '$ENGINE_PAR_SEQ_HMF_Q',
            '$ENGINE_PAR_SEQ_LF_BELL',  '$ENGINE_PAR_SEQ_LF_FREQ', '$ENGINE_PAR_SEQ_LF_GAIN',
            '$ENGINE_PAR_SEQ_LMF_FREQ', '$ENGINE_PAR_SEQ_LMF_GAIN', '$ENGINE_PAR_SEQ_LMF_Q', 
            '$ENGINE_PAR_SHAPE', '$ENGINE_PAR_SK_BASS', '$ENGINE_PAR_SK_BRIGHT',
            '$ENGINE_PAR_SK_DRIVE', '$ENGINE_PAR_SK_MIX', '$ENGINE_PAR_SK_TONE', 
            '$ENGINE_PAR_SLICE_ATTACK', '$ENGINE_PAR_SLICE_RELEASE', '$ENGINE_PAR_SMOOTH',
            '$ENGINE_PAR_SPEED', '$ENGINE_PAR_SP_DIVERGENCE',  '$ENGINE_PAR_SP_LFE_VOLUME',
            '$ENGINE_PAR_SP_OFFSET_AZIMUTH', '$ENGINE_PAR_SP_OFFSET_DISTANCE',
            '$ENGINE_PAR_SP_OFFSET_X',  '$ENGINE_PAR_SP_OFFSET_Y', '$ENGINE_PAR_SP_SIZE',
            '$ENGINE_PAR_START_CRITERIA_CC_MAX', '$ENGINE_PAR_START_CRITERIA_CC_MIN', 
            '$ENGINE_PAR_START_CRITERIA_CONTROLLER', '$ENGINE_PAR_START_CRITERIA_CYCLE_CLASS',
            '$ENGINE_PAR_START_CRITERIA_KEY_MAX',  '$ENGINE_PAR_START_CRITERIA_KEY_MIN',
            '$ENGINE_PAR_START_CRITERIA_MODE', '$ENGINE_PAR_START_CRITERIA_NEXT_CRIT', 
            '$ENGINE_PAR_START_CRITERIA_SEQ_ONLY', '$ENGINE_PAR_START_CRITERIA_SLICE_IDX',
            '$ENGINE_PAR_START_CRITERIA_ZONE_IDX', '$ENGINE_PAR_STEREO', 
            '$ENGINE_PAR_STEREO_PAN', '$ENGINE_PAR_SUSTAIN', '$ENGINE_PAR_THRESHOLD',
            '$ENGINE_PAR_TP_GAIN', '$ENGINE_PAR_TP_WARMTH',  '$ENGINE_PAR_TRANSIENT_SIZE',
            '$ENGINE_PAR_TR_ATTACK', '$ENGINE_PAR_TR_INPUT', '$ENGINE_PAR_TR_SUSTAIN',
            '$ENGINE_PAR_TUNE', '$ENGINE_PAR_TW_BASS',  '$ENGINE_PAR_TW_MID',
            '$ENGINE_PAR_TW_TREBLE', '$ENGINE_PAR_TW_VOLUME', '$ENGINE_PAR_VOLUME',
            '$ENGINE_UPTIME', '$ENV_TYPE_AHDSR', '$ENV_TYPE_DBD',  '$ENV_TYPE_FLEX',
            '$EVENT_ID', '$EVENT_NOTE', '$EVENT_PAR_0', '$EVENT_PAR_1', '$EVENT_PAR_2',
            '$EVENT_PAR_3', '$EVENT_PAR_ALLOW_GROUP',  '$EVENT_PAR_BYTE_1', '$EVENT_PAR_BYTE_2',
            '$EVENT_PAR_ID', '$EVENT_PAR_MIDI_BYTE_1', '$EVENT_PAR_MIDI_BYTE_2',
            '$EVENT_PAR_MIDI_CHANNEL',  '$EVENT_PAR_MIDI_COMMAND', '$EVENT_PAR_NOTE',
            '$EVENT_PAR_NOTE_LENGTH', '$EVENT_PAR_PAN', '$EVENT_PAR_PLAY_POS', '$EVENT_PAR_POS',
            '$EVENT_PAR_SOURCE', '$EVENT_PAR_TRACK_NR', '$EVENT_PAR_TUNE',
            '$EVENT_PAR_VELOCITY', '$EVENT_PAR_VOLUME', '$EVENT_PAR_ZONE_ID', 
            '$EVENT_STATUS_INACTIVE', '$EVENT_STATUS_MIDI_QUEUE', '$EVENT_STATUS_NOTE_QUEUE',
            '$EVENT_VELOCITY', '$FILTER_TYPE_AR_HP2', '$FILTER_TYPE_AR_HP24', 
            '$FILTER_TYPE_AR_HP4', '$FILTER_TYPE_AR_LP2', '$FILTER_TYPE_AR_LP24',
            '$FILTER_TYPE_AR_LP4', '$FILTER_TYPE_BP2POLE', '$FILTER_TYPE_BP4POLE', 
            '$FILTER_TYPE_BR4POLE', '$FILTER_TYPE_DAFT_LP', '$FILTER_TYPE_EQ1BAND',
            '$FILTER_TYPE_EQ2BAND', '$FILTER_TYPE_EQ3BAND', '$FILTER_TYPE_FORMANT1', 
            '$FILTER_TYPE_FORMANT2', '$FILTER_TYPE_HP1POLE', '$FILTER_TYPE_HP2POLE',
            '$FILTER_TYPE_HP4POLE', '$FILTER_TYPE_LADDER', '$FILTER_TYPE_LDR_HP1', 
            '$FILTER_TYPE_LDR_HP2', '$FILTER_TYPE_LDR_HP3', '$FILTER_TYPE_LDR_HP4',
            '$FILTER_TYPE_LDR_LP1', '$FILTER_TYPE_LDR_LP2', '$FILTER_TYPE_LDR_LP3', 
            '$FILTER_TYPE_LDR_LP4', '$FILTER_TYPE_LDR_NOTCH', '$FILTER_TYPE_LDR_PEAK',
            '$FILTER_TYPE_LP1POLE', '$FILTER_TYPE_LP2POLE', '$FILTER_TYPE_LP4POLE', 
            '$FILTER_TYPE_LP6POLE', '$FILTER_TYPE_PHASER', '$FILTER_TYPE_PRO52',
            '$FILTER_TYPE_SIMPLE_LPHP', '$FILTER_TYPE_SV_HP1', '$FILTER_TYPE_SV_HP2', 
            '$FILTER_TYPE_SV_HP4', '$FILTER_TYPE_SV_LP1', '$FILTER_TYPE_SV_LP2',
            '$FILTER_TYPE_SV_LP4', '$FILTER_TYPE_SV_NOTCH4', '$FILTER_TYPE_SV_PAR_BPBP', 
            '$FILTER_TYPE_SV_PAR_LPHP', '$FILTER_TYPE_SV_SER_LPHP', '$FILTER_TYPE_VERSATILE',
            '$FILTER_TYPE_VOWELA', '$FILTER_TYPE_VOWELB',  '$GET_FOLDER_FACTORY_DIR',
            '$GET_FOLDER_LIBRARY_DIR', '$GET_FOLDER_PATCH_DIR', '$HIDE_PART_BG',
            '$HIDE_PART_MOD_LIGHT', '$HIDE_PART_NOTHING',  '$HIDE_PART_TITLE',
            '$HIDE_PART_VALUE', '$HIDE_WHOLE_CONTROL', '$INST_ICON_ID', '$INST_WALLPAPER_ID',
            '$INTMOD_TYPE_ENVELOPE',  '$INTMOD_TYPE_ENV_FOLLOW', '$INTMOD_TYPE_GLIDE',
            '$INTMOD_TYPE_LFO', '$INTMOD_TYPE_NONE', '$INTMOD_TYPE_STEPMOD', '$KEY_COLOR_BLACK',
            '$KEY_COLOR_BLUE', '$KEY_COLOR_CYAN', '$KEY_COLOR_DEFAULT',
            '$KEY_COLOR_FUSCHIA', '$KEY_COLOR_GREEN', '$KEY_COLOR_INACTIVE', 
            '$KEY_COLOR_LIGHT_ORANGE', '$KEY_COLOR_LIME', '$KEY_COLOR_MAGENTA',
            '$KEY_COLOR_MINT', '$KEY_COLOR_NONE', '$KEY_COLOR_ORANGE', '$KEY_COLOR_PLUM', 
            '$KEY_COLOR_PURPLE', '$KEY_COLOR_RED', '$KEY_COLOR_TURQUOISE', '$KEY_COLOR_VIOLET',
            '$KEY_COLOR_WARM_YELLOW', '$KEY_COLOR_WHITE',  '$KEY_COLOR_YELLOW',
            '$KNOB_UNIT_DB', '$KNOB_UNIT_HZ', '$KNOB_UNIT_MS', '$KNOB_UNIT_NONE',
            '$KNOB_UNIT_OCT', '$KNOB_UNIT_PERCENT', '$KNOB_UNIT_ST',  '$KSP_TIMER',
            '$LFO_TYPE_MULTI', '$LFO_TYPE_RANDO', '$LFO_TYPE_RECTANGLE', '$LFO_TYPE_SAWTOOTH',
            '$LFO_TYPE_TRIANGLE', '$MARK_1', '$MARK_10',  '$MARK_11', '$MARK_12', '$MARK_13',
            '$MARK_14', '$MARK_15', '$MARK_16', '$MARK_17', '$MARK_18', '$MARK_19', '$MARK_2',
            '$MARK_20', '$MARK_21',  '$MARK_22', '$MARK_23', '$MARK_24', '$MARK_25', '$MARK_26',
            '$MARK_27', '$MARK_28', '$MARK_3', '$MARK_4', '$MARK_5', '$MARK_6', '$MARK_7', 
            '$MARK_8', '$MARK_9', '$MIDI_CHANNEL', '$MIDI_COMMAND', '$MIDI_COMMAND_CC',
            '$MIDI_COMMAND_MONO_AT', '$MIDI_COMMAND_NOTE_OFF',  '$MIDI_COMMAND_NOTE_ON',
            '$MIDI_COMMAND_NRPN', '$MIDI_COMMAND_PITCH_BEND', '$MIDI_COMMAND_POLY_AT',
            '$MIDI_COMMAND_PROGRAM_CHANGE',  '$MIDI_COMMAND_RPN', '$NI_ASYNC_EXIT_STATUS',
            '$NI_ASYNC_ID', '$NI_BUS_OFFSET', '$NI_CALLBACK_ID', '$NI_CALLBACK_TYPE',
            '$NI_CB_TYPE_ASYNC_OUT',  '$NI_CB_TYPE_CONTROLLER', '$NI_CB_TYPE_INIT',
            '$NI_CB_TYPE_LISTENER', '$NI_CB_TYPE_MIDI_IN', '$NI_CB_TYPE_NOTE',
            '$NI_CB_TYPE_NRPN',  '$NI_CB_TYPE_PERSISTENCE_CHANGED', '$NI_CB_TYPE_PGS',
            '$NI_CB_TYPE_POLY_AT', '$NI_CB_TYPE_RELEASE', '$NI_CB_TYPE_RPN',
            '$NI_CB_TYPE_UI_CONTROL',  '$NI_CB_TYPE_UI_UPDATE', '$NI_FILE_TYPE_ARRAY',
            '$NI_FILE_TYPE_AUDIO', '$NI_FILE_TYPE_MIDI', '$NI_KEY_TYPE_CONTROL',
            '$NI_KEY_TYPE_DEFAULT',  '$NI_KEY_TYPE_NONE', '$NI_SIGNAL_TIMER_BEAT',
            '$NI_SIGNAL_TIMER_MS', '$NI_SIGNAL_TRANSP_START', '$NI_SIGNAL_TRANSP_STOP',
            '$NI_SIGNAL_TYPE',  '$NI_SONG_POSITION', '$NI_TRANSPORT_RUNNING', '$NOTE_HELD',
            '$NUM_GROUPS', '$NUM_OUTPUT_CHANNELS', '$NUM_ZONES', '$PLAYED_VOICES_INST', 
            '$PLAYED_VOICES_TOTAL', '$POLY_AT_NUM', '$REF_GROUP_IDX', '$RPN_ADDRESS',
            '$RPN_VALUE', '$SIGNATURE_DENOM', '$SIGNATURE_NUM',  '$START_CRITERIA_AND_NEXT',
            '$START_CRITERIA_AND_NOT_NEXT', '$START_CRITERIA_CYCLE_RANDOM',
            '$START_CRITERIA_CYCLE_ROUND_ROBIN',  '$START_CRITERIA_NONE',
            '$START_CRITERIA_ON_CONTROLLER', '$START_CRITERIA_ON_KEY',
            '$START_CRITERIA_OR_NEXT', '$START_CRITERIA_SLICE_TRIGGER', 
            '$UI_WAVEFORM_TABLE_IS_BIPOLAR', '$UI_WAVEFORM_USE_MIDI_DRAG',
            '$UI_WAVEFORM_USE_SLICES', '$UI_WAVEFORM_USE_TABLE', '$UI_WF_PROP_FLAGS', 
            '$UI_WF_PROP_MIDI_DRAG_START_NOTE', '$UI_WF_PROP_PLAY_CURSOR',
            '$UI_WF_PROP_TABLE_IDX_HIGHLIGHT', '$UI_WF_PROP_TABLE_VAL', 
            '$VALUE_EDIT_MODE_NOTE_NAMES', '$VCC_MONO_AT', '$VCC_PITCH_BEND', '%CC',
            '%CC_TOUCHED', '%GROUPS_AFFECTED', '%GROUPS_SELECTED', '%KEY_DOWN', 
            '%KEY_DOWN_OCT', '%NOTE_DURATION', '%POLY_AT', 'NO_SYS_SCRIPT_GROUP_START',
            'NO_SYS_SCRIPT_PEDAL', 'NO_SYS_SCRIPT_RLS_TRIG'
            ),
        //KSP_UIELEMENTS
        4 => array(
            'ui_button', 'ui_file_selector', 'ui_knob', 'ui_label', 'ui_level_meter', 'ui_slider',
            'ui_switch', 'ui_table', 'ui_text_edit', 'ui_value_edit', 'ui_waveform' 
            ),
        //KSP_FUNCTIONS_CORE
        5 => array(
            'abs', 'array_equal', 'dec', 'get_folder', 'ignore_controller', 'ignore_midi', 'in_range', 
            'inc', 'load_array', 'load_array_str', 'lsb', 'make_instr_persistent', 'make_persistent',
            'message', 'msb', 'num_elements', 'random', 'read_persistent_var', 'save_array', 'save_array_str',
            'search', 'sh_left', 'sh_right', 'sort' 
            ),
        //KSP_FUNCTIONS_2
        6 => array(
            'add_menu_item', 'add_text_line', 'allow_group', 'attach_level_meter',
            'attach_zone', 'by_marks', 'by_track', 'change_listener_par', 
            'change_note', 'change_pan', 'change_tune', 'change_velo', 'change_vol',
            'delete_event_mark', 'disallow_group', 'dont_use_machine_mode',  'event_status',
            'fade_in', 'fade_out', 'find_group', 'find_mod', 'find_target', 'find_zone',
            'fs_get_filename', 'fs_navigate', 'get_control_arr',  'get_control_par',
            'get_control_par_str', 'get_engine_par', 'get_engine_par_disp', 'get_event_ids',
            'get_event_par', 'get_event_par_arr',  'get_key_color', 'get_key_name',
            'get_key_triggerstate', 'get_key_type', 'get_keyrange_max_note',
            'get_keyrange_min_note', 'get_keyrange_name',  'get_menu_item_str',
            'get_menu_item_value', 'get_menu_item_visibility', 'get_purge_state',
            'get_sample_length', 'get_ui_id', 'get_ui_wf_property',  'group_name', 'hide_part',
            'ignore_event', 'load_ir_sample', 'make_perfview', 'mf_get_buffer_size',
            'mf_get_event_par', 'mf_get_first', 'mf_get_id',  'mf_get_last', 'mf_get_mark',
            'mf_get_next', 'mf_get_next_at', 'mf_get_num_tracks', 'mf_get_prev',
            'mf_get_prev_at', 'mf_insert_event',  'mf_insert_file', 'mf_remove_event',
            'mf_reset', 'mf_set_buffer_size', 'mf_set_event_par', 'mf_set_export_area',
            'mf_set_mark', 'move_control',  'move_control_px', 'ms_to_ticks', 'note_off',
            'num_slices_zone', 'output_channel_name', 'pgs_create_key', 'pgs_create_str_key',
            'pgs_get_key_val',  'pgs_key_exists', 'pgs_set_key_val', 'pgs_set_str_key_val',
            'pgs_str_key_exists', 'play_note', 'purge_group', 'remove_keyrange',
            'reset_ksp_timer',  'reset_rls_trig_counter', 'save_midi_file', 'set_control_help',
            'set_control_par', 'set_controller', 'set_engine_par', 'set_event_mark', 
            'set_event_par', 'set_event_par_arr', 'set_key_color', 'set_key_name',
            'set_key_pressed', 'set_key_pressed_support', 'set_key_type', 'set_keyrange', 
            'set_knob_defval', 'set_knob_label', 'set_knob_unit', 'set_listener',
            'set_menu_item_str', 'set_menu_item_value', 'set_menu_item_visibility',
            'set_midi', 'set_nrpn', 'set_rpn', 'set_script_title', 'set_skin_offset',
            'set_snapshot_type', 'set_table_steps_shown', 'set_text', 'set_ui_height', 
            'set_ui_height_px', 'set_ui_wf_property', 'stop_wait', 'ticks_to_ms', 'wait',
            'wait_ticks', 'will_never_terminate', 'zone_slice_idx_loop_end', 
            'zone_slice_idx_loop_start', 'zone_slice_length', 'zone_slice_loop_count'
            ),
        //KSP_PREPROCESSOR
        7 => array(
            'END_USE_CODE', 'RESET_CONDITION', 'SET_CONDITION', 'USE_CODE_IF', 'USE_CODE_IF_NOT' 
            ),
        //KSCRIPT_KEYWORDS
        8 => array(
            'downto', 'end family', 'end for', 'end macro', 'end property', 'end taskfunc',
            'family', 'for', 'import', 'macro', 'out', 'override', 'property', 'step', 
            'taskfunc', 'to', 'var'
            )
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true,
        4 => true,
        5 => true,
        6 => true,
        7 => true,
        8 => true,      
        ),
    'SYMBOLS' => array(
        0 => array('(', ')', '[', ']'),
        1 => array(':=','=', '+', '-', '*','/','&','#')
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #000000; font-weight: bold;',
            2 => 'color: #000000; font-weight: bold;',
            3 => 'color: #000066;',
            4 => 'color: #000066; font-weight: bold;',
            5 => 'color: #000066;',
            6 => 'color: #000066;',
            7 => 'color: #000066;',
            8 => 'color: #000066;',
            ),
        'COMMENTS' => array(
            1 => 'color: #808080; font-style: italic;',
            'MULTI' => 'color: #808080; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #ff0000; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #009900;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;',
            //'HARD' => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;'
            ),
        'METHODS' => array(
            1 => 'color: #006600;'
            ),
        'REGEXPS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #000066;',
            1 => 'color: #000066;'
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => '',
        5 => '',
        6 => '',
        7 => '',
        8 => '',        
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        1 => ''
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 4
);

?>