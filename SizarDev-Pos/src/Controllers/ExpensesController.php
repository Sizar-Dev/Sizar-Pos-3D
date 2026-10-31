<?php
/**
 * Sizar POS Pro — High-Precision Commercial POS & ERP System
 * @developer SizarDev
 * @city Oran, Algeria
 * @copyright 2026 SizarDev. All rights reserved.
 *
 * تحذير وأمانة شرعية وقانونية:
 * هذا النظام محمي بموجب قوانين الملكية الفكرية، وحقوق المؤلف الدولية، وأمانة أمام الله.
 * لا أسامح ولا أبيح شرعاً وقانوناً لأي شخص أو جهة تستخدم هذا النظام أو تنسخه أو تعدل عليه
 * أو تبيعه أو توزعه دون ترخيص واستئذان رسمي موثق ومسبق من المطور الأصلي.
 *
 * Strict Warning: Unauthorized reproduction, reverse-engineering, decompilation,
 * modification, or redistribution of this software without an official license from
 * the author is strictly prohibited and subject to legal prosecution.
 *
 * ‍﻿​‌​‌‌​‌‌​‌​​​​‌‌​‌​‌​​‌​​‌​‌‌​​‌​‌​‌​​​​​‌​‌​‌​​​‌​​‌‌‌‌​‌​​​‌‌‌​‌​‌​​‌​​‌​​​​​‌​‌​‌​​​​​‌​​‌​​​​‌​​‌​​‌​‌​​​​‌‌​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​‌‌​​‌​​​‌​‌​‌​​‌‌‌​​‌​​​​​‌​‌​​‌‌‌​​‌​​​​‌‌​‌​​​‌​‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​​‌‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​‌​‌​‌​‌​​​​​‌​‌​​‌‌​​​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​‌​​​‌​‌‌​​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​‌​​‌​​‌​​​‌​​​‌​‌‌‌​‌​​​​‌​‌​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​​‌​​​‌‌‌​‌​‌​‌‌​​​‌‌​‌‌‌​‌​​​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​​‌​​​​​​​‌​‌​​​​‌​​‌​​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​​‌​‌‌​‌​‌​‌​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​​​​​‌​​​​​​‌​​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​‌​​‌‌​‌‌‌​‌​‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​‌​‌​​‌​‌​​‌​​​​‌​‌​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​‌​‌​​‌​​​​​​‌​​​​‌‌​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌‌​​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​‌‌‌​‌​​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​​‌‌‌​‌​​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​​​‌​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​​​‌​‌​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​​‌‌‌​‌​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​​‌‌‌​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​​‌​​​​‌​‌​​‌​​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​​​​​​‌​​​‌​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌​‌‌​​​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​​​​‌​‌​​​​​‌​‌​​‌​‌‌​‌‌​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌‌​​‌​​‌​​‌​‌​​‌‌‌‌​‌​​‌‌​​​‌​​​​​‌​‌​​​​‌​​‌​​‌‌​​​‌​​​‌​‌​​‌​​​​​​‌​​​‌​​​‌​​‌​​‌​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​​‌​​‌​‌​‌​‌‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​‌​​​‌​​‌‌‌‌​​‌​​​​​​‌​​​​​‌​‌​​‌‌​​​‌​​‌‌​​​​‌​​​​​​‌​​​​​‌​‌​​‌​​‌​​‌​​​​​​‌​​​​​‌​‌​‌​​‌‌​‌​‌​​‌‌​‌​​‌​​‌​‌​‌​​‌‌​‌​‌​‌​​​‌​​​​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌​​​‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​​‌‌​‌​‌​‌​​​​​‌​​‌​​‌​‌​​‌‌​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​​​‌​‌​‌​‌​‌​‌​‌​‌​​​‌​​‌‌‌‌​‌​​‌‌​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​​​​‌​‌​​​‌‌‌​‌​​​‌​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​‌​‌‌‌​‌​​‌‌‌​‌​​​​​‌​‌​​‌​‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌​​‌​‌​‌‌‌‌​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​‌​​​​​​​‌​‌​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​‌​​‌​​‌​‌‌‌​​​​​‌​‌​​‌​‌‌​​‌​‌‌​‌‌‌‌​‌‌‌​‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌‌​‌​​​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​‌‌​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​​‌​​‌‌​‌​​‌​‌‌​​‌​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​‌‌​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​‌​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​​​‌​‌‌​‌‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌​​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​​​​‌​‌‌​‌‌​​​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​​​‌​‌​​‌‌​‌‌‌‌​‌‌​​‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌​​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌‌​​‌‌​​‌​‌‌‌​​​​​‌​‌​​‌​​​​​‌​‌‌​‌‌‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌‌​​​‌​‌‌‌​‌​‌​‌‌​​‌​‌​‌‌‌​​‌‌​‌‌‌​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌​‌​​‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​‌‌​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​​​​​‌​‌‌​​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​‌​‌​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌​​​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​‌‌​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​‌‌‌​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌​​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​​​‌​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​‌​‌‌​‌‌‌​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌‌​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌​​‌‌​‌​‌​‌​‌​‌​‌​‌​​‌‌​‌​‌​‌​​​​‌​​​​​​‌​​​​‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​‌‌​​‌​‌​‌​‌​‌​‌​​‌‌​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌​‌​‌​​‌‌​‌​‌​​​‌​‌​‌​​​‌​​​‌​​‌​​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​‌‌​​‌​​‌​‌‌‌​﻿‍
 */

require_once __DIR__ . '/../Utils/Decimal.php';
require_once __DIR__ . '/../Utils/Uid.php';
require_once __DIR__ . '/../SystemLog.php';
require_once __DIR__ . '/../Response.php';
require_once __DIR__ . '/CashVaultController.php';

class ExpensesController
{
    private static bool $tablesEnsured = false;

    /**
     * Hardened Receipt Attachment Validator for Bills & Operating Expenses.
     * Supports: Images (JPEG, PNG, WEBP, GIF, BMP) AND PDF documents.
     * Strictly rejects: Text files (.txt), scripts (PHP, JS), SVGs, executables, audio, and videos.
     * Guarantees safe Base64 encoding with data URI scheme preserved for direct UI previews.
     */
    public static function validateReceiptImage(?string $receiptImage): ?string
    {
        if (empty($receiptImage) || !is_string($receiptImage)) {
            return null;
        }

        // 25MB raw file cap (~36MB base64 string)
        if (strlen($receiptImage) > 36 * 1024 * 1024) {
            throw new \InvalidArgumentException('Receipt attachment exceeds maximum allowed size (25MB)');
        }

        $raw = $receiptImage;
        $prefixMime = '';
        if (str_starts_with($raw, 'data:') && strpos($raw, ';base64,') !== false) {
            $semi = strpos($raw, ';base64,');
            $prefixMime = strtolower(trim(substr($raw, 5, $semi - 5)));
            $raw = substr($raw, $semi + 8);
        }
        $clean = preg_replace('/\s+/', '', $raw);
        $binary = base64_decode($clean, true);

        if ($binary === false || strlen($binary) === 0) {
            throw new \InvalidArgumentException('Invalid receipt attachment encoding');
        }

        // Prohibit scripts and SVG in attachment data
        $lead = substr($binary, 0, 8192);
        if (stripos($lead, '<?php') !== false || stripos($lead, '<?=') !== false || stripos($lead, '<script') !== false || stripos($lead, '<svg') !== false) {
            throw new \InvalidArgumentException('Receipt attachment contains prohibited script or executable content');
        }

        // Check if PDF document
        if (str_starts_with($binary, '%PDF-') || $prefixMime === 'application/pdf') {
            if (!str_starts_with($binary, '%PDF-')) {
                throw new \InvalidArgumentException('Invalid PDF document structure');
            }
            // Deep PDF inspection: scan first 2MB for executable objects / active JS
            $scanChunk = substr($binary, 0, 2 * 1024 * 1024);
            if (preg_match('/\/(JavaScript|JS|Launch|EmbeddedFiles)\b/i', $scanChunk)) {
                throw new \InvalidArgumentException('PDF receipt contains prohibited executable script content');
            }
            return 'data:application/pdf;base64,' . $clean;
        }

        // Check if Image
        $imgInfo = @getimagesizefromstring($binary);
        $allowedTypes = [IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_WEBP];
        if (defined('IMAGETYPE_GIF')) $allowedTypes[] = IMAGETYPE_GIF;
        if (defined('IMAGETYPE_BMP')) $allowedTypes[] = IMAGETYPE_BMP;

        if (!$imgInfo || !in_array($imgInfo[2], $allowedTypes, true)) {
            throw new \InvalidArgumentException('Receipt attachment must be a valid image (JPEG, PNG, WEBP) or PDF document. Plain text, scripts, and other files are strictly prohibited.');
        }

        if ($imgInfo[0] > 6000 || $imgInfo[1] > 6000 || ($imgInfo[0] * $imgInfo[1]) > 25000000) {
            throw new \InvalidArgumentException('Receipt picture dimensions exceed maximum allowed limits (6000x6000px)');
        }

        $mime = $imgInfo['mime'] ?? 'image/jpeg';
        return 'data:' . $mime . ';base64,' . $clean;
    }

    public function ensureTables(PDO $db): void
    {
        if (self::$tablesEnsured || $db->inTransaction()) {
            return;
        }
        self::$tablesEnsured = true;

        // Fast path: if the latest schema artifacts already exist, skip redundant DDL queries
        try {
            $fastCheck = $db->query("SELECT 1 FROM recurring_bill_revisions LIMIT 1");
            if ($fastCheck !== false) {
                return;
            }
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

        $db->exec("CREATE TABLE IF NOT EXISTS operating_expenses (
            id INT AUTO_INCREMENT PRIMARY KEY,
            uid VARCHAR(50) UNIQUE DEFAULT NULL,
            category VARCHAR(100) NOT NULL,
            amount DECIMAL(32,16) NOT NULL DEFAULT 0,
            description TEXT NOT NULL,
            paid_from VARCHAR(20) NOT NULL DEFAULT 'vault',
            paid_from_type VARCHAR(20) NOT NULL DEFAULT 'vault',
            paid_by_user_id INT NOT NULL,
            beneficiary VARCHAR(190) NULL,
            receipt_ref VARCHAR(100) NULL,
            receipt_image LONGTEXT NULL,
            receipt_image_name VARCHAR(255) NULL,
            split_data JSON NULL,
            is_archived TINYINT(1) NOT NULL DEFAULT 0,
            note TEXT NULL,
            version INT NOT NULL DEFAULT 1,
            agreement_status VARCHAR(20) NOT NULL DEFAULT 'pending_acceptance',
            is_locked_for_edit TINYINT(1) NOT NULL DEFAULT 0,
            has_refusal TINYINT(1) NOT NULL DEFAULT 0,
            settlement_status VARCHAR(20) NOT NULL DEFAULT 'none',
            refused_at DATETIME NULL,
            refused_by INT NULL,
            refusal_reason TEXT NULL,
            last_edited_by INT NULL,
            last_edited_by_name VARCHAR(100) NULL,
            paid_at DATETIME NOT NULL,
            created_by INT NULL,
            edited_by INT NULL,
            created_at DATETIME NOT NULL,
            updated_at DATETIME NULL,
            deleted_at DATETIME NULL,
            deleted_by INT NULL,
            delete_reason TEXT NULL,
            INDEX idx_oe_paid_by (paid_by_user_id),
            INDEX idx_oe_paid_at (paid_at),
            INDEX idx_oe_category (category),
            INDEX idx_oe_archived (is_archived),
            INDEX idx_oe_paid_from (paid_from),
            INDEX idx_oe_agreement (agreement_status),
            INDEX idx_oe_locked (is_locked_for_edit),
            INDEX idx_oe_refusal (has_refusal)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

        $oeCols = [
            'paid_from_type'      => "ALTER TABLE operating_expenses ADD COLUMN paid_from_type VARCHAR(20) NOT NULL DEFAULT 'vault'",
            'receipt_ref'         => "ALTER TABLE operating_expenses ADD COLUMN receipt_ref VARCHAR(100) NULL",
            'receipt_image'       => "ALTER TABLE operating_expenses ADD COLUMN receipt_image LONGTEXT NULL",
            'receipt_image_name'  => "ALTER TABLE operating_expenses ADD COLUMN receipt_image_name VARCHAR(255) NULL",
            'split_data'          => "ALTER TABLE operating_expenses ADD COLUMN split_data JSON NULL",
            'is_archived'         => "ALTER TABLE operating_expenses ADD COLUMN is_archived TINYINT(1) NOT NULL DEFAULT 0",
            'version'             => "ALTER TABLE operating_expenses ADD COLUMN version INT NOT NULL DEFAULT 1",
            'agreement_status'    => "ALTER TABLE operating_expenses ADD COLUMN agreement_status VARCHAR(20) NOT NULL DEFAULT 'pending_acceptance'",
            'is_locked_for_edit'  => "ALTER TABLE operating_expenses ADD COLUMN is_locked_for_edit TINYINT(1) NOT NULL DEFAULT 0",
            'has_refusal'         => "ALTER TABLE operating_expenses ADD COLUMN has_refusal TINYINT(1) NOT NULL DEFAULT 0",
            'settlement_status'   => "ALTER TABLE operating_expenses ADD COLUMN settlement_status VARCHAR(20) NOT NULL DEFAULT 'none'",
            'refused_at'          => "ALTER TABLE operating_expenses ADD COLUMN refused_at DATETIME NULL",
            'refused_by'          => "ALTER TABLE operating_expenses ADD COLUMN refused_by INT NULL",
            'refusal_reason'      => "ALTER TABLE operating_expenses ADD COLUMN refusal_reason TEXT NULL",
            'last_edited_by'      => "ALTER TABLE operating_expenses ADD COLUMN last_edited_by INT NULL",
            'last_edited_by_name' => "ALTER TABLE operating_expenses ADD COLUMN last_edited_by_name VARCHAR(100) NULL",
            'deleted_at'          => "ALTER TABLE operating_expenses ADD COLUMN deleted_at DATETIME NULL",
            'deleted_by'          => "ALTER TABLE operating_expenses ADD COLUMN deleted_by INT NULL",
            'delete_reason'       => "ALTER TABLE operating_expenses ADD COLUMN delete_reason TEXT NULL",
        ];
        foreach ($oeCols as $col => $sql) {
            try {
                $db->query("SELECT $col FROM operating_expenses LIMIT 1");
            } catch (\Exception $e) {
                try { $db->exec($sql); } catch (\Exception $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }
            }
        }

        $db->exec("CREATE TABLE IF NOT EXISTS operating_expense_revisions (
            id INT AUTO_INCREMENT PRIMARY KEY,
            expense_id INT NOT NULL,
            version INT NOT NULL,
            snapshot JSON NOT NULL,
            settlement_ids JSON NULL,
            created_by INT NULL,
            created_at DATETIME NOT NULL,
            INDEX idx_oer_expense (expense_id),
            INDEX idx_oer_version (expense_id, version)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

        $db->exec("CREATE TABLE IF NOT EXISTS bill_groups (
            id INT AUTO_INCREMENT PRIMARY KEY,
            uid VARCHAR(50) UNIQUE DEFAULT NULL,
            name VARCHAR(190) NOT NULL,
            description TEXT NULL,
            color VARCHAR(50) NULL DEFAULT NULL,
            icon VARCHAR(50) NULL DEFAULT NULL,
            category VARCHAR(50) NULL DEFAULT NULL,
            is_from_circle TINYINT(1) NOT NULL DEFAULT 0,
            source_circle_id INT NULL DEFAULT NULL,
            created_by INT NULL DEFAULT NULL,
            deleted_at DATETIME NULL DEFAULT NULL,
            deleted_by INT NULL DEFAULT NULL,
            delete_reason TEXT NULL,
            created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
            updated_at DATETIME NULL DEFAULT NULL,
            INDEX idx_bg_deleted (deleted_at),
            INDEX idx_bg_source_circle (source_circle_id),
            INDEX idx_bg_created_by (created_by)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

        $bgCols = [
            'uid'              => "ALTER TABLE bill_groups ADD COLUMN uid VARCHAR(50) UNIQUE DEFAULT NULL AFTER id",
            'description'      => "ALTER TABLE bill_groups ADD COLUMN description TEXT NULL",
            'color'            => "ALTER TABLE bill_groups ADD COLUMN color VARCHAR(50) NULL DEFAULT NULL",
            'icon'             => "ALTER TABLE bill_groups ADD COLUMN icon VARCHAR(50) NULL DEFAULT NULL",
            'category'         => "ALTER TABLE bill_groups ADD COLUMN category VARCHAR(50) NULL DEFAULT NULL",
            'is_from_circle'   => "ALTER TABLE bill_groups ADD COLUMN is_from_circle TINYINT(1) NOT NULL DEFAULT 0",
            'source_circle_id' => "ALTER TABLE bill_groups ADD COLUMN source_circle_id INT NULL DEFAULT NULL",
            'created_by'       => "ALTER TABLE bill_groups ADD COLUMN created_by INT NULL DEFAULT NULL",
            'deleted_at'       => "ALTER TABLE bill_groups ADD COLUMN deleted_at DATETIME NULL DEFAULT NULL",
            'deleted_by'       => "ALTER TABLE bill_groups ADD COLUMN deleted_by INT NULL DEFAULT NULL",
            'delete_reason'    => "ALTER TABLE bill_groups ADD COLUMN delete_reason TEXT NULL",
            'updated_at'       => "ALTER TABLE bill_groups ADD COLUMN updated_at DATETIME NULL DEFAULT NULL",
        ];
        foreach ($bgCols as $col => $sql) {
            try {
                $db->query("SELECT $col FROM bill_groups LIMIT 1");
            } catch (\Exception $e) {
                try { $db->exec($sql); } catch (\Exception $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }
            }
        }

        $db->exec("CREATE TABLE IF NOT EXISTS recurring_bills (
            id INT AUTO_INCREMENT PRIMARY KEY,
            uid VARCHAR(50) UNIQUE DEFAULT NULL,
            name VARCHAR(190) NOT NULL,
            category VARCHAR(100) NOT NULL DEFAULT 'Utilities',
            provider_name VARCHAR(190) NULL,
            amount DECIMAL(32,16) NOT NULL DEFAULT 0,
            estimated_amount DECIMAL(32,16) NULL DEFAULT NULL,
            frequency VARCHAR(20) NOT NULL DEFAULT 'monthly',
            interval_days INT NULL,
            due_day INT NULL,
            first_due_date DATE NOT NULL,
            next_due_date DATE NULL,
            cycle_anchor_date DATE NULL,
            is_archived TINYINT(1) NOT NULL DEFAULT 0,
            group_id INT NULL DEFAULT NULL,
            is_from_circle TINYINT(1) NOT NULL DEFAULT 0,
            source_cycle_id INT NULL DEFAULT NULL,
            is_paused TINYINT(1) NOT NULL DEFAULT 0,
            active TINYINT(1) NOT NULL DEFAULT 1,
            default_cash_source VARCHAR(20) NOT NULL DEFAULT 'vault',
            receipt_ref VARCHAR(100) NULL,
            receipt_image LONGTEXT NULL,
            receipt_image_name VARCHAR(255) NULL,
            paused_at DATETIME NULL,
            paused_by INT NULL,
            resumed_at DATETIME NULL,
            resumed_by INT NULL,
            note TEXT NULL,
            created_by INT NULL,
            edited_by INT NULL,
            created_at DATETIME NOT NULL,
            updated_at DATETIME NULL,
            deleted_at DATETIME NULL,
            deleted_by INT NULL,
            delete_reason TEXT NULL,
            INDEX idx_rb_active (active),
            INDEX idx_rb_archived (is_archived),
            INDEX idx_rb_group_id (group_id),
            INDEX idx_rb_paused (is_paused),
            INDEX idx_rb_category (category),
            INDEX idx_rb_next_due (next_due_date)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

        $rbCols = [
            'provider_name'       => "ALTER TABLE recurring_bills ADD COLUMN provider_name VARCHAR(190) NULL",
            'estimated_amount'    => "ALTER TABLE recurring_bills ADD COLUMN estimated_amount DECIMAL(32,16) NULL DEFAULT NULL",
            'due_day'             => "ALTER TABLE recurring_bills ADD COLUMN due_day INT NULL",
            'next_due_date'       => "ALTER TABLE recurring_bills ADD COLUMN next_due_date DATE NULL",
            'cycle_anchor_date'   => "ALTER TABLE recurring_bills ADD COLUMN cycle_anchor_date DATE NULL",
            'is_archived'         => "ALTER TABLE recurring_bills ADD COLUMN is_archived TINYINT(1) NOT NULL DEFAULT 0",
            'group_id'            => "ALTER TABLE recurring_bills ADD COLUMN group_id INT NULL DEFAULT NULL",
            'is_from_circle'      => "ALTER TABLE recurring_bills ADD COLUMN is_from_circle TINYINT(1) NOT NULL DEFAULT 0",
            'source_cycle_id'     => "ALTER TABLE recurring_bills ADD COLUMN source_cycle_id INT NULL DEFAULT NULL",
            'is_paused'           => "ALTER TABLE recurring_bills ADD COLUMN is_paused TINYINT(1) NOT NULL DEFAULT 0",
            'default_cash_source' => "ALTER TABLE recurring_bills ADD COLUMN default_cash_source VARCHAR(20) NOT NULL DEFAULT 'vault'",
            'receipt_ref'         => "ALTER TABLE recurring_bills ADD COLUMN receipt_ref VARCHAR(100) NULL",
            'receipt_image'       => "ALTER TABLE recurring_bills ADD COLUMN receipt_image LONGTEXT NULL",
            'receipt_image_name'  => "ALTER TABLE recurring_bills ADD COLUMN receipt_image_name VARCHAR(255) NULL",
            'paused_at'           => "ALTER TABLE recurring_bills ADD COLUMN paused_at DATETIME NULL",
            'paused_by'           => "ALTER TABLE recurring_bills ADD COLUMN paused_by INT NULL",
            'resumed_at'          => "ALTER TABLE recurring_bills ADD COLUMN resumed_at DATETIME NULL",
            'resumed_by'          => "ALTER TABLE recurring_bills ADD COLUMN resumed_by INT NULL",
            'version'             => "ALTER TABLE recurring_bills ADD COLUMN version INT NOT NULL DEFAULT 1",
            'has_refusal'         => "ALTER TABLE recurring_bills ADD COLUMN has_refusal TINYINT(1) NOT NULL DEFAULT 0",
            'settlement_status'   => "ALTER TABLE recurring_bills ADD COLUMN settlement_status VARCHAR(20) NOT NULL DEFAULT 'none'",
            'refused_at'          => "ALTER TABLE recurring_bills ADD COLUMN refused_at DATETIME NULL",
            'refused_by'          => "ALTER TABLE recurring_bills ADD COLUMN refused_by INT NULL",
            'refusal_reason'      => "ALTER TABLE recurring_bills ADD COLUMN refusal_reason TEXT NULL",
            'agreement_status'    => "ALTER TABLE recurring_bills ADD COLUMN agreement_status VARCHAR(20) NOT NULL DEFAULT 'pending_acceptance'",
            'is_locked_for_edit'   => "ALTER TABLE recurring_bills ADD COLUMN is_locked_for_edit TINYINT(1) NOT NULL DEFAULT 0",
            'last_edited_by'       => "ALTER TABLE recurring_bills ADD COLUMN last_edited_by INT NULL",
            'last_edited_by_name'  => "ALTER TABLE recurring_bills ADD COLUMN last_edited_by_name VARCHAR(100) NULL",
            'deleted_at'          => "ALTER TABLE recurring_bills ADD COLUMN deleted_at DATETIME NULL",
            'deleted_by'          => "ALTER TABLE recurring_bills ADD COLUMN deleted_by INT NULL",
            'delete_reason'       => "ALTER TABLE recurring_bills ADD COLUMN delete_reason TEXT NULL",
            'edited_by'           => "ALTER TABLE recurring_bills ADD COLUMN edited_by INT NULL",
        ];
        foreach ($rbCols as $col => $sql) {
            try {
                $db->query("SELECT $col FROM recurring_bills LIMIT 1");
            } catch (\Exception $e) {
                try { $db->exec($sql); } catch (\Exception $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }
            }
        }
        try { $db->exec("ALTER TABLE recurring_bills ADD INDEX idx_rb_group_id (group_id)"); } catch (\Exception $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }

        $db->exec("CREATE TABLE IF NOT EXISTS recurring_bill_cycles (
            id INT AUTO_INCREMENT PRIMARY KEY,
            uid VARCHAR(50) UNIQUE DEFAULT NULL,
            bill_id INT NOT NULL,
            cycle_label VARCHAR(50) NOT NULL,
            due_date DATE NOT NULL,
            amount_expected DECIMAL(32,16) NOT NULL DEFAULT 0,
            amount_paid DECIMAL(32,16) NOT NULL DEFAULT 0,
            status VARCHAR(20) NOT NULL DEFAULT 'due',
            paid_from VARCHAR(20) NULL,
            paid_from_type VARCHAR(20) NULL,
            paid_at DATETIME NULL,
            declared_paid_at DATE NULL,
            invoice_date DATE NULL,
            received_date DATE NULL,
            paid_by INT NULL,
            receipt_ref VARCHAR(100) NULL,
            receipt_image LONGTEXT NULL,
            receipt_image_name VARCHAR(255) NULL,
            split_data JSON NULL,
            has_refusal TINYINT(1) NOT NULL DEFAULT 0,
            split_status VARCHAR(20) NOT NULL DEFAULT 'none',
            voided_at DATETIME NULL,
            voided_by INT NULL,
            void_reason VARCHAR(255) NULL,
            version INT NOT NULL DEFAULT 1,
            note TEXT NULL,
            created_at DATETIME NOT NULL,
            updated_at DATETIME NULL,
            UNIQUE KEY uniq_bill_cycle (bill_id, cycle_label),
            INDEX idx_rbc_bill_id (bill_id),
            INDEX idx_rbc_due_date (due_date),
            INDEX idx_rbc_status (status),
            INDEX idx_rbc_has_refusal (has_refusal),
            INDEX idx_rbc_voided (voided_at),
            INDEX idx_rbc_uid (uid)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

        $rbcCols = [
            'uid'                => "ALTER TABLE recurring_bill_cycles ADD COLUMN uid VARCHAR(50) UNIQUE DEFAULT NULL AFTER id",
            'paid_from_type'     => "ALTER TABLE recurring_bill_cycles ADD COLUMN paid_from_type VARCHAR(20) NULL",
            'receipt_ref'        => "ALTER TABLE recurring_bill_cycles ADD COLUMN receipt_ref VARCHAR(100) NULL",
            'receipt_image'      => "ALTER TABLE recurring_bill_cycles ADD COLUMN receipt_image LONGTEXT NULL",
            'receipt_image_name' => "ALTER TABLE recurring_bill_cycles ADD COLUMN receipt_image_name VARCHAR(255) NULL",
            'split_data'         => "ALTER TABLE recurring_bill_cycles ADD COLUMN split_data JSON NULL",
            'has_refusal'        => "ALTER TABLE recurring_bill_cycles ADD COLUMN has_refusal TINYINT(1) NOT NULL DEFAULT 0",
            'split_status'       => "ALTER TABLE recurring_bill_cycles ADD COLUMN split_status VARCHAR(20) NOT NULL DEFAULT 'none'",
            'voided_at'          => "ALTER TABLE recurring_bill_cycles ADD COLUMN voided_at DATETIME NULL",
            'voided_by'          => "ALTER TABLE recurring_bill_cycles ADD COLUMN voided_by INT NULL",
            'void_reason'        => "ALTER TABLE recurring_bill_cycles ADD COLUMN void_reason VARCHAR(255) NULL",
            'version'            => "ALTER TABLE recurring_bill_cycles ADD COLUMN version INT NOT NULL DEFAULT 1",
            'agreement_status'   => "ALTER TABLE recurring_bill_cycles ADD COLUMN agreement_status VARCHAR(20) NOT NULL DEFAULT 'pending_acceptance'",
            'is_locked_for_edit'  => "ALTER TABLE recurring_bill_cycles ADD COLUMN is_locked_for_edit TINYINT(1) NOT NULL DEFAULT 0",
            'last_edited_by'      => "ALTER TABLE recurring_bill_cycles ADD COLUMN last_edited_by INT NULL",
            'last_edited_by_name' => "ALTER TABLE recurring_bill_cycles ADD COLUMN last_edited_by_name VARCHAR(100) NULL",
            'bill_created'        => "ALTER TABLE recurring_bill_cycles ADD COLUMN bill_created TINYINT(1) NOT NULL DEFAULT 0",
            'bill_created_at'     => "ALTER TABLE recurring_bill_cycles ADD COLUMN bill_created_at DATETIME NULL",
            'bill_created_by'     => "ALTER TABLE recurring_bill_cycles ADD COLUMN bill_created_by INT NULL",
            'declared_paid_at'    => "ALTER TABLE recurring_bill_cycles ADD COLUMN declared_paid_at DATE NULL",
            'invoice_date'        => "ALTER TABLE recurring_bill_cycles ADD COLUMN invoice_date DATE NULL",
            'received_date'       => "ALTER TABLE recurring_bill_cycles ADD COLUMN received_date DATE NULL",
            'reset_count'         => "ALTER TABLE recurring_bill_cycles ADD COLUMN reset_count INT NOT NULL DEFAULT 0",
        ];
        foreach ($rbcCols as $col => $sql) {
            try {
                $db->query("SELECT $col FROM recurring_bill_cycles LIMIT 1");
            } catch (\Exception $e) {
                try { $db->exec($sql); } catch (\Exception $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }
            }
        }
        try { $db->exec("ALTER TABLE recurring_bill_cycles ADD INDEX idx_rbc_reset_count (reset_count)"); } catch (\Exception $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }

        // Auto-migrate legacy circle UIDs from BIL- to CIR- for active recurring circles
        try {
            $db->exec("UPDATE recurring_bills SET uid = REPLACE(uid, 'BIL-', 'CIR-') WHERE is_archived = 0 AND uid LIKE 'BIL-%'");
        } catch (\Throwable $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }

        // Auto-migrate existing genuinely fulfilled or explicitly recorded cycles to bill_created = 1
        try {
            $db->exec("UPDATE recurring_bill_cycles SET bill_created = 1 WHERE (amount_paid > 0 OR status = 'paid' OR split_status != 'none' OR bill_created_by IS NOT NULL) AND bill_created = 0");
            // Heal unbilled cycles that were prematurely flipped to bill_created = 1 by legacy migration
            $db->exec("UPDATE recurring_bill_cycles SET bill_created = 0 WHERE amount_paid = 0 AND status != 'paid' AND (split_status IS NULL OR split_status = 'none') AND bill_created_by IS NULL AND bill_created = 1");
        } catch (\Throwable $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }

        $db->exec("CREATE TABLE IF NOT EXISTS recurring_bill_cycle_resets (
            id INT AUTO_INCREMENT PRIMARY KEY,
            cycle_id INT NOT NULL,
            bill_id INT NOT NULL,
            reset_number INT NOT NULL DEFAULT 1,
            reason TEXT NOT NULL,
            snapshot_before JSON NULL,
            refunds_summary JSON NULL,
            reset_by INT NOT NULL,
            reset_by_username VARCHAR(100) NULL,
            created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
            INDEX idx_rbcr_cycle (cycle_id),
            INDEX idx_rbcr_bill (bill_id),
            INDEX idx_rbcr_created (created_at)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

        // Self-healing migration: backfill recurring_bill_cycle_resets and reset_count from expense_history
        try {
            $resetHistoryCount = (int)$db->query("SELECT COUNT(*) FROM recurring_bill_cycle_resets")->fetchColumn();
            if ($resetHistoryCount === 0) {
                $pastResets = $db->query("SELECT h.*, u.username 
                    FROM expense_history h 
                    LEFT JOIN users u ON h.edited_by = u.id 
                    WHERE h.action = 'period_bill_reset' AND h.cycle_id IS NOT NULL 
                    ORDER BY h.id ASC")->fetchAll();
                $cycleCounts = [];
                foreach ($pastResets as $pr) {
                    $cId = (int)$pr['cycle_id'];
                    $bId = (int)$pr['bill_id'];
                    $cycleCounts[$cId] = ($cycleCounts[$cId] ?? 0) + 1;
                    $rNum = $cycleCounts[$cId];
                    $db->prepare("INSERT INTO recurring_bill_cycle_resets 
                        (cycle_id, bill_id, reset_number, reason, refunds_summary, reset_by, reset_by_username, created_at)
                        VALUES (:cid, :bid, :rnum, :reason, :ref, :by, :uname, :ca)")
                       ->execute([
                           'cid'    => $cId,
                           'bid'    => $bId,
                           'rnum'   => $rNum,
                           'reason' => $pr['reason'] ?: 'Period bill reset',
                           'ref'    => $pr['changes'],
                           'by'     => (int)($pr['edited_by'] ?: 1),
                           'uname'  => $pr['username'] ?: 'Staff',
                           'ca'     => $pr['created_at'] ?: date('Y-m-d H:i:s')
                       ]);
                }
                foreach ($cycleCounts as $cId => $cnt) {
                    $db->prepare("UPDATE recurring_bill_cycles SET reset_count = :cnt WHERE id = :cid")
                       ->execute(['cnt' => $cnt, 'cid' => $cId]);
                }
            }
        } catch (\Throwable $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }

        // Self-healing migration: resolve real usernames for legacy 'Staff' entries in recurring_bill_cycle_resets
        try {
            $db->exec("UPDATE recurring_bill_cycle_resets r 
                       LEFT JOIN users u ON r.reset_by = u.id 
                       SET r.reset_by_username = COALESCE(u.username, 'admin') 
                       WHERE r.reset_by_username = 'Staff' OR r.reset_by_username IS NULL");
        } catch (\Throwable $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }

        $db->exec("CREATE TABLE IF NOT EXISTS recurring_bill_cycle_payments (
            id INT AUTO_INCREMENT PRIMARY KEY,
            cycle_id INT NOT NULL,
            bill_id INT NOT NULL,
            user_id INT NOT NULL,
            amount DECIMAL(32,16) NOT NULL DEFAULT 0,
            paid_from VARCHAR(20) NOT NULL DEFAULT 'vault',
            paid_at DATETIME NULL,
            receipt_ref VARCHAR(100) NULL,
            receipt_image LONGTEXT NULL,
            receipt_image_name VARCHAR(255) NULL,
            settlement_id INT NULL,
            note TEXT NULL,
            created_by INT NULL,
            created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
            voided_at DATETIME NULL,
            voided_by INT NULL,
            void_reason VARCHAR(255) NULL,
            INDEX idx_rbcp_cycle (cycle_id),
            INDEX idx_rbcp_bill (bill_id),
            INDEX idx_rbcp_user (user_id),
            INDEX idx_rbcp_settlement (settlement_id),
            INDEX idx_rbcp_voided (voided_at)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

        try {
            $db->exec("ALTER TABLE recurring_bill_cycle_payments MODIFY COLUMN paid_at DATETIME NULL");
        } catch (\Exception $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }

        $rbcpCols = [
            'paid_from'          => "ALTER TABLE recurring_bill_cycle_payments ADD COLUMN paid_from VARCHAR(20) NOT NULL DEFAULT 'vault'",
            'receipt_ref'        => "ALTER TABLE recurring_bill_cycle_payments ADD COLUMN receipt_ref VARCHAR(100) NULL",
            'receipt_image'      => "ALTER TABLE recurring_bill_cycle_payments ADD COLUMN receipt_image LONGTEXT NULL",
            'receipt_image_name' => "ALTER TABLE recurring_bill_cycle_payments ADD COLUMN receipt_image_name VARCHAR(255) NULL",
            'settlement_id'      => "ALTER TABLE recurring_bill_cycle_payments ADD COLUMN settlement_id INT NULL",
            'voided_at'          => "ALTER TABLE recurring_bill_cycle_payments ADD COLUMN voided_at DATETIME NULL",
            'voided_by'          => "ALTER TABLE recurring_bill_cycle_payments ADD COLUMN voided_by INT NULL",
            'void_reason'        => "ALTER TABLE recurring_bill_cycle_payments ADD COLUMN void_reason VARCHAR(255) NULL",
        ];
        foreach ($rbcpCols as $col => $sql) {
            try {
                $db->query("SELECT $col FROM recurring_bill_cycle_payments LIMIT 1");
            } catch (\Exception $e) {
                try { $db->exec($sql); } catch (\Exception $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }
            }
        }

        $db->exec("CREATE TABLE IF NOT EXISTS expense_history (
            id INT AUTO_INCREMENT PRIMARY KEY,
            expense_id INT NULL,
            bill_id INT NULL,
            cycle_id INT NULL,
            edited_by INT NOT NULL,
            action VARCHAR(50) NOT NULL,
            changes JSON NULL,
            old_values JSON NULL,
            new_values JSON NULL,
            reason TEXT NULL,
            note TEXT NULL,
            created_at DATETIME NOT NULL,
            INDEX idx_eh_bill (bill_id),
            INDEX idx_eh_cycle (cycle_id),
            INDEX idx_edited_by (edited_by),
            INDEX idx_created_at (created_at)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

        $historyCols = [
            'reason'     => "ALTER TABLE expense_history ADD COLUMN reason TEXT NULL",
            'old_values' => "ALTER TABLE expense_history ADD COLUMN old_values JSON NULL",
            'new_values' => "ALTER TABLE expense_history ADD COLUMN new_values JSON NULL",
            'note'       => "ALTER TABLE expense_history ADD COLUMN note TEXT NULL",
        ];
        foreach ($historyCols as $col => $sql) {
            try {
                $db->query("SELECT $col FROM expense_history LIMIT 1");
            } catch (\Exception $e) {
                try { $db->exec($sql); } catch (\Exception $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }
            }
        }

        try { $db->exec("ALTER TABLE expense_history ADD INDEX idx_eh_bill (bill_id)"); } catch (\Exception $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }
        try { $db->exec("ALTER TABLE expense_history ADD INDEX idx_eh_cycle (cycle_id)"); } catch (\Exception $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }
        try { $db->exec("ALTER TABLE expense_history ADD INDEX idx_eh_expense (expense_id)"); } catch (\Exception $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }

        $db->exec("CREATE TABLE IF NOT EXISTS recurring_bill_revisions (
            id INT AUTO_INCREMENT PRIMARY KEY,
            bill_id INT NOT NULL,
            version INT NOT NULL,
            bill_snapshot JSON NOT NULL,
            cycle_snapshot JSON NULL,
            settlement_ids JSON NULL,
            created_by INT NOT NULL,
            created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
            cancelled_at DATETIME NULL,
            cancelled_by INT NULL,
            INDEX idx_rbr_bill (bill_id),
            INDEX idx_rbr_version (bill_id, version)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

        self::$tablesEnsured = true;
    }

    /** GET /api/expenses - List one-off operating expenses */
    public function indexExpenses(): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $showDeleted = !empty($_GET['show_deleted']) && in_array(strtolower((string)$_GET['show_deleted']), ['true', '1'], true);
        $where = $showDeleted ? ["1=1"] : ["oe.deleted_at IS NULL"];
        $params = [];

        if (!empty($_GET['category']) && $_GET['category'] !== '__all') {
            $where[] = "oe.category = :cat";
            $params['cat'] = trim((string)$_GET['category']);
        }
        if (!empty($_GET['user_id']) && $_GET['user_id'] !== 'all') {
            $where[] = "oe.paid_by_user_id = :uid";
            $params['uid'] = (int)$_GET['user_id'];
        }
        if (!empty($_GET['from'])) {
            $fromStr = trim((string)$_GET['from']);
            if (strlen($fromStr) === 10) $fromStr .= ' 00:00:00';
            $where[] = "oe.paid_at >= :from";
            $params['from'] = $fromStr;
        }
        if (!empty($_GET['to'])) {
            $toStr = trim((string)$_GET['to']);
            if (strlen($toStr) === 10) $toStr .= ' 23:59:59';
            $where[] = "oe.paid_at <= :to";
            $params['to'] = $toStr;
        }
        $statusFilter = !empty($_GET['status']) ? strtolower(trim((string)$_GET['status'])) : null;
        if ($statusFilter === 'deleted') {
            $where = ["oe.deleted_at IS NOT NULL"];
        } elseif ($statusFilter === 'completed') {
            $where[] = "oe.deleted_at IS NULL AND (oe.settlement_status = 'settled' OR oe.split_data IS NULL)";
        } elseif ($statusFilter === 'stalled') {
            $where[] = "oe.deleted_at IS NULL AND (oe.has_refusal = 1 OR oe.settlement_status = 'refused' OR oe.agreement_status = 'restored_draft')";
        } elseif ($statusFilter === 'active') {
            $where[] = "oe.deleted_at IS NULL AND oe.settlement_status != 'settled' AND oe.has_refusal = 0 AND oe.agreement_status != 'restored_draft' AND oe.split_data IS NOT NULL";
        }

        $sql = "SELECT oe.id, oe.uid, oe.category, oe.amount, oe.description, oe.paid_from, oe.paid_from_type,
                    oe.paid_by_user_id, oe.beneficiary, oe.receipt_ref, oe.receipt_image_name,
                    IF(oe.receipt_image IS NOT NULL AND oe.receipt_image != '', 1, 0) AS has_receipt,
                    OCTET_LENGTH(oe.receipt_image) AS receipt_size,
                    oe.split_data, oe.is_archived, oe.note, oe.version, oe.agreement_status,
                    oe.is_locked_for_edit, oe.has_refusal, oe.settlement_status, oe.refused_at,
                    oe.refused_by, oe.refusal_reason, oe.last_edited_by, oe.last_edited_by_name,
                    oe.paid_at, oe.created_by, oe.edited_by, oe.created_at, oe.updated_at,
                    oe.deleted_at, oe.deleted_by, oe.delete_reason,
                    u.username AS paid_by_name, cb.username AS created_by_name, del_u.username AS deleted_by_name 
            FROM operating_expenses oe 
            LEFT JOIN users u ON oe.paid_by_user_id = u.id 
            LEFT JOIN users cb ON oe.created_by = cb.id 
            LEFT JOIN users del_u ON oe.deleted_by = del_u.id 
            WHERE " . implode(' AND ', $where) . " 
            ORDER BY oe.paid_at DESC, oe.id DESC";

        $page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : null;
        $limit = isset($_GET['limit']) ? max(1, min(1000, (int)$_GET['limit'])) : null;
        $totalCount = null;
        $total = '0';
        $vaultTotal = '0';
        $pocketTotal = '0';

        if ($limit !== null) {
            $countSql = "SELECT COUNT(*) FROM operating_expenses oe WHERE " . implode(' AND ', $where);
            $cStmt = $db->prepare($countSql);
            $cStmt->execute($params);
            $totalCount = (int)$cStmt->fetchColumn();

            // Aggregated totals across entire dataset
            $aggWhere = $where;
            if ($statusFilter !== 'deleted') {
                $aggWhere[] = "oe.deleted_at IS NULL";
            }
            $aggSql = "SELECT 
                COALESCE(SUM(oe.amount), '0') as total_amount,
                COALESCE(SUM(CASE WHEN oe.paid_from = 'vault' THEN oe.amount ELSE 0 END), '0') as vault_total,
                COALESCE(SUM(CASE WHEN oe.paid_from != 'vault' THEN oe.amount ELSE 0 END), '0') as pocket_total
                FROM operating_expenses oe
                WHERE " . implode(' AND ', $aggWhere);
            $aStmt = $db->prepare($aggSql);
            $aStmt->execute($params);
            $agg = $aStmt->fetch(\PDO::FETCH_ASSOC);
            $total = (string)($agg['total_amount'] ?? '0');
            $vaultTotal = (string)($agg['vault_total'] ?? '0');
            $pocketTotal = (string)($agg['pocket_total'] ?? '0');

            $offset = (($page ?: 1) - 1) * $limit;
            $sql .= " LIMIT {$limit} OFFSET {$offset}";
        }

        $stmt = $db->prepare($sql);
        $stmt->execute($params);
        $expenses = $stmt->fetchAll();

        if ($limit === null) {
            // Calculate total amount in memory for non-paginated queries
            foreach ($expenses as $e) {
                if (!$e['deleted_at']) {
                    $total = Decimal::add($total, (string)$e['amount']);
                    if ($e['paid_from'] === 'vault') {
                        $vaultTotal = Decimal::add($vaultTotal, (string)$e['amount']);
                    } else {
                        $pocketTotal = Decimal::add($pocketTotal, (string)$e['amount']);
                    }
                }
            }
        }

        $res = [
            'expenses'     => $expenses,
            'total_amount' => $total,
            'vault_total'  => $vaultTotal,
            'pocket_total' => $pocketTotal
        ];
        if ($limit !== null) {
            $res['total_count'] = $totalCount;
            $res['page'] = $page ?: 1;
            $res['limit'] = $limit;
            $res['total_pages'] = ceil($totalCount / $limit);
        }

        Response::json($res);
    }

    /** POST /api/expenses - Record a one-off operating expense */
    public function storeExpense(array $data): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $description = trim((string)($data['description'] ?? $data['title'] ?? ''));
        if ($description === '') {
            Response::json(['error' => 'Expense description or title is required'], 400);
            return;
        }

        $category = trim((string)($data['category'] ?? 'General'));
        if ($category === '') {
            $category = 'General';
        }

        $amountRaw = trim((string)($data['amount'] ?? ''));
        if (!is_numeric($amountRaw) || Decimal::comp($amountRaw, '0') <= 0) {
            Response::json(['error' => 'Expense amount must be greater than zero'], 400);
            return;
        }
        $amount = Decimal::truncate($amountRaw, 16);

        $rawPaidFrom = $data['paid_from'] ?? ($data['paid_from_type'] ?? 'vault');
        $paidFrom = in_array($rawPaidFrom, ['vault', 'hand', 'cashier', 'partner_pocket', 'bank'], true) ? $rawPaidFrom : 'vault';
        $paidBy = !empty($data['paid_by_user_id']) ? (int)$data['paid_by_user_id'] : ($_SESSION['user_id'] ?? 1);
        $paidAt = !empty($data['paid_at']) ? date('Y-m-d H:i:s', strtotime((string)$data['paid_at'])) : (!empty($data['date']) ? date('Y-m-d H:i:s', strtotime((string)$data['date'])) : date('Y-m-d H:i:s'));
        $beneficiary = trim((string)($data['beneficiary'] ?? ''));
        $receiptRef = trim((string)($data['receipt_ref'] ?? '')) ?: null;
        $note = trim((string)($data['note'] ?? $data['notes'] ?? ''));
        $receiptImage = $data['receipt_image'] ?? null;
        if (!empty($receiptImage)) {
            try {
                $receiptImage = self::validateReceiptImage((string)$receiptImage);
            } catch (\InvalidArgumentException $e) {
                Response::json(['error' => $e->getMessage()], 422);
                return;
            }
        }
        $receiptName = $data['receipt_image_name'] ?? null;
        $splitPayers = (!empty($data['split_payers']) && is_array($data['split_payers'])) ? $data['split_payers'] : null;

        if ($splitPayers && count($splitPayers) > 0) {
            $totalSplitAlloc = '0';
            foreach ($splitPayers as $sp) {
                $spAmtRaw = trim((string)($sp['amount'] ?? '0'));
                $spAmt = (is_numeric($spAmtRaw) && Decimal::comp($spAmtRaw, '0') > 0) ? Decimal::truncate($spAmtRaw, 16) : '0';
                $totalSplitAlloc = Decimal::add($totalSplitAlloc, $spAmt);
            }
            if (Decimal::comp($totalSplitAlloc, $amount) > 0) {
                Response::json([
                    'error' => "Total split allocations (" . Decimal::format($totalSplitAlloc, 2) . " DZD) cannot exceed the expense amount (" . Decimal::format($amount, 2) . " DZD)."
                ], 422);
                return;
            }
            if (Decimal::comp($totalSplitAlloc, $amount) < 0) {
                Response::json([
                    'error' => "Total split allocations (" . Decimal::format($totalSplitAlloc, 2) . " DZD) must exactly match the expense amount (" . Decimal::format($amount, 2) . " DZD)."
                ], 422);
                return;
            }
        }

        $uid = Uid::generate('EXP');

        $hasSplits = ($splitPayers && count($splitPayers) > 0);
        $agreementStatus = $hasSplits ? 'pending_acceptance' : 'all_accepted';
        $isLocked = $hasSplits ? 0 : 1; // Single-payer direct disbursements are settled immediately and locked
        $settlementStatus = $hasSplits ? 'none' : 'settled';

        $db->beginTransaction();
        try {
            $stmt = $db->prepare("INSERT INTO operating_expenses 
                (uid, category, amount, description, paid_from, paid_from_type, paid_by_user_id, beneficiary, receipt_ref, receipt_image, receipt_image_name, split_data, note, version, agreement_status, is_locked_for_edit, settlement_status, paid_at, created_by, created_at, updated_at) 
                VALUES (:uid, :cat, :amt, :desc, :pf, :pft, :pbu, :ben, :ref, :img, :img_name, :sd, :note, 1, :agr, :lck, :ss, :pa, :cb, NOW(), NOW())");
            $stmt->execute([
                'uid'      => $uid,
                'cat'      => $category,
                'amt'      => $amount,
                'desc'     => $description,
                'pf'       => $paidFrom,
                'pft'      => $paidFrom,
                'pbu'      => $paidBy,
                'ben'      => $beneficiary ?: null,
                'ref'      => $receiptRef,
                'img'      => $receiptImage,
                'img_name' => $receiptName,
                'sd'       => $splitPayers ? json_encode($splitPayers) : null,
                'note'     => $note ?: null,
                'agr'      => $agreementStatus,
                'lck'      => $isLocked,
                'ss'       => $settlementStatus,
                'pa'       => $paidAt,
                'cb'       => $_SESSION['user_id'] ?? null
            ]);
            $expenseId = (int)$db->lastInsertId();

            if ($splitPayers && count($splitPayers) > 0) {
                // Multi-Payer Split Handling: Issue statement tickets for ALL participants
                $sessionUser = (int)($_SESSION['user_id'] ?? 1);
                foreach ($splitPayers as $payer) {
                    $pUid = (int)($payer['user_id'] ?? $sessionUser);
                    $pAmtRaw = trim((string)($payer['amount'] ?? '0'));
                    $pAmt = (is_numeric($pAmtRaw) && Decimal::comp($pAmtRaw, '0') > 0) ? Decimal::truncate($pAmtRaw, 16) : '0';
                    $pFrom = in_array($payer['paid_from'] ?? 'vault', ['vault', 'hand'], true) ? $payer['paid_from'] : 'vault';
                    if (Decimal::comp($pAmt, '0') <= 0) continue;

                    // The creator auto-accepts their own share if they allocated one to themselves
                    $isCreatorOwnShare = ($pUid === $sessionUser);
                    $acceptanceStatus = $isCreatorOwnShare ? 'accepted' : 'pending';
                    $settleDesc = "Expense Share: {$description} ({$category})";

                    // Direct expense split ticket: each partner contributes towards the store expense
                    // payee_user_id is set to $pUid (self-ticket representing partner's liability towards the expense)
                    $settleUid = 'SET-EXP-' . date('Ymd') . '-' . strtoupper(substr(uniqid(), -6));
                    $sIns = $db->prepare("INSERT INTO partner_settlements 
                        (uid, payer_user_id, payee_user_id, amount, original_amount, settlement_type, status, acceptance_status, release_status, target_source, related_entity_type, related_entity_id, description, details, created_by, created_at)
                        VALUES (:uid, :payer, :payee, :amt, :amt, 'expense_split', 'pending', :agr, 'released', :src, 'operating_expense', :eid, :desc, :det, :cb, NOW())");
                    $cleanShare = rtrim(rtrim((string)$pAmt, '0'), '.');
                    if (strpos($cleanShare, '.') === false) $cleanShare .= '.00';
                    $cleanTotal = rtrim(rtrim((string)$amount, '0'), '.');
                    if (strpos($cleanTotal, '.') === false) $cleanTotal .= '.00';

                    $sIns->execute([
                        'uid'   => $settleUid,
                        'payer' => $pUid,
                        'payee' => $pUid,
                        'amt'   => $pAmt,
                        'agr'   => $acceptanceStatus,
                        'src'   => $pFrom,
                        'eid'   => $expenseId,
                        'desc'  => $settleDesc,
                        'det'   => json_encode([
                            'expense_id' => $expenseId,
                            'category'   => $category,
                            'total'      => $cleanTotal,
                            'share'      => $cleanShare,
                            'paid_from'  => $pFrom
                        ]),
                        'cb'    => $sessionUser
                    ]);
                    $settlementId = (int)$db->lastInsertId();

                    // Debtor partners receive prompt notification (Creator NEVER receives notifications for what they created)
                    $sessionUser = (int)($_SESSION['user_id'] ?? 1);
                    if ($pUid !== $sessionUser) {
                        $sourceLabel = ($pFrom === 'vault') ? 'Safe (Vault)' : 'Hand (Direct Cash)';
                        $notifTitle = "New Expense Share: '{$description}'";
                        $notifBody  = "You have a new expense share: " . number_format((float)$pAmt, 2) . " DZD from {$sourceLabel} for '{$description}' ({$category}). Please review and accept/refuse.";
                        $db->prepare("INSERT INTO notifications 
                            (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at)
                            VALUES (:uid, 'due_payable', :t, :b, '#page-bills?tab=settlements', 'partner_settlement', :eid, :stage, 0, NOW())")
                           ->execute([
                            'uid'   => $pUid,
                            't'     => $notifTitle,
                            'b'     => $notifBody,
                            'eid'   => $settlementId,
                            'stage' => "exp_demand_{$settlementId}"
                        ]);
                    }
                }
            } else {
                // Single Payer: Deduct physical safe only if paid_from === 'vault'
                if ($paidFrom === 'vault') {
                    // Pass allowOverdraft = true so low safe balance does not fail or silently skip the deduction
                    CashVaultController::logFlow($db, 'operating_expense', 'out', $amount, 'operating_expenses', $expenseId, "OPEX: {$description} ({$category})", $paidBy, true);
                }
            }

            // Log history
            $hist = $db->prepare("INSERT INTO expense_history (expense_id, edited_by, action, changes, created_at) VALUES (:eid, :by, 'created', :ch, NOW())");
            $hist->execute([
                'eid' => $expenseId,
                'by'  => $_SESSION['user_id'] ?? 1,
                'ch'  => json_encode([
                    'uid'          => $uid,
                    'category'     => $category,
                    'amount'       => $amount,
                    'description'  => $description,
                    'paid_from'    => $paidFrom,
                    'split_payers' => $splitPayers
                ])
            ]);

            $db->commit();

            $creatorUserId = (int)($_SESSION['user_id'] ?? 1);
            $enrichedSplitPayers = !empty($splitPayers) ? array_map(function($sp) use ($db, $amount) {
                $uid = (int)($sp['user_id'] ?? 0);
                $uStmt = $db->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
                $uStmt->execute(['id' => $uid]);
                $uname = $uStmt->fetchColumn() ?: "User #{$uid}";
                $src = (($sp['paid_from'] ?? 'vault') === 'vault') ? 'Cash Safe' : 'Hand (Pocket)';
                $sAmt = (string)($sp['amount'] ?? '0');
                $pct = !empty($sp['percent']) ? $sp['percent'] : ((Decimal::comp($amount, '0') > 0) ? Decimal::truncate(Decimal::mul(Decimal::div($sAmt, $amount, 6), '100', 4), 2) : '0.00');
                return "{$uname}: " . Decimal::format($sAmt, 2) . " DZD ({$pct}%) from {$src}";
            }, $splitPayers) : null;

            $uStmt = $db->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
            $uStmt->execute(['id' => (int)$paidBy]);
            $paidByName = $uStmt->fetchColumn() ?: "User #{$paidBy}";

            SystemLog::write('operating_expenses', 'created', $expenseId, $description, json_encode([
                'uid'          => $uid,
                'category'     => $category,
                'amount'       => Decimal::format($amount, 2) . ' DZD',
                'paid_from'    => $paidFrom,
                'paid_at'      => $paidAt,
                'beneficiary'  => $beneficiary ?: null,
                'receipt_ref'  => $receiptRef,
                'has_receipt'  => !empty($receiptImage),
                'note'         => $note ?: null,
                'paid_by'      => $paidByName,
                'split_payers' => $enrichedSplitPayers
            ]), $creatorUserId);

            Response::json(['ok' => true, 'id' => $expenseId, 'uid' => $uid], 201);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                try { $db->rollBack(); } catch (\Throwable $t) {
                    error_log("Suppressed exception in " . __METHOD__ . ": " . $t->getMessage());
                }
            }
            error_log("SEC-40 Defensive exception in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to save expense due to a system error'], 500);
        }
    }

    /** PUT /api/expenses/{id} - Update an operating expense */
    public function updateExpense(string $id, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $stmt = $db->prepare("SELECT * FROM operating_expenses WHERE id = :id FOR UPDATE");
        $stmt->execute(['id' => (int)$id]);
        $oldExpense = $stmt->fetch();
        if (!$oldExpense) {
            Response::json(['error' => 'Expense not found'], 404);
            return;
        }
        if (!empty($oldExpense['deleted_at'])) {
            Response::json(['error' => 'Deleted expenses cannot be edited.'], 400);
            return;
        }

        // ─── PAYMENT / COMPLETED PHASE EDIT LOCK GUARD ─────────────────────────
        $rawSplits = json_decode($oldExpense['split_data'] ?? '[]', true);
        $hasSplits = is_array($rawSplits) && count($rawSplits) > 0;
        $isExpenseLocked = (!empty($oldExpense['is_locked_for_edit']) || ($oldExpense['agreement_status'] ?? '') === 'all_accepted' || ($oldExpense['settlement_status'] ?? '') === 'settled');
        if ($isExpenseLocked) {
            Response::json([
                'error'  => 'Expense is locked from editing because partner consensus has already been achieved or it is already completed.',
                'locked' => true,
                'phase'  => ($oldExpense['settlement_status'] ?? '') === 'settled' ? 'settled' : 'all_accepted'
            ], 422);
            return;
        }

        $description = trim((string)($data['description'] ?? $data['title'] ?? $oldExpense['description']));
        if ($description === '') {
            Response::json(['error' => 'Expense description or title is required'], 400);
            return;
        }

        $category = trim((string)($data['category'] ?? $oldExpense['category']));
        if ($category === '') $category = 'General';

        $amountRaw = trim((string)($data['amount'] ?? $oldExpense['amount']));
        if (!is_numeric($amountRaw) || Decimal::comp($amountRaw, '0') <= 0) {
            Response::json(['error' => 'Expense amount must be greater than zero'], 400);
            return;
        }
        $amount = Decimal::truncate($amountRaw, 16);

        $rawPaidFrom = $data['paid_from'] ?? ($data['paid_from_type'] ?? $oldExpense['paid_from']);
        $paidFrom = in_array($rawPaidFrom, ['vault', 'hand', 'cashier', 'partner_pocket', 'bank'], true) ? $rawPaidFrom : 'vault';
        $paidBy = !empty($data['paid_by_user_id']) ? (int)$data['paid_by_user_id'] : (int)$oldExpense['paid_by_user_id'];
        $paidAt = !empty($data['paid_at']) ? date('Y-m-d H:i:s', strtotime((string)$data['paid_at'])) : (!empty($data['date']) ? date('Y-m-d H:i:s', strtotime((string)$data['date'])) : $oldExpense['paid_at']);
        $beneficiary = isset($data['beneficiary']) ? trim((string)$data['beneficiary']) : $oldExpense['beneficiary'];
        $receiptRef = isset($data['receipt_ref']) ? (trim((string)$data['receipt_ref']) ?: null) : ($oldExpense['receipt_ref'] ?? null);
        $note = isset($data['note']) ? trim((string)$data['note']) : (isset($data['notes']) ? trim((string)$data['notes']) : $oldExpense['note']);
        if (!empty($oldExpense['has_refusal'])) {
            $refuser = !empty($oldExpense['refused_by']) ? ($db->query("SELECT username FROM users WHERE id = " . (int)$oldExpense['refused_by'])->fetchColumn() ?: "User #{$oldExpense['refused_by']}") : 'A partner';
            $refReason = !empty($oldExpense['refusal_reason']) ? trim((string)$oldExpense['refusal_reason']) : 'No reason provided';
            $nextVer = ((int)($oldExpense['version'] ?? 1)) + 1;
            $refusalAudit = "[v{$nextVer} Revised: Addressed refusal by {$refuser} ('{$refReason}')]";
            $note = $note ? ($note . "\n" . $refusalAudit) : $refusalAudit;
        }
        if (!empty($data['clear_receipt_image']) || !empty($data['remove_receipt_image'])) {
            $receiptImage = null;
            $receiptName = null;
        } else {
            $receiptImage = array_key_exists('receipt_image', $data) ? $data['receipt_image'] : ($oldExpense['receipt_image'] ?? null);
            $receiptName = array_key_exists('receipt_image_name', $data) ? $data['receipt_image_name'] : ($oldExpense['receipt_image_name'] ?? null);
            if (!empty($receiptImage) && array_key_exists('receipt_image', $data)) {
                try {
                    $receiptImage = self::validateReceiptImage((string)$receiptImage);
                } catch (\InvalidArgumentException $e) {
                    Response::json(['error' => $e->getMessage()], 422);
                    return;
                }
            }
        }

        $splitPayers = (isset($data['split_payers']) && is_array($data['split_payers'])) ? $data['split_payers'] : null;
        if ($splitPayers === null && !empty($oldExpense['split_data'])) {
            $decoded = is_array($oldExpense['split_data']) ? $oldExpense['split_data'] : json_decode((string)$oldExpense['split_data'], true);
            if (is_array($decoded) && count($decoded) > 0) {
                $splitPayers = $decoded;
            }
        }

        if ($splitPayers && count($splitPayers) > 0) {
            $totalSplitAlloc = '0';
            foreach ($splitPayers as $sp) {
                $spAmtRaw = trim((string)($sp['amount'] ?? '0'));
                $spAmt = (is_numeric($spAmtRaw) && Decimal::comp($spAmtRaw, '0') > 0) ? Decimal::truncate($spAmtRaw, 16) : '0';
                $totalSplitAlloc = Decimal::add($totalSplitAlloc, $spAmt);
            }
            if (Decimal::comp($totalSplitAlloc, $amount) > 0) {
                Response::json([
                    'error' => "Total split allocations (" . Decimal::format($totalSplitAlloc, 2) . " DZD) cannot exceed the expense amount (" . Decimal::format($amount, 2) . " DZD)."
                ], 422);
                return;
            }
            if (Decimal::comp($totalSplitAlloc, $amount) < 0) {
                Response::json([
                    'error' => "Total split allocations (" . Decimal::format($totalSplitAlloc, 2) . " DZD) must exactly match the expense amount (" . Decimal::format($amount, 2) . " DZD)."
                ], 422);
                return;
            }
        }

        $sessionUser = (int)($_SESSION['user_id'] ?? 1);
        $uStmt = $db->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
        $uStmt->execute(['id' => $sessionUser]);
        $editorUsername = $uStmt->fetchColumn() ?: 'Staff';
        $newVersion = ((int)($oldExpense['version'] ?? 1)) + 1;

        $db->beginTransaction();
        try {
            // 1. Snapshot previous revision (strip large base64 image from snapshot to prevent memory bloat)
            $exSettles = $db->prepare("SELECT id FROM partner_settlements WHERE related_entity_type = 'operating_expense' AND related_entity_id = :eid AND status IN ('pending', 'refused', 'disputed')");
            $exSettles->execute(['eid' => (int)$id]);
            $settleIds = $exSettles->fetchAll(PDO::FETCH_COLUMN);

            $snapOld = $oldExpense;
            if (isset($snapOld['receipt_image'])) {
                $snapOld['has_receipt_image'] = !empty($snapOld['receipt_image']);
                unset($snapOld['receipt_image']);
            }

            $revIns = $db->prepare("INSERT INTO operating_expense_revisions (expense_id, version, snapshot, settlement_ids, created_by, created_at)
                VALUES (:eid, :ver, :snap, :sids, :cb, NOW())");
            $revIns->execute([
                'eid'   => (int)$id,
                'ver'   => (int)($oldExpense['version'] ?? 1),
                'snap'  => json_encode($snapOld),
                'sids'  => json_encode($settleIds ?: []),
                'cb'    => $sessionUser
            ]);

            // 2. Adjust Safe Outflow difference for Single-Payer expenses
            $isRestoredWakeup = (($oldExpense['agreement_status'] ?? '') === 'restored_draft' || ($oldExpense['settlement_status'] ?? '') === 'draft');
            if ((!$splitPayers || count($splitPayers) === 0) && empty($oldExpense['split_data'])) {
                // For a restored draft waking up to active, the previous committed amount in the safe is '0'
                // because all funds were refunded upon soft-delete and zero was re-deducted upon restore.
                $oldLeadVaultAmt = $isRestoredWakeup ? '0' : (($oldExpense['paid_from'] === 'vault') ? (string)$oldExpense['amount'] : '0');
                $newLeadVaultAmt = ($paidFrom === 'vault') ? (string)$amount : '0';
                $vaultDiff = Decimal::sub($newLeadVaultAmt, $oldLeadVaultAmt);
                if (Decimal::comp($vaultDiff, '0') > 0) {
                    $vault = CashVaultController::getSafeForUser($db, $paidBy);
                    $vStmt = $db->prepare("SELECT current_balance, name FROM cash_vaults WHERE id = :id LIMIT 1");
                    $vStmt->execute(['id' => (int)$vault['id']]);
                    $freshVault = $vStmt->fetch();
                    $curBal = $freshVault ? (string)$freshVault['current_balance'] : (string)($vault['current_balance'] ?? '0');
                    $safeName = $freshVault ? ($freshVault['name'] ?: 'Cash Safe') : ($vault['name'] ?: 'Cash Safe');

                    if (Decimal::comp($curBal, $vaultDiff) < 0) {
                        $db->rollBack();
                        Response::json([
                            'error' => "Cannot activate expense: Insufficient funds in {$safeName}. Available: " . Decimal::format($curBal, 2) . " DZD, Required: " . Decimal::format($vaultDiff, 2) . " DZD.",
                            'available' => $curBal,
                            'required'  => $vaultDiff
                        ], 422);
                        return;
                    }

                    $actionDesc = $isRestoredWakeup ? "OPEX (Restored Expense Activation): {$description} (v{$newVersion})" : "OPEX (Update Diff Out): {$description} (v{$newVersion})";
                    CashVaultController::logFlow($db, 'operating_expense', 'out', $vaultDiff, 'operating_expenses', (int)$id, $actionDesc, $paidBy);
                } elseif (Decimal::comp($vaultDiff, '0') < 0) {
                    $refundAmt = Decimal::mul($vaultDiff, '-1');
                    CashVaultController::logFlow($db, 'adjustment', 'in', $refundAmt, 'operating_expenses', (int)$id, "OPEX (Update Diff Refund): {$description} (v{$newVersion})", $paidBy);
                }
            }

            // 3. Update expense row
            $hasSplits = ($splitPayers && count($splitPayers) > 0);
            $agreementStatus = $hasSplits ? 'pending_acceptance' : 'all_accepted';
            $isLocked = $hasSplits ? 0 : 1;
            $settlementStatus = $hasSplits ? 'none' : 'settled';

            $db->prepare("UPDATE operating_expenses 
                SET category = :cat, amount = :amt, description = :desc, paid_from = :pf, paid_from_type = :pft,
                    paid_by_user_id = :pbu, beneficiary = :ben, receipt_ref = :ref, receipt_image = :img, receipt_image_name = :img_name,
                    split_data = :sd, note = :note, paid_at = :pa, version = :ver, agreement_status = :agr, is_locked_for_edit = :lck,
                    settlement_status = :ss, has_refusal = 0, refused_at = NULL, refused_by = NULL, refusal_reason = NULL,
                    last_edited_by = :leb, last_edited_by_name = :lebn, updated_at = NOW()
                WHERE id = :id")
               ->execute([
                'cat'      => $category,
                'amt'      => $amount,
                'desc'     => $description,
                'pf'       => $paidFrom,
                'pft'      => $paidFrom,
                'pbu'      => $paidBy,
                'ben'      => $beneficiary ?: null,
                'ref'      => $receiptRef,
                'img'      => $receiptImage,
                'img_name' => $receiptName,
                'sd'       => $splitPayers ? json_encode($splitPayers) : null,
                'note'     => $note ?: null,
                'pa'       => $paidAt,
                'ver'      => $newVersion,
                'agr'      => $agreementStatus,
                'lck'      => $isLocked,
                'ss'       => $settlementStatus,
                'leb'      => $sessionUser,
                'lebn'     => $editorUsername,
                'id'       => (int)$id
            ]);

            // 4. Cancel superseded partner settlements
            $db->prepare("UPDATE partner_settlements 
                SET status = 'cancelled', cancelled_at = NOW(), cancelled_by = :cb, cancel_reason = :cr 
                WHERE related_entity_type = 'operating_expense' AND related_entity_id = :eid AND status IN ('pending', 'refused', 'disputed')")
               ->execute(['cb' => $sessionUser, 'cr' => "Superseded by expense revision (v{$newVersion})", 'eid' => (int)$id]);

            // 5. Re-issue split tickets for ALL participants
            if ($splitPayers && count($splitPayers) > 0) {
                foreach ($splitPayers as $payer) {
                    $pUid = (int)($payer['user_id'] ?? $sessionUser);
                    $pAmtRaw = trim((string)($payer['amount'] ?? '0'));
                    $pAmt = (is_numeric($pAmtRaw) && Decimal::comp($pAmtRaw, '0') > 0) ? Decimal::truncate($pAmtRaw, 16) : '0';
                    $pFrom = in_array($payer['paid_from'] ?? 'vault', ['vault', 'hand'], true) ? $payer['paid_from'] : 'vault';
                    if (Decimal::comp($pAmt, '0') <= 0) continue;

                    // The editor auto-accepts their own share if they have an allocation
                    $isCreatorOwnShare = ($pUid === $sessionUser);
                    $acceptanceStatus = $isCreatorOwnShare ? 'accepted' : 'pending';
                    $settleDesc = "Updated Expense Share (v{$newVersion}): {$description} ({$category})";

                    // Direct expense split ticket: each partner contributes towards the store expense
                    // payee_user_id is set to $pUid (self-ticket representing partner's liability towards the expense)
                    $settleUid = 'SET-EXP-' . date('Ymd') . '-' . strtoupper(substr(uniqid(), -6));
                    $sIns = $db->prepare("INSERT INTO partner_settlements 
                        (uid, payer_user_id, payee_user_id, amount, original_amount, settlement_type, status, acceptance_status, release_status, target_source, related_entity_type, related_entity_id, description, details, created_by, created_at)
                        VALUES (:uid, :payer, :payee, :amt, :amt, 'expense_split', 'pending', :agr, 'released', :src, 'operating_expense', :eid, :desc, :det, :cb, NOW())");
                    $sIns->execute([
                        'uid'   => $settleUid,
                        'payer' => $pUid,
                        'payee' => $pUid,
                        'amt'   => $pAmt,
                        'agr'   => $acceptanceStatus,
                        'src'   => $pFrom,
                        'eid'   => (int)$id,
                        'desc'  => $settleDesc,
                        'det'   => json_encode([
                            'expense_id' => (int)$id,
                            'category'   => $category,
                            'total'      => $amount,
                            'share'      => $pAmt,
                            'paid_from'  => $pFrom
                        ]),
                        'cb'    => $sessionUser
                    ]);
                    $settlementId = (int)$db->lastInsertId();

                    // Debtor partners receive notification
                    if ($pUid !== $sessionUser) {
                        $sourceLabel = ($pFrom === 'vault') ? 'Safe (Vault)' : 'Hand (Direct Cash)';
                        $notifTitle = $isRestoredWakeup ? "Restored Expense Share: '{$description}'" : "Updated Expense Share: '{$description}'";
                        $notifBody  = $isRestoredWakeup
                            ? "Expense '{$description}' was restored and activated by {$editorUsername}. Please review and accept your share: " . number_format((float)$pAmt, 2) . " DZD from {$sourceLabel}."
                            : "Expense '{$description}' was updated by {$editorUsername} (v{$newVersion}). Please review and accept your updated share: " . number_format((float)$pAmt, 2) . " DZD from {$sourceLabel}.";
                        $db->prepare("INSERT INTO notifications 
                            (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at)
                            VALUES (:uid, 'due_payable', :t, :b, '#page-bills?tab=settlements', 'partner_settlement', :eid, :stage, 0, NOW())")
                           ->execute([
                            'uid'   => $pUid,
                            't'     => $notifTitle,
                            'b'     => $notifBody,
                            'eid'   => $settlementId,
                            'stage' => "exp_rev_{$newVersion}_{$id}"
                        ]);
                    }
                }
            }

            // 6. Log history (strip raw base64 image data to prevent history bloat)
            $histOld = $oldExpense;
            unset($histOld['receipt_image']);
            $histNew = $data;
            unset($histNew['receipt_image']);

            $hist = $db->prepare("INSERT INTO expense_history 
                (expense_id, edited_by, action, changes, old_values, new_values, reason, note, created_at) 
                VALUES (:eid, :by, 'updated', :ch, :ov, :nv, :r, :note, NOW())");
            $hist->execute([
                'eid'  => (int)$id,
                'by'   => $sessionUser,
                'ch'   => json_encode(['version' => $newVersion, 'amount' => $amount, 'description' => $description]),
                'ov'   => json_encode($histOld),
                'nv'   => json_encode($histNew),
                'r'    => "Expense revised & re-submitted (v{$newVersion})",
                'note' => $note ?: null
            ]);

            $db->commit();

            $diffFields = [];
            if ($description !== ($oldExpense['description'] ?? '')) {
                $oldVal = $oldExpense['description'] ?? '';
                $diffFields['description'] = ['from' => $oldVal, 'to' => $description, 'old' => $oldVal, 'new' => $description];
            }
            if ($category !== ($oldExpense['category'] ?? '')) {
                $oldVal = $oldExpense['category'] ?? '';
                $diffFields['category'] = ['from' => $oldVal, 'to' => $category, 'old' => $oldVal, 'new' => $category];
            }
            if (Decimal::comp($amount, (string)($oldExpense['amount'] ?? '0')) !== 0) {
                $oldVal = (string)($oldExpense['amount'] ?? '0');
                $diffFields['amount'] = ['from' => $oldVal, 'to' => $amount, 'old' => $oldVal, 'new' => $amount];
            }
            if ($paidFrom !== ($oldExpense['paid_from'] ?? '')) {
                $oldVal = $oldExpense['paid_from'] ?? '';
                $diffFields['paid_from'] = ['from' => $oldVal, 'to' => $paidFrom, 'old' => $oldVal, 'new' => $paidFrom];
            }
            if ($paidBy !== (int)($oldExpense['paid_by_user_id'] ?? 0)) {
                $oldVal = (int)($oldExpense['paid_by_user_id'] ?? 0);
                $diffFields['paid_by_user_id'] = ['from' => $oldVal, 'to' => $paidBy, 'old' => $oldVal, 'new' => $paidBy];
            }
            if ($beneficiary !== ($oldExpense['beneficiary'] ?? '')) {
                $oldVal = $oldExpense['beneficiary'] ?? '';
                $diffFields['beneficiary'] = ['from' => $oldVal, 'to' => $beneficiary, 'old' => $oldVal, 'new' => $beneficiary];
            }
            if ($receiptRef !== ($oldExpense['receipt_ref'] ?? null)) {
                $oldVal = $oldExpense['receipt_ref'] ?? null;
                $diffFields['receipt_ref'] = ['from' => $oldVal, 'to' => $receiptRef, 'old' => $oldVal, 'new' => $receiptRef];
            }
            if ($paidAt !== ($oldExpense['paid_at'] ?? '')) {
                $oldVal = $oldExpense['paid_at'] ?? '';
                $diffFields['paid_at'] = ['from' => $oldVal, 'to' => $paidAt, 'old' => $oldVal, 'new' => $paidAt];
            }
            if ($receiptName !== ($oldExpense['receipt_image_name'] ?? null)) {
                $oldImgName = $oldExpense['receipt_image_name'] ?? null;
                $diffFields['receipt_attachment'] = [
                    'from' => $oldImgName ?: '(empty)',
                    'to'   => $receiptName ?: '(removed)',
                    'old'  => $oldImgName ?: '(empty)',
                    'new'  => $receiptName ?: '(removed)'
                ];
            }

            SystemLog::write('operating_expenses', 'updated', (int)$id, $description, json_encode([
                'uid'              => $oldExpense['uid'] ?? null,
                'version'          => ['from' => (int)($oldExpense['version'] ?? 1), 'to' => $newVersion],
                'amount'           => Decimal::format($amount, 2) . ' DZD',
                'category'         => $category,
                'paid_from'        => $paidFrom,
                'edited_by'        => $editorUsername,
                'vault_adjustment' => (isset($vaultDiff) && Decimal::comp($vaultDiff, '0') !== 0) ? Decimal::format($vaultDiff, 2) . ' DZD' : null,
                'diff_fields'      => $diffFields
            ]), $sessionUser);

            Response::json(['ok' => true, 'id' => (int)$id, 'version' => $newVersion]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                try { $db->rollBack(); } catch (\Throwable $t) {
                    error_log("Suppressed exception in " . __METHOD__ . ": " . $t->getMessage());
                }
            }
            error_log("SEC-40 Defensive exception in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to update expense due to a system error'], 500);
        }
    }

    /** GET /api/expenses/{id}/details - Full details and settlements for an expense */
    public function getExpenseDetails(string $id): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $stmt = $db->prepare("SELECT oe.*, 
                u.username as paid_by_name, 
                cb.username as created_by_name,
                del_u.username as deleted_by_name
            FROM operating_expenses oe 
            LEFT JOIN users u ON oe.paid_by_user_id = u.id 
            LEFT JOIN users cb ON oe.created_by = cb.id 
            LEFT JOIN users del_u ON oe.deleted_by = del_u.id 
            WHERE oe.id = :id");
        $stmt->execute(['id' => (int)$id]);
        $expense = $stmt->fetch();
        if (!$expense) {
            Response::json(['error' => 'Expense not found'], 404);
            return;
        }

        // Settlements
        $sStmt = $db->prepare("SELECT ps.*, pu.username as payer_name, py.username as payee_name 
            FROM partner_settlements ps 
            LEFT JOIN users pu ON ps.payer_user_id = pu.id 
            LEFT JOIN users py ON ps.payee_user_id = py.id 
            WHERE ps.related_entity_type = 'operating_expense' AND ps.related_entity_id = :eid 
            ORDER BY ps.id ASC");
        $sStmt->execute(['eid' => (int)$id]);
        $settlements = $sStmt->fetchAll();

        // History
        $hStmt = $db->prepare("SELECT eh.*, u.username as edited_by_name 
            FROM expense_history eh 
            LEFT JOIN users u ON eh.edited_by = u.id 
            WHERE eh.expense_id = :eid 
            ORDER BY eh.id DESC");
        $hStmt->execute(['eid' => (int)$id]);
        $history = $hStmt->fetchAll();

        // System activity logs for this expense
        $logStmt = $db->prepare("SELECT sl.*, u.username as actor_name 
            FROM system_logs sl 
            LEFT JOIN users u ON sl.user_id = u.id 
            WHERE sl.module IN ('expenses', 'operating_expenses') AND sl.entity_id = :eid 
            ORDER BY sl.created_at DESC, sl.id DESC LIMIT 50");
        $logStmt->execute(['eid' => (int)$id]);
        $systemLogs = $logStmt->fetchAll();

        Response::json([
            'ok'          => true,
            'expense'     => $expense,
            'settlements' => $settlements,
            'history'     => $history,
            'system_logs' => $systemLogs
        ]);
    }

    /** GET /api/expenses/{id}/voucher - Rich voucher data for printing */
    public function getExpenseVoucher(string $id): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $stmt = $db->prepare("SELECT oe.*, 
                u.username as paid_by_name, 
                cb.username as created_by_name,
                del_u.username as deleted_by_name
            FROM operating_expenses oe 
            LEFT JOIN users u ON oe.paid_by_user_id = u.id 
            LEFT JOIN users cb ON oe.created_by = cb.id 
            LEFT JOIN users del_u ON oe.deleted_by = del_u.id 
            WHERE oe.id = :id");
        $stmt->execute(['id' => (int)$id]);
        $expense = $stmt->fetch();
        if (!$expense) {
            Response::json(['error' => 'Expense not found'], 404);
            return;
        }

        if (empty($expense['date'])) {
            $expense['date'] = $expense['paid_at'] ?? ($expense['created_at'] ?? date('Y-m-d H:i:s'));
        }

        $sStmt = $db->prepare("SELECT ps.*, pu.username as payer_name, py.username as payee_name 
            FROM partner_settlements ps 
            LEFT JOIN users pu ON ps.payer_user_id = pu.id 
            LEFT JOIN users py ON ps.payee_user_id = py.id 
            WHERE ps.related_entity_type = 'operating_expense' AND ps.related_entity_id = :eid AND ps.status != 'cancelled'
            ORDER BY ps.id ASC");
        $sStmt->execute(['eid' => (int)$id]);
        $settlements = $sStmt->fetchAll();

        // Store settings
        $store = [
            'name'         => '',
            'description'  => '',
            'address'      => '',
            'phone'        => '',
            'logo'         => '',
            'social_media' => '[]',
            'website_link' => '',
            'currency'     => 'DZD'
        ];
        try {
            $settingsStmt = $db->query("SELECT * FROM settings LIMIT 1");
            if ($row = $settingsStmt->fetch()) {
                $store['name'] = !empty($row['business_name']) ? $row['business_name'] : (!empty($row['app_name']) ? $row['app_name'] : 'Sizar POS Pro');
                $store['description'] = $row['description'] ?? '';
                $city = !empty($row['business_city']) ? ', ' . $row['business_city'] : '';
                $store['address'] = trim(($row['business_address'] ?? '') . $city, ', ');
                $store['phone'] = $row['business_phone'] ?? '';
                $shape = $row['logo_active_shape'] ?? 'square';
                if (($shape === 'rect' || $shape === 'rectangular') && !empty($row['business_logo_rect'])) {
                    $store['logo'] = $row['business_logo_rect'];
                } elseif ($shape === 'circle' && !empty($row['business_logo_circle'])) {
                    $store['logo'] = $row['business_logo_circle'];
                } else {
                    $store['logo'] = $row['business_logo'] ?? '';
                }
                $store['social_media'] = $row['social_media'] ?? '[]';
                $store['website_link'] = $row['website_link'] ?? '';
                $store['currency'] = $row['currency_symbol'] ?? 'DZD';
                $store['footer_text'] = $row['ticket_footer_expenses'] ?? ($row['ticket_footer_text'] ?? '');
            }
        } catch (\Exception $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }

        Response::json([
            'ok'          => true,
            'expense'     => $expense,
            'settlements' => $settlements,
            'store'       => $store
        ]);
    }

    /** DELETE /api/expenses/{id} - Soft delete an operating expense */
    public function destroyExpense(string $id, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $reason = trim((string)($data['delete_reason'] ?? $data['reason'] ?? ''));
        if ($reason === '') {
            Response::json(['error' => 'Deletion reason is required'], 400);
            return;
        }

        $db->beginTransaction();
        try {
            $stmt = $db->prepare("SELECT * FROM operating_expenses WHERE id = :id FOR UPDATE");
            $stmt->execute(['id' => $id]);
            $expense = $stmt->fetch();
            if (!$expense) {
                if ($db->inTransaction()) {
                    try { $db->rollBack(); } catch (\Throwable $t) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $t->getMessage());
        }
                }
                Response::json(['error' => 'Expense not found'], 404);
                return;
            }
            if (!empty($expense['deleted_at'])) {
                if ($db->inTransaction()) {
                    try { $db->rollBack(); } catch (\Throwable $t) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $t->getMessage());
        }
                }
                Response::json(['error' => 'Expense is already deleted'], 400);
                return;
            }

            $db->prepare("UPDATE operating_expenses SET deleted_at = NOW(), deleted_by = :by, delete_reason = :r WHERE id = :id")
               ->execute(['by' => $_SESSION['user_id'] ?? null, 'r' => $reason, 'id' => $id]);

            // 1. If lead payer paid from vault, reverse the cash outflow to lead payer's safe
            // 1. If single-payer paid from vault, reverse the cash outflow to payer's safe
            $refundTargetUser = null;
            $vaultRefundedAmount = '0';
            $cancelledSettlementsCount = 0;
            if (Decimal::comp((string)$expense['amount'], '0') > 0) {
                $splitData = !empty($expense['split_data']) ? (is_array($expense['split_data']) ? $expense['split_data'] : json_decode($expense['split_data'], true)) : null;
                if ($splitData && is_array($splitData) && count($splitData) > 0) {
                    // Split expenses: zero cash was deducted upon creation. Settled shares are reversed individually in Step 2.
                } else {
                    if ($expense['paid_from'] === 'vault') {
                        $refundTargetUser = (int)($expense['paid_by_user_id'] ?: ($_SESSION['user_id'] ?? 1));
                        $vaultRefundedAmount = (string)$expense['amount'];
                        $expUid = !empty($expense['uid']) ? $expense['uid'] : "EXP-{$id}";
                        CashVaultController::logFlow($db, 'adjustment', 'in', (string)$expense['amount'], 'operating_expenses', (int)$id, "Reversal: Deleted expense #{$expUid} ({$expense['description']})", $refundTargetUser);
                    }
                }
            }

            // 2. Reverse any already settled partner split tickets
            $settledStmt = $db->prepare("SELECT * FROM partner_settlements 
                WHERE related_entity_type = 'operating_expense' AND related_entity_id = :eid AND status = 'settled'");
            $settledStmt->execute(['eid' => (int)$id]);
            while ($st = $settledStmt->fetch()) {
                $stAmt = (string)$st['amount'];
                $debtorId = (int)$st['payer_user_id'];
                $payeeId = (int)$st['payee_user_id'];
                $src = $st['settled_source'] ?? $st['target_source'] ?? 'vault';

                if (Decimal::comp($stAmt, '0') > 0 && $src === 'vault') {
                    if ($debtorId === $payeeId) {
                        // Direct operating expense settled share: Refund back to payer's vault
                        CashVaultController::logFlow($db, 'operating_expense', 'in', $stAmt, 'operating_expenses', (int)$id, "Refund: Deleted expense #{$expUid} ({$expense['description']})", $debtorId);
                    } else {
                        // Inter-partner transfer share: Refund back to debtor, clawback from payee
                        CashVaultController::logFlow($db, 'partner_settlement', 'in', $stAmt, 'partner_settlements', (int)$st['id'], "Refund: Deleted expense #{$expUid} ({$expense['description']})", $debtorId);
                        CashVaultController::logFlow($db, 'partner_settlement', 'out', $stAmt, 'partner_settlements', (int)$st['id'], "Clawback: Deleted expense #{$expUid} ({$expense['description']})", $payeeId);
                    }
                }
                $db->prepare("UPDATE partner_settlements SET status = 'cancelled', cancelled_at = NOW(), cancelled_by = :cb, cancel_reason = :cr WHERE id = :sid")
                   ->execute(['cb' => $_SESSION['user_id'] ?? 1, 'cr' => "Expense deleted: {$reason}", 'sid' => (int)$st['id']]);
                $cancelledSettlementsCount++;
            }

            // 3. Cancel any remaining pending/disputed/refused partner_settlements
            $cRemStmt = $db->prepare("UPDATE partner_settlements SET status = 'cancelled', cancelled_at = NOW(), cancelled_by = :cb, cancel_reason = :cr 
                WHERE related_entity_type = 'operating_expense' AND related_entity_id = :eid AND status NOT IN ('cancelled')");
            $cRemStmt->execute(['cb' => $_SESSION['user_id'] ?? 1, 'cr' => "Expense deleted: {$reason}", 'eid' => (int)$id]);
            $cancelledSettlementsCount += $cRemStmt->rowCount();

            // 4. Dismiss notifications
            $db->prepare("UPDATE notifications SET is_read = 1 
                WHERE (entity_type = 'operating_expense' AND entity_id = :eid) 
                   OR (entity_type = 'partner_settlement' AND entity_id IN (SELECT id FROM partner_settlements WHERE related_entity_type = 'operating_expense' AND related_entity_id = :eid2))")
               ->execute(['eid' => (int)$id, 'eid2' => (int)$id]);

            // 5. Log history
            $hist = $db->prepare("INSERT INTO expense_history (expense_id, edited_by, action, reason, created_at) VALUES (:eid, :by, 'deleted', :r, NOW())");
            $hist->execute([
                'eid' => (int)$id,
                'by'  => $_SESSION['user_id'] ?? 1,
                'r'   => $reason
            ]);

            $db->commit();

            $sessionActorId = (int)($_SESSION['user_id'] ?? 1);
            $refundTargetName = null;
            if ($refundTargetUser) {
                $uStmt = $db->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
                $uStmt->execute(['id' => (int)$refundTargetUser]);
                $refundTargetName = $uStmt->fetchColumn() ?: "User #{$refundTargetUser}";
            }
            SystemLog::write('operating_expenses', 'deleted', (int)$id, $expense['description'], json_encode([
                'uid'                         => $expense['uid'],
                'amount'                      => Decimal::format($expense['amount'], 2) . ' DZD',
                'paid_from'                   => $expense['paid_from'] ?? 'vault',
                'vault_refunded'              => (Decimal::comp($vaultRefundedAmount, '0') > 0) ? Decimal::format($vaultRefundedAmount, 2) . ' DZD' : null,
                'refund_target_user'          => $refundTargetName,
                'cancelled_settlements_count' => $cancelledSettlementsCount,
                'reason'                      => $reason
            ]), $sessionActorId);

            Response::json(['ok' => true]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                try { $db->rollBack(); } catch (\Throwable $t) {
                    error_log("Suppressed exception in " . __METHOD__ . ": " . $t->getMessage());
                }
            }
            error_log("SEC-40 Defensive exception in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to delete expense due to a system error'], 500);
        }
    }

    /** POST /api/expenses/bulk-delete - Bulk soft-delete operating expenses with vault refunds */
    public function bulkDestroyExpenses(array $data = []): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $ids = $data['ids'] ?? [];
        if (!is_array($ids) || empty($ids)) {
            Response::json(['error' => 'No expense IDs provided for bulk deletion.'], 422);
            return;
        }

        $reason = trim((string)($data['delete_reason'] ?? $data['reason'] ?? ''));
        if ($reason === '') {
            Response::json(['error' => 'A valid deletion reason is required.'], 422);
            return;
        }
        $deletedCount = 0;

        foreach ($ids as $id) {
            $eId = (int)$id;
            if ($eId <= 0) continue;

            $db->beginTransaction();
            try {
                $stmt = $db->prepare("SELECT * FROM operating_expenses WHERE id = :id AND deleted_at IS NULL FOR UPDATE");
                $stmt->execute(['id' => $eId]);
                $expense = $stmt->fetch();
                if (!$expense) {
                    if ($db->inTransaction()) {
                        try { $db->rollBack(); } catch (\Throwable $t) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $t->getMessage());
        }
                    }
                    continue;
                }
                // 1. Reversal: Refund physical vault if expense was paid from vault
                $refundTargetUser = null;
                $vaultRefundedAmount = '0';
                $cancelledSettlementsCount = 0;
                if (($expense['paid_from'] ?? '') === 'vault') {
                    $splitData = !empty($expense['split_data']) ? (is_array($expense['split_data']) ? $expense['split_data'] : json_decode((string)$expense['split_data'], true)) : null;
                    if ($splitData && is_array($splitData) && count($splitData) > 0) {
                        // Split expenses: zero cash was deducted upon creation. Settled shares are reversed individually in Step 3.
                    } else {
                        $refundTargetUser = (int)($expense['paid_by_user_id'] ?: ($_SESSION['user_id'] ?? 1));
                        $vaultRefundedAmount = (string)$expense['amount'];
                        $bulkExpUid = !empty($expense['uid']) ? $expense['uid'] : "EXP-{$eId}";
                        CashVaultController::logFlow($db, 'adjustment', 'in', (string)$expense['amount'], 'operating_expenses', $eId, "Reversal: Bulk deleted expense #{$bulkExpUid} ({$expense['description']})", $refundTargetUser);
                    }
                }

                // 2. Soft delete expense
                $db->prepare("UPDATE operating_expenses 
                    SET deleted_at = NOW(), deleted_by = :uid, delete_reason = :r, updated_at = NOW() 
                    WHERE id = :id")
                   ->execute(['uid' => $_SESSION['user_id'] ?? 1, 'r' => $reason, 'id' => $eId]);

                // 3. Reverse settled partner split tickets
                $settledStmt = $db->prepare("SELECT * FROM partner_settlements 
                    WHERE related_entity_type = 'operating_expense' AND related_entity_id = :eid AND status = 'settled'");
                $settledStmt->execute(['eid' => $eId]);
                while ($st = $settledStmt->fetch()) {
                    $stAmt = (string)$st['amount'];
                    $debtorId = (int)$st['payer_user_id'];
                    $payeeId = (int)$st['payee_user_id'];
                    $src = $st['settled_source'] ?? $st['target_source'] ?? 'vault';
                    if (Decimal::comp($stAmt, '0') > 0 && $src === 'vault') {
                        if ($debtorId === $payeeId) {
                            CashVaultController::logFlow($db, 'operating_expense', 'in', $stAmt, 'operating_expenses', $eId, "Refund: Bulk deleted expense #{$bulkExpUid} ({$expense['description']})", $debtorId);
                        } else {
                            CashVaultController::logFlow($db, 'partner_settlement', 'in', $stAmt, 'partner_settlements', (int)$st['id'], "Refund: Bulk deleted expense #{$bulkExpUid} ({$expense['description']})", $debtorId);
                            CashVaultController::logFlow($db, 'partner_settlement', 'out', $stAmt, 'partner_settlements', (int)$st['id'], "Clawback: Bulk deleted expense #{$bulkExpUid} ({$expense['description']})", $payeeId);
                        }
                    }
                    $db->prepare("UPDATE partner_settlements SET status = 'cancelled', cancelled_at = NOW(), cancelled_by = :cb, cancel_reason = :cr WHERE id = :sid")
                       ->execute(['cb' => $_SESSION['user_id'] ?? 1, 'cr' => "Bulk expense deleted: {$reason}", 'sid' => (int)$st['id']]);
                    $cancelledSettlementsCount++;
                }

                // 4. Cancel pending partner settlements
                $cBulkStmt = $db->prepare("UPDATE partner_settlements SET status = 'cancelled', cancelled_at = NOW(), cancelled_by = :cb, cancel_reason = :cr 
                    WHERE related_entity_type = 'operating_expense' AND related_entity_id = :eid AND status NOT IN ('cancelled')");
                $cBulkStmt->execute(['cb' => $_SESSION['user_id'] ?? 1, 'cr' => "Bulk expense deleted: {$reason}", 'eid' => $eId]);
                $cancelledSettlementsCount += $cBulkStmt->rowCount();

                // 5. Dismiss notifications
                $db->prepare("UPDATE notifications SET is_read = 1 
                    WHERE (entity_type = 'operating_expense' AND entity_id = :eid) 
                       OR (entity_type = 'partner_settlement' AND entity_id IN (SELECT id FROM partner_settlements WHERE related_entity_type = 'operating_expense' AND related_entity_id = :eid2))")
                   ->execute(['eid' => $eId, 'eid2' => $eId]);

                // 6. Log history
                $hist = $db->prepare("INSERT INTO expense_history (expense_id, edited_by, action, reason, created_at) VALUES (:eid, :by, 'deleted', :r, NOW())");
                $hist->execute([
                    'eid' => $eId,
                    'by'  => $_SESSION['user_id'] ?? 1,
                    'r'   => $reason
                ]);

                $db->commit();

                $bulkActorId = (int)($_SESSION['user_id'] ?? 1);
                $refundTargetName = null;
                if ($refundTargetUser) {
                    $uStmt = $db->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
                    $uStmt->execute(['id' => (int)$refundTargetUser]);
                    $refundTargetName = $uStmt->fetchColumn() ?: "User #{$refundTargetUser}";
                }
                SystemLog::write('operating_expenses', 'deleted', $eId, $expense['description'], json_encode([
                    'uid'                         => $expense['uid'],
                    'amount'                      => Decimal::format($expense['amount'], 2) . ' DZD',
                    'paid_from'                   => $expense['paid_from'] ?? 'vault',
                    'vault_refunded'              => (Decimal::comp($vaultRefundedAmount, '0') > 0) ? Decimal::format($vaultRefundedAmount, 2) . ' DZD' : null,
                    'refund_target_user'          => $refundTargetName,
                    'cancelled_settlements_count' => $cancelledSettlementsCount,
                    'reason'                      => $reason,
                    'bulk'                        => true
                ]), $bulkActorId);

                $deletedCount++;
            } catch (\Throwable $ex) {
                if ($db->inTransaction()) {
                    try { $db->rollBack(); } catch (\Throwable $t) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $t->getMessage());
        }
                }
            }
        }

        Response::json(['ok' => true, 'deleted_count' => $deletedCount]);
    }

    /** POST /api/expenses/{id}/restore - Restore a soft-deleted operating expense with vault balance guard */
    public function restoreExpense(string $id, array $data = []): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $stmt = $db->prepare("SELECT * FROM operating_expenses WHERE id = :id AND deleted_at IS NOT NULL");
        $stmt->execute(['id' => (int)$id]);
        $expense = $stmt->fetch();
        if (!$expense) {
            Response::json(['error' => 'Expense not found or is not deleted'], 404);
            return;
        }

        $reason = trim((string)($data['reason'] ?? $data['restore_reason'] ?? ''));
        if ($reason === '') {
            Response::json(['error' => 'A valid restoration reason is required.'], 422);
            return;
        }

        // Restored expenses are restored strictly as pending draft (restored_draft).
        // Zero money is deducted from cash safe upon restoration. Money stays refunded until explicit Edit -> Update.
        $reDeductAmount = '0';
        $reDeductUser = (int)($expense['paid_by_user_id'] ?: ($_SESSION['user_id'] ?? 1));

        $userId = $_SESSION['user_id'] ?? 1;

        $db->beginTransaction();
        try {
            // 1. Clear deletion flags and set agreement status to restored_draft (pending activation)
            $hasSplits = (!empty($expense['split_data']) && (is_array($expense['split_data']) ? count($expense['split_data']) : strlen((string)$expense['split_data']) > 4));
            $db->prepare("UPDATE operating_expenses 
                SET deleted_at = NULL, deleted_by = NULL, delete_reason = NULL, 
                    agreement_status = 'restored_draft', settlement_status = 'draft', is_locked_for_edit = 0,
                    has_refusal = 0, refused_at = NULL, refused_by = NULL, refusal_reason = NULL,
                    updated_at = NOW(), edited_by = :by 
                WHERE id = :id")
               ->execute([
                   'by'  => $userId,
                   'id'  => (int)$id
               ]);

            // 2. For split expenses, partner settlements remain dormant/pending update
            // This prevents unexpected statements or acceptance notifications being sent to partners upon restore.
            if ($hasSplits) {
                $db->prepare("UPDATE partner_settlements 
                    SET description = CASE 
                            WHEN description LIKE '%(Restored)%' THEN description 
                            ELSE CONCAT('[Restored - Pending Update] ', description) 
                        END
                    WHERE related_entity_type = 'operating_expense' AND related_entity_id = :eid")
                   ->execute(['eid' => (int)$id]);
            }

            // 3. Log to expense_history
            $hist = $db->prepare("INSERT INTO expense_history (expense_id, edited_by, action, reason, created_at) 
                VALUES (:eid, :by, 'restored', :r, NOW())");
            $hist->execute([
                'eid' => (int)$id,
                'by'  => $userId,
                'r'   => $reason
            ]);

            $db->commit();

            $uStmt = $db->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
            $uStmt->execute(['id' => (int)$userId]);
            $restorerName = $uStmt->fetchColumn() ?: "User #{$userId}";
            SystemLog::write('operating_expenses', 'restored', (int)$id, $expense['description'], json_encode([
                'uid'              => $expense['uid'],
                'amount'           => Decimal::format($expense['amount'], 2) . ' DZD',
                'paid_from'        => $expense['paid_from'] ?? 'vault',
                'reason'           => $reason,
                'restored_by'      => $restorerName,
                'status'           => 'restored_draft'
            ]), (int)$userId);

            Response::json(['ok' => true, 'message' => 'Expense restored successfully as pending draft. Edit and update to activate.'], 200);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("SEC-40 Defensive exception in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to restore expense due to a system error'], 500);
        }
    }

    /** GET /api/recurring-bills - List recurring bill templates with live cycle indicators */
    public function indexBills(): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $filter = $_GET['filter'] ?? 'all';
        $showDeleted = ($filter === 'deleted') || 
                       (!empty($_GET['show_deleted']) && in_array(strtolower((string)$_GET['show_deleted']), ['true', '1'], true));

        $where = $showDeleted ? ["1=1"] : ["b.deleted_at IS NULL"];
        if ($filter === 'active') {
            $where[] = "b.is_archived = 0 AND b.is_paused = 0 AND b.active = 1 AND b.deleted_at IS NULL";
        } elseif ($filter === 'paused') {
            $where[] = "b.is_paused = 1 AND b.is_archived = 0 AND b.deleted_at IS NULL";
        } elseif ($filter === 'archived') {
            $where[] = "b.is_archived = 1 AND b.deleted_at IS NULL";
        } elseif ($filter === 'deleted') {
            $where[] = "b.deleted_at IS NOT NULL";
        }

        if (isset($_GET['group_id']) && $_GET['group_id'] !== '') {
            if ($_GET['group_id'] === 'none') {
                $where[] = "b.group_id IS NULL";
            } else {
                $where[] = "b.group_id = " . (int)$_GET['group_id'];
            }
        }

        $sql = "SELECT b.id, b.uid, b.name, b.category, b.provider_name, b.amount, b.estimated_amount,
                       b.frequency, b.interval_days, b.due_day, b.first_due_date, b.next_due_date,
                       b.cycle_anchor_date, b.is_archived, b.group_id, b.is_from_circle, b.source_cycle_id,
                       b.has_refusal, b.settlement_status, b.agreement_status, b.is_locked_for_edit,
                       b.is_paused, b.active, b.default_cash_source, b.receipt_ref, b.receipt_image_name,
                       IF(b.receipt_image IS NOT NULL AND b.receipt_image != '', 1, 0) AS has_receipt,
                       OCTET_LENGTH(b.receipt_image) AS receipt_size,
                       b.paused_at, b.paused_by, b.resumed_at, b.resumed_by, b.refused_at, b.refused_by,
                       b.refusal_reason, b.deleted_at, b.deleted_by, b.delete_reason, b.note, b.created_by, b.edited_by, b.last_edited_by,
                       b.last_edited_by_name, b.version,
                       g.name AS group_name, g.color AS group_color, g.icon AS group_icon, g.is_from_circle AS group_is_from_circle 
                FROM recurring_bills b 
                LEFT JOIN bill_groups g ON b.group_id = g.id 
                WHERE " . implode(' AND ', $where) . " 
                ORDER BY b.is_archived ASC, b.is_paused ASC, b.active DESC, b.name ASC";

        $bills = $db->query($sql)->fetchAll();

        // Attach cycle summaries (lightweight projection excluding heavy Base64)
        $cycleStmt = $db->prepare("SELECT c.id, c.uid, c.bill_id, c.cycle_label, c.due_date, c.amount_expected,
                                          c.amount_paid, c.bill_created, c.bill_created_at, c.bill_created_by,
                                          c.status, c.has_refusal, c.split_status, c.agreement_status,
                                          c.is_locked_for_edit, c.paid_from, c.paid_from_type, c.paid_at,
                                          c.declared_paid_at, c.invoice_date, c.received_date, c.paid_by,
                                          c.receipt_ref, c.receipt_image_name,
                                          IF(c.receipt_image IS NOT NULL AND c.receipt_image != '', 1, 0) AS has_receipt,
                                          OCTET_LENGTH(c.receipt_image) AS receipt_size,
                                          c.split_data, c.voided_at, c.voided_by, c.void_reason,
                                          c.last_edited_by, c.last_edited_by_name, c.version, c.reset_count,
                                          c.note, c.created_at, c.updated_at
                                   FROM recurring_bill_cycles c 
                                   WHERE c.bill_id = :bid 
                                   ORDER BY c.due_date ASC");
        $today = date('Y-m-d');

        foreach ($bills as &$bill) {
            if (empty($bill['is_archived'])) {
                $this->ensureCyclesUpToDate($db, $bill);
            }
            $cycleStmt->execute(['bid' => $bill['id']]);
            $cycles = $cycleStmt->fetchAll();

            $dueCount = 0;
            $dueAmount = '0';
            $pastDueCount = 0;
            $pastDueAmount = '0';
            $paidTotal = '0';
            $cIdx = 1;
            foreach ($cycles as &$c) {
                $c['cycle_index'] = $cIdx++;
                if ($c['status'] !== 'paid') {
                    $dueCount++;
                    $rem = Decimal::sub((string)$c['amount_expected'], (string)$c['amount_paid']);
                    $dueAmount = Decimal::add($dueAmount, $rem);
                    if ($c['due_date'] <= $today) {
                        $pastDueCount++;
                        $pastDueAmount = Decimal::add($pastDueAmount, $rem);
                    }
                } else {
                    $paidTotal = Decimal::add($paidTotal, (string)$c['amount_paid']);
                }
            }
            unset($c);

            // Keep cycles sorted descending (newest first) for preview/timeline
            usort($cycles, fn($a, $b) => strcmp($b['due_date'], $a['due_date']));
            $bill['cycles'] = array_slice($cycles, 0, 12);
            $bill['unpaid_cycles_count'] = $dueCount;
            $bill['unpaid_amount'] = $dueAmount;
            $bill['past_due_cycles_count'] = $pastDueCount;
            $bill['past_due_amount'] = $pastDueAmount;
            $bill['total_paid'] = $paidTotal;
        }
        unset($bill);

        Response::json(['bills' => $bills]);
    }

    /**
     * Compute field-level and split-payer granular diffs for audit trails (Mission 109)
     */
    private function calculateBillDiff(array $oldBill, array $newData, ?array $oldCycle, ?array $newSplitPayers, PDO $db): array
    {
        $fields = [
            'name'                => ['label' => 'Bill Name', 'type' => 'string'],
            'category'            => ['label' => 'Category', 'type' => 'string'],
            'provider_name'       => ['label' => 'Provider', 'type' => 'string'],
            'amount'              => ['label' => 'Total Amount', 'type' => 'decimal'],
            'estimated_amount'    => ['label' => 'Estimated Amount', 'type' => 'decimal'],
            'frequency'           => ['label' => 'Frequency', 'type' => 'string'],
            'interval_days'       => ['label' => 'Interval Days', 'type' => 'string'],
            'due_day'             => ['label' => 'Due Day', 'type' => 'string'],
            'cycle_anchor_date'   => ['label' => 'Billing Start Date', 'type' => 'string'],
            'default_cash_source' => ['label' => 'Payment Origin', 'type' => 'source'],
            'receipt_ref'         => ['label' => 'Receipt Reference', 'type' => 'string'],
            'note'                => ['label' => 'Notes', 'type' => 'string'],
            'active'              => ['label' => 'Active Status', 'type' => 'boolean']
        ];

        $fieldDiffs = [];
        $oldValues = [];
        $newValues = [];
        $summaryParts = [];

        foreach ($fields as $field => $meta) {
            $oldVal = $oldBill[$field] ?? null;
            $newVal = $newData[$field] ?? null;

            $oldValues[$field] = $oldVal;
            $newValues[$field] = $newVal;

            $hasChanged = false;
            if ($meta['type'] === 'decimal') {
                $sOld = (string)($oldVal ?? '0');
                $sNew = (string)($newVal ?? '0');
                if (Decimal::comp($sOld, $sNew) !== 0) {
                    $hasChanged = true;
                }
            } elseif ($meta['type'] === 'boolean') {
                $hasChanged = ((int)$oldVal !== (int)$newVal);
            } else {
                $sOld = trim((string)($oldVal ?? ''));
                $sNew = trim((string)($newVal ?? ''));
                if ($sOld !== $sNew) {
                    $hasChanged = true;
                }
            }

            if ($hasChanged) {
                $fieldDiffs[$field] = [
                    'label' => $meta['label'],
                    'type'  => $meta['type'],
                    'old'   => $oldVal,
                    'new'   => $newVal
                ];
                $summaryParts[] = "{$meta['label']}: '{$oldVal}' → '{$newVal}'";
            }
        }

        // Group Assignment Diff
        if (array_key_exists('group_id', $newData)) {
            $oldGid = !empty($oldBill['group_id']) ? (int)$oldBill['group_id'] : null;
            $newGid = !empty($newData['group_id']) ? (int)$newData['group_id'] : null;
            if ($oldGid !== $newGid) {
                $bgStmt = $db->prepare('SELECT name FROM bill_groups WHERE id = :id LIMIT 1');
                $oldGName = 'Standalone';
                if ($oldGid) {
                    $bgStmt->execute(['id' => $oldGid]);
                    $oldGName = $bgStmt->fetchColumn() ?: "Group #{$oldGid}";
                }
                $newGName = 'Standalone';
                if ($newGid) {
                    $bgStmt->execute(['id' => $newGid]);
                    $newGName = $bgStmt->fetchColumn() ?: "Group #{$newGid}";
                }
                $fieldDiffs['group'] = [
                    'label' => 'Group',
                    'type'  => 'string',
                    'old'   => $oldGName,
                    'new'   => $newGName
                ];
                $summaryParts[] = "Group: '{$oldGName}' → '{$newGName}'";
            }
        }

        // Split Payer Diff Engine
        $payerDiffs = [];
        $usersMap = [];
        try {
            $uStmt = $db->query("SELECT id, username FROM users");
            while ($u = $uStmt->fetch()) {
                $usersMap[(int)$u['id']] = $u['username'];
            }
        } catch (\Exception $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

        $oldSplit = [];
        if (!empty($oldCycle['split_data'])) {
            $decoded = is_array($oldCycle['split_data']) ? $oldCycle['split_data'] : json_decode((string)$oldCycle['split_data'], true);
            if (is_array($decoded)) {
                foreach ($decoded as $p) {
                    $pUid = (int)($p['user_id'] ?? 0);
                    if ($pUid > 0) $oldSplit[$pUid] = $p;
                }
            }
        }

        $newSplit = [];
        if (!empty($newSplitPayers) && is_array($newSplitPayers)) {
            foreach ($newSplitPayers as $p) {
                $pUid = (int)($p['user_id'] ?? 0);
                if ($pUid > 0) $newSplit[$pUid] = $p;
            }
        }

        $oldValues['split_payers'] = array_values($oldSplit);
        $newValues['split_payers'] = array_values($newSplit);

        // Added or modified payers
        foreach ($newSplit as $pUid => $newP) {
            $username = $usersMap[$pUid] ?? "User #{$pUid}";
            $newAmt = (string)($newP['amount'] ?? '0');
            $newSrc = $newP['paid_from'] ?? 'hand';

            if (!isset($oldSplit[$pUid])) {
                $payerDiffs[] = [
                    'action'     => 'added',
                    'user_id'    => $pUid,
                    'username'   => $username,
                    'amount'     => $newAmt,
                    'paid_from'  => $newSrc
                ];
                $summaryParts[] = "Added {$username} (" . number_format((float)$newAmt, 2) . " DZD)";
            } else {
                $oldP = $oldSplit[$pUid];
                $oldAmt = (string)($oldP['amount'] ?? '0');
                $oldSrc = $oldP['paid_from'] ?? 'hand';

                $amtChanged = (Decimal::comp($oldAmt, $newAmt) !== 0);
                $srcChanged = ($oldSrc !== $newSrc);

                if ($amtChanged || $srcChanged) {
                    $payerDiffs[] = [
                        'action'        => 'modified',
                        'user_id'       => $pUid,
                        'username'      => $username,
                        'old_amount'    => $oldAmt,
                        'new_amount'    => $newAmt,
                        'old_paid_from' => $oldSrc,
                        'new_paid_from' => $newSrc
                    ];
                    $summaryParts[] = "Updated {$username}: " . number_format((float)$oldAmt, 2) . " → " . number_format((float)$newAmt, 2) . " DZD";
                }
            }
        }

        // Removed payers
        foreach ($oldSplit as $pUid => $oldP) {
            if (!isset($newSplit[$pUid])) {
                $username = $usersMap[$pUid] ?? "User #{$pUid}";
                $oldAmt = (string)($oldP['amount'] ?? '0');
                $payerDiffs[] = [
                    'action'    => 'removed',
                    'user_id'   => $pUid,
                    'username'  => $username,
                    'amount'    => $oldAmt
                ];
                $summaryParts[] = "Removed {$username} (was " . number_format((float)$oldAmt, 2) . " DZD)";
            }
        }

        return [
            'has_changes'  => !empty($fieldDiffs) || !empty($payerDiffs),
            'fields'       => $fieldDiffs,
            'payers'       => $payerDiffs,
            'summary'      => implode('; ', $summaryParts),
            'old_values'   => $oldValues,
            'new_values'   => $newValues
        ];
    }

    /** POST /api/recurring-bills - Create or update a recurring bill template */
    public function storeBill(array $data): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $name = trim((string)($data['name'] ?? ''));
        if ($name === '') {
            Response::json(['error' => 'Bill name is required'], 400);
            return;
        }

        $editId = !empty($data['id']) ? (int)$data['id'] : null;
        $category = trim((string)($data['category'] ?? 'Utilities'));
        $isArchived = !empty($data['is_archived']) ? 1 : 0;
        $groupId = !empty($data['group_id']) ? (int)$data['group_id'] : null;

        $rawAmount = isset($data['amount']) ? trim((string)$data['amount']) : '';
        if ($isArchived) {
            if ($rawAmount === '' || !is_numeric($rawAmount) || Decimal::comp($rawAmount, '0') <= 0) {
                Response::json(['error' => 'Amount is obligatory for archived bills (must be greater than 0).'], 422);
                return;
            }
            $amount = Decimal::truncate($rawAmount, 16);
            $estimatedAmount = $amount;
        } else {
            if ($rawAmount !== '' && (!is_numeric($rawAmount) || Decimal::comp($rawAmount, '0') < 0)) {
                Response::json(['error' => 'Amount must be a valid number (0 or greater) or left blank for variable rate.'], 422);
                return;
            }
            $amount = ($rawAmount !== '' && is_numeric($rawAmount)) ? Decimal::truncate($rawAmount, 16) : '0.0000000000000000';
            $estimatedAmount = (!empty($data['estimated_amount']) && is_numeric($data['estimated_amount']) && Decimal::comp((string)$data['estimated_amount'], '0') > 0)
                ? Decimal::truncate((string)$data['estimated_amount'], 16)
                : ($rawAmount !== '' && is_numeric($rawAmount) && Decimal::comp($rawAmount, '0') > 0 ? $amount : null);
        }

        $freqInput = $data['frequency'] ?? 'monthly';
        $allowedFrequencies = ['weekly', 'monthly', 'quarterly', 'semi_annual', 'yearly', 'fixed_30', 'fixed_90', 'fixed_180', 'custom'];
        $frequency = in_array($freqInput, $allowedFrequencies, true) ? $freqInput : 'monthly';
        $intervalDays = ($frequency === 'custom' && (!empty($data['interval_days']) || !empty($data['custom_interval_days']))) 
            ? (int)($data['interval_days'] ?? $data['custom_interval_days']) 
            : ($frequency === 'fixed_30' ? 30 : ($frequency === 'fixed_90' ? 90 : ($frequency === 'fixed_180' ? 180 : null)));
        
        $anchorRaw = !empty($data['cycle_anchor_date']) 
            ? date('Y-m-d', strtotime((string)$data['cycle_anchor_date'])) 
            : (!empty($data['first_due_date']) ? date('Y-m-d', strtotime((string)$data['first_due_date'])) : date('Y-m-d'));
        
        $anchorDay = (int)date('d', strtotime($anchorRaw));
        if (in_array($frequency, ['monthly', 'quarterly', 'semi_annual', 'yearly'], true)) {
            $dueDay = (!empty($data['due_day']) && is_numeric($data['due_day']))
                ? max(1, min(31, (int)$data['due_day']))
                : $anchorDay;
            $anchorYear = (int)date('Y', strtotime($anchorRaw));
            $anchorMonth = (int)date('m', strtotime($anchorRaw));
            $daysInAnchorMonth = (int)date('t', strtotime(sprintf('%04d-%02d-01', $anchorYear, $anchorMonth)));
            $actualAnchorDay = min($dueDay, $daysInAnchorMonth);
            $cycleAnchorDate = sprintf('%04d-%02d-%02d', $anchorYear, $anchorMonth, $actualAnchorDay);
        } else {
            $dueDay = $anchorDay;
            $cycleAnchorDate = $anchorRaw;
        }
        if ($isArchived) {
            $firstDueDate = $cycleAnchorDate;
        } else {
            if (!empty($data['first_due_date'])) {
                $firstDueDate = date('Y-m-d', strtotime((string)$data['first_due_date']));
            } else {
                $firstDueDate = $cycleAnchorDate;
            }
        }

        $active = $isArchived ? 0 : (isset($data['active']) ? (int)$data['active'] : 1);
        $rawSource = $data['default_cash_source'] ?? ($data['cash_source'] ?? 'vault');
        $cashSource = in_array($rawSource, ['vault', 'hand'], true) ? $rawSource : 'vault';
        $receiptRef = trim((string)($data['receipt_ref'] ?? '')) ?: null;
        $receiptImage = $data['receipt_image'] ?? null;
        if (!empty($receiptImage)) {
            try {
                $receiptImage = self::validateReceiptImage((string)$receiptImage);
            } catch (\InvalidArgumentException $e) {
                Response::json(['error' => $e->getMessage()], 422);
                return;
            }
        }
        $receiptImageName = $data['receipt_image_name'] ?? null;
        $provider = trim((string)($data['provider_name'] ?? ''));
        $note = trim((string)($data['note'] ?? ''));
        $paidBy = !empty($data['paid_by']) ? (int)$data['paid_by'] : ($_SESSION['user_id'] ?? 1);
        $splitPayers = (!empty($data['split_payers']) && is_array($data['split_payers'])) ? $data['split_payers'] : null;

        if ($splitPayers && count($splitPayers) > 0) {
            $totalSplitAlloc = '0';
            foreach ($splitPayers as $sp) {
                $spAmtRaw = trim((string)($sp['amount'] ?? '0'));
                $spAmt = (is_numeric($spAmtRaw) && Decimal::comp($spAmtRaw, '0') > 0) ? Decimal::truncate($spAmtRaw, 16) : '0';
                $totalSplitAlloc = Decimal::add($totalSplitAlloc, $spAmt);
            }
            if (Decimal::comp($totalSplitAlloc, $amount) > 0) {
                Response::json([
                    'error' => "Total split allocations (" . Decimal::format($totalSplitAlloc, 2) . " DZD) cannot exceed the total bill amount (" . Decimal::format($amount, 2) . " DZD)."
                ], 422);
                return;
            }
            if ($isArchived && Decimal::comp($totalSplitAlloc, $amount) !== 0) {
                Response::json([
                    'error' => "Total split allocations (" . Decimal::format($totalSplitAlloc, 2) . " DZD) must exactly match the archived bill amount (" . Decimal::format($amount, 2) . " DZD)."
                ], 422);
                return;
            }
        }

        if ($isArchived) {
            $paidDate = !empty($data['paid_at']) ? date('Y-m-d', strtotime((string)$data['paid_at'])) : $firstDueDate;
            $today = date('Y-m-d');
            if ($paidDate >= $today) {
                Response::json(['error' => 'Archived bills can only be recorded for past dates (yesterday and older). Today and future dates are strictly prohibited.'], 422);
                return;
            }
        }

        $db->beginTransaction();
        try {
            if ($editId) {
                $oldBillStmt = $db->prepare("SELECT * FROM recurring_bills WHERE id = :id FOR UPDATE");
                $oldBillStmt->execute(['id' => $editId]);
                $oldBill = $oldBillStmt->fetch();
                if (!$oldBill) {
                    $db->rollBack();
                    Response::json(['error' => 'Bill not found'], 404);
                    return;
                }

                // ─── PAYMENT / COMPLETED PHASE EDIT LOCK GUARD ─────────────────────────
                // Once all partners accept (Payment Phase) or bill is settled (Completed), edit is permanently locked!
                $isArchivedOld = !empty($oldBill['is_archived']);
                $isBillLocked = false;
                if ($isArchivedOld) {
                    $isBillLocked = (!empty($oldBill['is_locked_for_edit']) || ($oldBill['agreement_status'] ?? '') === 'all_accepted' || ($oldBill['settlement_status'] ?? '') === 'settled');
                } else {
                    $isBillLocked = (!empty($oldBill['is_locked_for_edit']) && ($oldBill['agreement_status'] ?? '') === 'all_accepted');
                }
                if ($isBillLocked) {
                    $db->rollBack();
                    Response::json([
                        'error'  => 'Bill is locked from editing because it is in payment phase or already settled.',
                        'locked' => true,
                        'phase'  => ($oldBill['settlement_status'] ?? '') === 'settled' ? 'settled' : 'all_accepted'
                    ], 422);
                    return;
                }
                // ──────────────────────────────────────────────────────────────────────

                $editorUserId = (int)($_SESSION['user_id'] ?? 1);
                $uStmt = $db->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
                $uStmt->execute(['id' => $editorUserId]);
                $editorUsername = $uStmt->fetchColumn() ?: 'Staff';
                $newVersion = ((int)($oldBill['version'] ?? 1)) + 1;
                if (empty($data['paid_by'])) {
                    $paidBy = (int)($oldBill['created_by'] ?? $paidBy);
                }

                if (!empty($data['clear_receipt_image']) || !empty($data['remove_receipt_image'])) {
                    $receiptImage = null;
                    $receiptImageName = null;
                } elseif (!array_key_exists('receipt_image', $data)) {
                    $receiptImage = $oldBill['receipt_image'] ?? null;
                    $receiptImageName = $oldBill['receipt_image_name'] ?? null;
                }

                // Snapshot previous revision for archived bills so edit can be cancelled
                if (!empty($oldBill['is_archived'])) {
                    $exCycleStmt = $db->prepare("SELECT * FROM recurring_bill_cycles WHERE bill_id = :bid ORDER BY id ASC LIMIT 1");
                    $exCycleStmt->execute(['bid' => $editId]);
                    $exCycle = $exCycleStmt->fetch();

                    $exSettles = $db->prepare("SELECT id FROM partner_settlements WHERE bill_id = :bid AND status IN ('pending', 'refused', 'disputed')");
                    $exSettles->execute(['bid' => $editId]);
                    $settleIds = $exSettles->fetchAll(PDO::FETCH_COLUMN);

                    $revIns = $db->prepare("INSERT INTO recurring_bill_revisions (bill_id, version, bill_snapshot, cycle_snapshot, settlement_ids, created_by, created_at)
                        VALUES (:bid, :ver, :bsnap, :csnap, :sids, :cb, NOW())");
                    $revIns->execute([
                        'bid'   => $editId,
                        'ver'   => (int)($oldBill['version'] ?? 1),
                        'bsnap' => json_encode($oldBill),
                        'csnap' => $exCycle ? json_encode($exCycle) : null,
                        'sids'  => json_encode($settleIds ?: []),
                        'cb'    => $editorUserId
                    ]);

                    SystemLog::write('recurring_bills', 'archived_bill_revision_created', $editId, $oldBill['name'], json_encode([
                        'bill_id'      => $editId,
                        'uid'          => $oldBill['uid'] ?? null,
                        'from_version' => (int)($oldBill['version'] ?? 1),
                        'to_version'   => $newVersion,
                        'editor'       => $editorUsername,
                        'reason'       => !empty($data['edit_reason']) ? trim((string)$data['edit_reason']) : null,
                        'message'      => "Revision snapshot created before editing archived bill {$oldBill['name']}."
                    ], JSON_UNESCAPED_UNICODE), $editorUserId);
                }

                $isRestoredWakeup = (($oldBill['agreement_status'] ?? '') === 'restored_draft' || ($oldBill['settlement_status'] ?? '') === 'draft');
                $hasSplits = ($splitPayers && count($splitPayers) > 0);
                $initialAgreementStatus = $hasSplits ? 'pending_acceptance' : ($isArchived ? 'all_accepted' : 'none');
                $initialIsLocked = $hasSplits ? 0 : ($isArchived ? 1 : 0);
                $initialSettlementStatus = $hasSplits ? 'none' : ($isArchived ? 'settled' : 'none');

                $stmt = $db->prepare("UPDATE recurring_bills 
                    SET name = :name, category = :cat, provider_name = :prov, amount = :amt, estimated_amount = :est,
                        frequency = :freq, interval_days = :intv, due_day = :dday, cycle_anchor_date = :cad,
                        first_due_date = :fdd, next_due_date = :ndd,
                        is_archived = :arch, active = :act, default_cash_source = :cs, receipt_ref = :ref,
                        receipt_image = :img, receipt_image_name = :img_name,
                        has_refusal = 0, settlement_status = :ss, agreement_status = :agr, is_locked_for_edit = :lck,
                        refused_at = NULL, refused_by = NULL, refusal_reason = NULL,
                        version = :ver,
                        note = :note, edited_by = :eb, last_edited_by = :leb, last_edited_by_name = :lebn, updated_at = NOW() 
                    WHERE id = :id");
                $stmt->execute([
                    'name'     => $name,
                    'cat'      => $category,
                    'prov'     => $provider ?: null,
                    'amt'      => $amount,
                    'est'      => $estimatedAmount,
                    'freq'     => $frequency,
                    'intv'     => $intervalDays,
                    'dday'     => $dueDay,
                    'cad'      => $cycleAnchorDate,
                    'fdd'      => $firstDueDate,
                    'ndd'      => $firstDueDate,
                    'arch'     => $isArchived,
                    'act'      => $active,
                    'cs'       => $cashSource,
                    'ref'      => $receiptRef,
                    'img'      => $receiptImage,
                    'img_name' => $receiptImageName,
                    'ss'       => $initialSettlementStatus,
                    'agr'      => $initialAgreementStatus,
                    'lck'      => $initialIsLocked,
                    'ver'      => $newVersion,
                    'note'     => $note ?: null,
                    'eb'       => $editorUserId,
                    'leb'      => $editorUserId,
                    'lebn'     => $editorUsername,
                    'id'       => $editId
                ]);
                $billId = $editId;
                $action = 'updated';

                if (array_key_exists('group_id', $data)) {
                    $updGid = !empty($data['group_id']) ? (int)$data['group_id'] : null;
                    $db->prepare("UPDATE recurring_bills SET group_id = :gid WHERE id = :id")->execute(['gid' => $updGid, 'id' => $editId]);
                }

                $prevDispute = null;
                $prevRefuser = 'Partner';
                $prevReason = 'Contested share';

                if (!$isArchived) {
                    // Active Recurring Circle Pipeline
                    $oldFreq = $oldBill['frequency'] ?? 'monthly';
                    $oldInterval = (int)($oldBill['interval_days'] ?? 0);
                    $oldDueDay = (int)($oldBill['due_day'] ?? 0);
                    $oldAnchor = $oldBill['cycle_anchor_date'] ?? '';

                    $cadenceChanged = ($oldFreq !== $frequency) 
                        || ($oldInterval !== (int)$intervalDays) 
                        || ($oldDueDay !== (int)$dueDay) 
                        || ($oldAnchor !== $cycleAnchorDate);

                    if ($cadenceChanged) {
                        // Safely prune all virgin unbilled cycles that have no bills, payments, resets, or settlements
                        $db->prepare("DELETE FROM recurring_bill_cycles 
                            WHERE bill_id = :bid 
                              AND (bill_created = 0 OR bill_created IS NULL)
                              AND (amount_paid = 0 OR amount_paid IS NULL)
                              AND (reset_count = 0 OR reset_count IS NULL)
                              AND id NOT IN (SELECT DISTINCT cycle_id FROM partner_settlements WHERE cycle_id IS NOT NULL)
                              AND id NOT IN (SELECT DISTINCT cycle_id FROM recurring_bill_cycle_payments WHERE cycle_id IS NOT NULL)
                              AND id NOT IN (SELECT DISTINCT cycle_id FROM recurring_bill_cycle_resets WHERE cycle_id IS NOT NULL)
                              AND id NOT IN (SELECT DISTINCT cycle_id FROM expense_history WHERE cycle_id IS NOT NULL)")
                           ->execute(['bid' => $billId]);

                        // Fetch fresh bill to generate cycles under the new cadence sequence
                        $freshBillStmt = $db->prepare("SELECT * FROM recurring_bills WHERE id = :bid");
                        $freshBillStmt->execute(['bid' => $billId]);
                        $freshBill = $freshBillStmt->fetch(PDO::FETCH_ASSOC);
                        if ($freshBill) {
                            $this->ensureCyclesUpToDate($db, $freshBill);
                        }
                    }

                    // Synchronize updated default expected amount across all virgin unbilled cycles for this circle
                    $newDefaultExp = Decimal::comp((string)$amount, '0') > 0 ? (string)$amount : ($estimatedAmount ?? '0.0000000000000000');
                    $db->prepare("UPDATE recurring_bill_cycles 
                        SET amount_expected = :exp, last_edited_by = :leb, last_edited_by_name = :lebn, updated_at = NOW() 
                        WHERE bill_id = :bid 
                          AND (bill_created = 0 OR bill_created IS NULL)
                          AND (amount_paid = 0 OR amount_paid IS NULL)
                          AND (reset_count = 0 OR reset_count IS NULL)")
                       ->execute([
                           'exp'  => $newDefaultExp,
                           'leb'  => $editorUserId,
                           'lebn' => $editorUsername,
                           'bid'  => $billId
                       ]);

                    // Compute granular diff against old bill
                    $diffResult = $this->calculateBillDiff($oldBill, [
                        'name'                => $name,
                        'category'            => $category,
                        'provider_name'       => $provider ?: null,
                        'amount'              => $amount,
                        'estimated_amount'    => $estimatedAmount,
                        'frequency'           => $frequency,
                        'interval_days'       => $intervalDays,
                        'due_day'             => $dueDay,
                        'cycle_anchor_date'   => $cycleAnchorDate,
                        'default_cash_source' => $cashSource,
                        'receipt_ref'         => $receiptRef,
                        'note'                => $note ?: null,
                        'active'              => $active,
                        'group_id'            => $data['group_id'] ?? $oldBill['group_id']
                    ], null, null, $db);
                } else {
                    // Archived Bill Update Pipeline (1 cycle, past bill)
                    $cStmt = $db->prepare("SELECT * FROM recurring_bill_cycles WHERE bill_id = :bid ORDER BY id DESC LIMIT 1 FOR UPDATE");
                    $cStmt->execute(['bid' => $billId]);
                    $cycle = $cStmt->fetch();

                    // If splitPayers was not provided in this update request, restore from existing cycle's split_data
                    if ($splitPayers === null && $cycle && !empty($cycle['split_data'])) {
                        $decoded = is_array($cycle['split_data']) ? $cycle['split_data'] : json_decode((string)$cycle['split_data'], true);
                        if (is_array($decoded) && count($decoded) > 0) {
                            $splitPayers = $decoded;
                        }
                    }

                    // Compute granular diff against old bill and previous split allocations
                    $diffResult = $this->calculateBillDiff($oldBill, [
                        'name'                => $name,
                        'category'            => $category,
                        'provider_name'       => $provider ?: null,
                        'amount'              => $amount,
                        'estimated_amount'    => $estimatedAmount,
                        'frequency'           => $frequency,
                        'interval_days'       => $intervalDays,
                        'due_day'             => $dueDay,
                        'cycle_anchor_date'   => $cycleAnchorDate,
                        'default_cash_source' => $cashSource,
                        'receipt_ref'         => $receiptRef,
                        'note'                => $note ?: null,
                        'active'              => $active,
                        'group_id'            => $data['group_id'] ?? $oldBill['group_id']
                    ], $cycle ?: null, $splitPayers, $db);

                    if ($cycle) {
                        $cycleId = (int)$cycle['id'];
                        $cycleLabel = $cycle['cycle_label'];
                        $paidAmount = $amount;

                        // Check for previous dispute/refusal info across settlements
                        $prevDisputeStmt = $db->prepare("SELECT ps.*, u.username as refuser_name 
                            FROM partner_settlements ps 
                            LEFT JOIN users u ON COALESCE(ps.refused_by, ps.disputed_by, ps.payer_user_id) = u.id
                            WHERE (ps.bill_id = :bid OR (ps.related_entity_type = 'recurring_bill_cycle' AND ps.related_entity_id = :cid))
                              AND ps.status IN ('refused', 'disputed')
                            ORDER BY ps.id DESC LIMIT 1");
                        $prevDisputeStmt->execute(['bid' => $billId, 'cid' => $cycleId]);
                        $prevDispute = $prevDisputeStmt->fetch();
                        $prevRefuser = $prevDispute ? ($prevDispute['refuser_name'] ?? 'Partner') : 'Partner';
                        $prevReason = $prevDispute ? ($prevDispute['refusal_reason'] ?: ($prevDispute['dispute_reason'] ?: 'Contested share')) : 'Contested share';

                        // Cancel old unsettled partner settlements
                        $db->prepare("UPDATE partner_settlements 
                            SET status = 'cancelled', cancelled_at = NOW(), cancelled_by = :cb, cancel_reason = 'Superseded by bill update/resubmission' 
                            WHERE (bill_id = :bid OR (related_entity_type = 'recurring_bill_cycle' AND related_entity_id = :cid))
                              AND status IN ('pending', 'refused', 'disputed')")
                           ->execute(['cb' => $editorUserId, 'bid' => $billId, 'cid' => $cycleId]);

                        // Update cycle
                        $cycStatus = $hasSplits ? 'due' : 'paid';
                        $cycPaid = $hasSplits ? '0' : $paidAmount;
                        $cycSplitStatus = $hasSplits ? 'split' : 'none';
                        $cycAgreement = $hasSplits ? 'pending_acceptance' : 'all_accepted';
                        $cycLocked = $hasSplits ? 0 : 1;

                        // Sanitize refusal notes upon resubmission
                        $cycNoteStmt = $db->prepare('SELECT note FROM recurring_bill_cycles WHERE id = :id LIMIT 1');
                        $cycNoteStmt->execute(['id' => (int)$cycleId]);
                        $cycNote = $cycNoteStmt->fetchColumn() ?: '';
                        if ($cycNote && strpos($cycNote, '[REFUSED by') !== false) {
                            $cycNote = trim((string)preg_replace('/\s*\[REFUSED by [^\]]+\]\s*/i', ' ', $cycNote));
                        }

                        $db->prepare("UPDATE recurring_bill_cycles 
                            SET amount_expected = :exp, amount_paid = :paid, status = :st, split_data = :sd, has_refusal = 0, split_status = :sps,
                                agreement_status = :agr, is_locked_for_edit = :lck, last_edited_by = :leb, last_edited_by_name = :lebn, note = :note, updated_at = NOW() 
                            WHERE id = :cid")
                           ->execute([
                               'exp'  => $paidAmount,
                               'paid' => $cycPaid,
                               'st'   => $cycStatus,
                               'sd'   => $splitPayers ? json_encode($splitPayers) : null,
                               'sps'  => $cycSplitStatus,
                               'agr'  => $cycAgreement,
                               'lck'  => $cycLocked,
                               'leb'  => $editorUserId,
                               'lebn' => $editorUsername,
                               'note' => $cycNote,
                               'cid'  => $cycleId
                           ]);

                        // Re-issue split allocations
                        if ($splitPayers && count($splitPayers) > 0) {
                            $db->prepare("DELETE FROM recurring_bill_cycle_payments WHERE cycle_id = :cid AND voided_at IS NULL")->execute(['cid' => $cycleId]);

                            foreach ($splitPayers as $payer) {
                                $pUid = (int)($payer['user_id'] ?? $paidBy);
                                $pAmtRaw = trim((string)($payer['amount'] ?? '0'));
                                $pAmt = (is_numeric($pAmtRaw) && Decimal::comp($pAmtRaw, '0') > 0) ? Decimal::truncate($pAmtRaw, 16) : '0';
                                $pFrom = in_array($payer['paid_from'] ?? 'hand', ['vault', 'hand'], true) ? $payer['paid_from'] : 'hand';
                                if (Decimal::comp($pAmt, '0') <= 0) continue;

                                $settlementId = null;
                                $settleUid = 'SET-SPLIT-' . date('Ymd') . '-' . strtoupper(substr(uniqid(), -6));
                                $sourceLabel = ($pFrom === 'vault') ? 'Safe (Vault)' : 'Hand (Direct Cash)';
                                $isEditor = ($pUid === (int)$editorUserId);
                                $detailsJson = json_encode([
                                    'bill_id'       => $billId,
                                    'cycle_id'      => $cycleId,
                                    'cycle_label'   => $cycleLabel,
                                    'total_bill'    => $paidAmount,
                                    'share'         => $pAmt,
                                    'target_source' => $pFrom,
                                    'is_archived'   => $isArchived,
                                    'version'       => $newVersion,
                                    'diamonds'      => [
                                        [
                                            'version'           => $newVersion,
                                            'revised_at'        => date('Y-m-d H:i:s'),
                                            'revised_by'        => $editorUsername,
                                            'refusal_addressed' => $prevReason,
                                            'refused_by'        => $prevRefuser,
                                            'new_share'         => $pAmt,
                                            'source'            => $pFrom
                                        ]
                                    ]
                                ]);

                                $sIns = $db->prepare("INSERT INTO partner_settlements 
                                    (uid, payer_user_id, payee_user_id, amount, original_amount, settlement_type, status, acceptance_status, release_status, target_source, related_entity_type, related_entity_id, bill_id, cycle_id, description, details, created_by, created_at)
                                    VALUES (:uid, :payer, :payee, :amt, :amt, 'bill_split', 'pending', :agr, 'released', :src, 'recurring_bill_cycle', :cid, :bid, :cid2, :desc, :det, :cb, NOW())");
                                $sIns->execute([
                                    'uid'   => $settleUid,
                                    'payer' => $pUid,
                                    'payee' => $pUid, // Direct liability towards bill (creator is purely recorder)
                                    'amt'   => $pAmt,
                                    'agr'   => $isEditor ? 'accepted' : 'pending',
                                    'src'   => $pFrom,
                                    'cid'   => $cycleId,
                                    'bid'   => $billId,
                                    'cid2'  => $cycleId,
                                    'desc'  => "Updated Bill Share (v{$newVersion}): {$name} ({$cycleLabel})",
                                    'det'   => $detailsJson,
                                    'cb'    => $editorUserId
                                ]);
                                $settlementId = (int)$db->lastInsertId();

                                if (!$isEditor) {
                                    $revTitle = "Updated Bill Statement: '{$name}'";
                                    $revBody  = "Updated Bill Statement: '{$name}' was updated by {$editorUsername} (v{$newVersion}). All prior acceptances have been reset. " . ($prevDispute ? "Previous refusal by {$prevRefuser} ('{$prevReason}') addressed. " : "") . "Please review and accept your updated share: " . number_format((float)$pAmt, 2) . " DZD from {$sourceLabel}.";
                                    $revStage = "stmt_rev_{$newVersion}_{$billId}";

                                    $db->prepare("INSERT INTO notifications 
                                        (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at)
                                        VALUES (:uid, 'due_payable', :t, :b, '#page-bills?tab=settlements', 'partner_settlement', :eid, :stage, 0, NOW())")
                                       ->execute([
                                        'uid'   => $pUid,
                                        't'     => $revTitle,
                                        'b'     => $revBody,
                                        'eid'   => $settlementId,
                                        'stage' => $revStage
                                    ]);
                                }

                                $cpIns = $db->prepare("INSERT INTO recurring_bill_cycle_payments (cycle_id, bill_id, user_id, amount, paid_from, paid_at, receipt_ref, settlement_id, note, created_by, created_at)
                                    VALUES (:cid, :bid, :uid, :amt, :pf, NULL, :ref, :sid, :note, :cb, NOW())");
                                $cpIns->execute([
                                    'cid'  => $cycleId,
                                    'bid'  => $billId,
                                    'uid'  => $pUid,
                                    'amt'  => $pAmt,
                                    'pf'   => $pFrom,
                                    'ref'  => $receiptRef,
                                    'sid'  => $settlementId,
                                    'note' => $note ?: "Updated split share for {$name} (v{$newVersion})",
                                    'cb'   => $_SESSION['user_id'] ?? null
                                ]);
                            }
                        } else {
                            // Single-payer archived bill update / activation
                            // If this was a restored draft waking up, and paid from vault: check balance & deduct from safe!
                            if ($isRestoredWakeup && $cashSource === 'vault' && Decimal::comp($paidAmount, '0') > 0) {
                                $vault = CashVaultController::getSafeForUser($db, $paidBy);
                                $vStmt = $db->prepare("SELECT current_balance, name FROM cash_vaults WHERE id = :id LIMIT 1");
                                $vStmt->execute(['id' => (int)$vault['id']]);
                                $freshVault = $vStmt->fetch();
                                $curBal = $freshVault ? (string)$freshVault['current_balance'] : (string)($vault['current_balance'] ?? '0');
                                $safeName = $freshVault ? ($freshVault['name'] ?: 'Cash Safe') : ($vault['name'] ?: 'Cash Safe');

                                if (Decimal::comp($curBal, $paidAmount) < 0) {
                                    $db->rollBack();
                                    Response::json([
                                        'error' => "Cannot activate bill: Insufficient funds in {$safeName}. Available: " . Decimal::format($curBal, 2) . " DZD, Required: " . Decimal::format($paidAmount, 2) . " DZD.",
                                        'available' => $curBal,
                                        'required'  => $paidAmount
                                    ], 422);
                                    return;
                                }

                                CashVaultController::logFlow($db, 'bill_payment', 'out', $paidAmount, 'recurring_bill_cycles', $cycleId, "Archived Bill (Restored Activation): {$name} ({$cycleLabel})", $paidBy);
                            }

                            // Record single-payer payment in recurring_bill_cycle_payments
                            $db->prepare("DELETE FROM recurring_bill_cycle_payments WHERE cycle_id = :cid AND voided_at IS NULL")->execute(['cid' => $cycleId]);
                            $cpIns = $db->prepare("INSERT INTO recurring_bill_cycle_payments (cycle_id, bill_id, user_id, amount, paid_from, paid_at, receipt_ref, note, created_by, created_at)
                                VALUES (:cid, :bid, :uid, :amt, :pf, NOW(), :ref, :note, :cb, NOW())");
                            $cpIns->execute([
                                'cid'  => $cycleId,
                                'bid'  => $billId,
                                'uid'  => $paidBy,
                                'amt'  => $paidAmount,
                                'pf'   => $cashSource,
                                'ref'  => $receiptRef,
                                'note' => $note ?: 'Archived bill settled',
                                'cb'   => $editorUserId
                            ]);
                        }
                    }
                }
            } else {
                $hasSplits = ($splitPayers && count($splitPayers) > 0);
                if ($isArchived) {
                    $initialAgreementStatus = $hasSplits ? 'pending_acceptance' : 'all_accepted';
                    $initialIsLocked = $hasSplits ? 0 : 1;
                    $initialSettlementStatus = $hasSplits ? 'none' : 'settled';
                } else {
                    $initialAgreementStatus = $hasSplits ? 'pending_acceptance' : 'none';
                    $initialIsLocked = 0;
                    $initialSettlementStatus = 'none';
                }

                $uid = $isArchived ? Uid::forBill(true) : Uid::forCircle();
                $stmt = $db->prepare("INSERT INTO recurring_bills (uid, name, category, provider_name, amount, estimated_amount, frequency, interval_days, due_day, first_due_date, next_due_date, cycle_anchor_date, is_archived, group_id, active, default_cash_source, receipt_ref, receipt_image, receipt_image_name, settlement_status, agreement_status, is_locked_for_edit, note, created_by, created_at, updated_at) 
                    VALUES (:uid, :name, :cat, :prov, :amt, :est, :freq, :intv, :dday, :fdd, :ndd, :cad, :arch, :gid, :act, :cs, :ref, :img, :img_name, :ss, :agr, :lck, :note, :cb, NOW(), NOW())");
                $stmt->execute([
                    'uid'      => $uid,
                    'name'     => $name,
                    'cat'      => $category,
                    'prov'     => $provider ?: null,
                    'amt'      => $amount,
                    'est'      => $estimatedAmount,
                    'freq'     => $frequency,
                    'intv'     => $intervalDays,
                    'dday'     => $dueDay,
                    'fdd'      => $firstDueDate,
                    'ndd'      => $firstDueDate,
                    'cad'      => $cycleAnchorDate,
                    'arch'     => $isArchived,
                    'gid'      => $groupId,
                    'act'      => $active,
                    'cs'       => $cashSource,
                    'ref'      => $receiptRef,
                    'img'      => $receiptImage,
                    'img_name' => $receiptImageName,
                    'ss'       => $initialSettlementStatus,
                    'agr'      => $initialAgreementStatus,
                    'lck'      => $initialIsLocked,
                    'note'     => $note ?: null,
                    'cb'       => $_SESSION['user_id'] ?? null
                ]);
                $billId = (int)$db->lastInsertId();
                $action = 'created';

                if ($isArchived) {
                    $cycleLabel = date('Y-m', strtotime($firstDueDate));
                    $paidAmount = $amount;

                    $cIns = $db->prepare("INSERT INTO recurring_bill_cycles (bill_id, cycle_label, due_date, amount_expected, amount_paid, status, agreement_status, is_locked_for_edit, split_status, paid_from, paid_at, paid_by, receipt_ref, receipt_image, receipt_image_name, split_data, note, created_at, updated_at) 
                        VALUES (:bid, :cl, :dd, :exp, :paid, :st, :agr, :lck, :sps, :pf, :pa, :pb, :ref, :img, :img_name, :sd, :note, NOW(), NOW())");
                    $cIns->execute([
                        'bid'      => $billId,
                        'cl'       => $cycleLabel,
                        'dd'       => $firstDueDate,
                        'exp'      => $paidAmount,
                        'paid'     => $hasSplits ? '0' : $paidAmount,
                        'st'       => $hasSplits ? 'due' : 'paid',
                        'agr'      => $hasSplits ? 'pending_acceptance' : 'all_accepted',
                        'lck'      => $hasSplits ? 0 : 1,
                        'sps'      => $hasSplits ? 'split' : 'none',
                        'pf'       => $cashSource,
                        'pa'       => $hasSplits ? null : (!empty($data['paid_at']) ? date('Y-m-d H:i:s', strtotime((string)$data['paid_at'])) : date('Y-m-d H:i:s')),
                        'pb'       => $paidBy,
                        'ref'      => $receiptRef,
                        'img'      => $receiptImage,
                        'img_name' => $receiptImageName,
                        'sd'       => $splitPayers ? json_encode($splitPayers) : null,
                        'note'     => $note ?: 'Archived past bill'
                    ]);
                    $cycleId = (int)$db->lastInsertId();
                    if ($cycleId > 0) {
                        $cycleUid = Uid::forCycle($cycleId, $firstDueDate);
                        $db->prepare("UPDATE recurring_bill_cycles SET uid = :cuid WHERE id = :cid")->execute(['cuid' => $cycleUid, 'cid' => $cycleId]);
                    }

                    $creatorName = $db->query("SELECT username FROM users WHERE id = " . (int)$paidBy)->fetchColumn() ?: 'Creator';

                    if ($hasSplits) {
                        $sessionUser = (int)($_SESSION['user_id'] ?? 1);
                        foreach ($splitPayers as $payer) {
                            $pUid = (int)($payer['user_id'] ?? $paidBy);
                            $pAmtRaw = trim((string)($payer['amount'] ?? '0'));
                            $pAmt = (is_numeric($pAmtRaw) && Decimal::comp($pAmtRaw, '0') > 0) ? Decimal::truncate($pAmtRaw, 16) : '0';
                            $pFrom = in_array($payer['paid_from'] ?? 'hand', ['vault', 'hand'], true) ? $payer['paid_from'] : 'hand';
                            if (Decimal::comp($pAmt, '0') <= 0) continue;

                            $isCreator = ($pUid === (int)$paidBy);
                            $settlementId = null;
                            $settleUid = 'SET-SPLIT-' . date('Ymd') . '-' . strtoupper(substr(uniqid(), -6));
                            $sourceLabel = ($pFrom === 'vault') ? 'Safe (Vault)' : 'Hand (Direct Cash)';
                            $detailsJson = json_encode([
                                'bill_id'       => $billId,
                                'cycle_id'      => $cycleId,
                                'cycle_label'   => $cycleLabel,
                                'total_bill'    => $paidAmount,
                                'share'         => $pAmt,
                                'target_source' => $pFrom,
                                'is_archived'   => 1,
                                'version'       => 1
                            ]);

                            $sIns = $db->prepare("INSERT INTO partner_settlements 
                                (uid, payer_user_id, payee_user_id, amount, original_amount, settlement_type, status, acceptance_status, release_status, target_source, related_entity_type, related_entity_id, bill_id, cycle_id, description, details, created_by, created_at)
                                VALUES (:uid, :payer, :payee, :amt, :amt, 'bill_split', 'pending', :agr, 'released', :src, 'recurring_bill_cycle', :cid, :bid, :cid2, :desc, :det, :cb, NOW())");
                            $sIns->execute([
                                'uid'   => $settleUid,
                                'payer' => $pUid,
                                'payee' => $pUid, // Direct liability towards bill (creator is purely recorder)
                                'amt'   => $pAmt,
                                'agr'   => $isCreator ? 'accepted' : 'pending',
                                'src'   => $pFrom,
                                'cid'   => $cycleId,
                                'bid'   => $billId,
                                'cid2'  => $cycleId,
                                'desc'  => "Archived Bill Share: {$name} ({$cycleLabel})",
                                'det'   => $detailsJson,
                                'cb'    => $paidBy
                            ]);
                            $settlementId = (int)$db->lastInsertId();

                            if (!$isCreator && $pUid !== $sessionUser) {
                                $notifTitle = "New Partner Settlement Demand: {$creatorName} recorded archived bill '{$name}'";
                                $notifBody  = "New Partner Settlement Demand: {$creatorName} recorded archived bill '{$name}' (" . number_format((float)$paidAmount, 2) . " DZD). Your share: " . number_format((float)$pAmt, 2) . " DZD from {$sourceLabel}.";

                                $db->prepare("INSERT INTO notifications 
                                    (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at)
                                    VALUES (:uid, 'due_payable', :t, :b, '#page-bills?tab=settlements', 'partner_settlement', :eid, 'demand_initial', 0, NOW())")
                                   ->execute([
                                    'uid' => $pUid,
                                    't'   => $notifTitle,
                                    'b'   => $notifBody,
                                    'eid' => $settlementId
                                ]);
                            }

                            $cpIns = $db->prepare("INSERT INTO recurring_bill_cycle_payments (cycle_id, bill_id, user_id, amount, paid_from, paid_at, receipt_ref, settlement_id, note, created_by, created_at)
                                VALUES (:cid, :bid, :uid, :amt, :pf, NULL, :ref, :sid, :note, :cb, NOW())");
                            $cpIns->execute([
                                'cid'  => $cycleId,
                                'bid'  => $billId,
                                'uid'  => $pUid,
                                'amt'  => $pAmt,
                                'pf'   => $pFrom,
                                'ref'  => $receiptRef,
                                'sid'  => $settlementId,
                                'note' => $note ?: "Archived split share for {$name}",
                                'cb'   => $_SESSION['user_id'] ?? null
                            ]);
                        }
                    } else {
                        if ($cashSource === 'vault' && Decimal::comp($paidAmount, '0') > 0) {
                            CashVaultController::logFlow($db, 'bill_payment', 'out', $paidAmount, 'recurring_bill_cycles', $cycleId, "Archived Bill: {$name} ({$cycleLabel})", $paidBy);
                        }

                        $cpIns = $db->prepare("INSERT INTO recurring_bill_cycle_payments (cycle_id, bill_id, user_id, amount, paid_from, paid_at, receipt_ref, note, created_by, created_at)
                            VALUES (:cid, :bid, :uid, :amt, :pf, NOW(), :ref, :note, :cb, NOW())");
                        $cpIns->execute([
                            'cid'  => $cycleId,
                            'bid'  => $billId,
                            'uid'  => $paidBy,
                            'amt'  => $paidAmount,
                            'pf'   => $cashSource,
                            'ref'  => $receiptRef,
                            'note' => $note ?: 'Archived past bill',
                            'cb'   => $_SESSION['user_id'] ?? null
                        ]);
                    }
                } else {
                    $cycleLabel = ($frequency === 'weekly') ? date('Y-\WW', strtotime($firstDueDate)) : (in_array($frequency, ['fixed_30', 'fixed_90', 'fixed_180', 'custom'], true) ? date('Y-m-d', strtotime($firstDueDate)) : date('Y-m', strtotime($firstDueDate)));
                    $expected = Decimal::comp($amount, '0') > 0 ? $amount : ($estimatedAmount ?? '0.0000000000000000');
                    $initCycStatus = (strtotime($firstDueDate) > strtotime(date('Y-m-d'))) ? 'upcoming' : 'due';
                    $cIns = $db->prepare("INSERT INTO recurring_bill_cycles (bill_id, cycle_label, due_date, amount_expected, amount_paid, status, created_at, updated_at) 
                        VALUES (:bid, :cl, :dd, :exp, 0, :st, NOW(), NOW())");
                    $cIns->execute([
                        'bid' => $billId,
                        'cl'  => $cycleLabel,
                        'dd'  => $firstDueDate,
                        'exp' => $expected,
                        'st'  => $initCycStatus
                    ]);
                    $activeCycleId = (int)$db->lastInsertId();
                    if ($activeCycleId > 0) {
                        $activeCycleUid = Uid::forCycle($activeCycleId, $firstDueDate);
                        $db->prepare("UPDATE recurring_bill_cycles SET uid = :cuid WHERE id = :cid")->execute(['cuid' => $activeCycleUid, 'cid' => $activeCycleId]);
                    }

                    // Immediately spawn any backdated elapsed cycles up to today
                    $freshBillStmt = $db->prepare("SELECT * FROM recurring_bills WHERE id = :bid");
                    $freshBillStmt->execute(['bid' => $billId]);
                    $freshBill = $freshBillStmt->fetch(PDO::FETCH_ASSOC);
                    if ($freshBill) {
                        $this->ensureCyclesUpToDate($db, $freshBill);
                    }
                }
            }

            // History & Deep Audit Trails (Mission 109)
            if ($action === 'updated' && isset($diffResult)) {
                $changesPayload = [
                    'version_from'      => (int)($oldBill['version'] ?? 1),
                    'version_to'        => $newVersion,
                    'diff_fields'       => $diffResult['fields'],
                    'diff_payers'       => $diffResult['payers'],
                    'summary'           => $diffResult['summary'] ?: "Bill re-confirmed and resubmitted without modifications (v{$newVersion})",
                    'addressed_refusal' => (!empty($prevDispute)) ? [
                        'refused_by' => $prevRefuser,
                        'reason'     => $prevReason
                    ] : null
                ];

                $hist = $db->prepare("INSERT INTO expense_history 
                    (bill_id, edited_by, action, changes, old_values, new_values, reason, note, created_at) 
                    VALUES (:bid, :by, 'updated', :ch, :ov, :nv, :r, :note, NOW())");
                $hist->execute([
                    'bid'  => $billId,
                    'by'   => $editorUserId,
                    'ch'   => json_encode($changesPayload),
                    'ov'   => json_encode($diffResult['old_values']),
                    'nv'   => json_encode($diffResult['new_values']),
                    'r'    => $diffResult['summary'] ?: "Bill re-confirmed and resubmitted without modifications (v{$newVersion})",
                    'note' => $note ?: null
                ]);

                $db->commit();

                $targetAction = $isArchived ? 'archived_bill_updated' : 'updated';
                SystemLog::write('recurring_bills', $targetAction, $billId, $name, json_encode([
                    'uid'           => $oldBill['uid'] ?? null,
                    'bill_uid'      => $oldBill['uid'] ?? null,
                    'amount'        => Decimal::format($amount, 2) . ' DZD',
                    'frequency'     => $frequency,
                    'is_archived'   => $isArchived ? 1 : 0,
                    'group_id'      => $data['group_id'] ?? ($oldBill['group_id'] ?? null),
                    'version'       => ['from' => (int)($oldBill['version'] ?? 1), 'to' => $newVersion],
                    'diff_summary'  => $diffResult['summary'] ?: "Bill re-confirmed and resubmitted without modifications (v{$newVersion})",
                    'diff_fields'   => $diffResult['fields'],
                    'payer_changes' => $diffResult['payers']
                ]), $editorUserId);
            } else {
                // Bill Created Event - Record complete initial snapshot
                $creatorUserId = (int)($paidBy ?: ($_SESSION['user_id'] ?? 1));
                $uStmt = $db->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
                $uStmt->execute(['id' => $creatorUserId]);
                $creatorName = $uStmt->fetchColumn() ?: 'Admin';
                
                $payersList = [];
                if (!empty($splitPayers)) {
                    foreach ($splitPayers as $sp) {
                        $spUid = (int)$sp['user_id'];
                        $uStmt->execute(['id' => $spUid]);
                        $uName = $uStmt->fetchColumn() ?: 'Partner';
                        $payersList[] = [
                            'user_id'   => $spUid,
                            'username'  => $uName,
                            'amount'    => (string)$sp['amount'],
                            'percent'   => $sp['percent'] ?? null,
                            'paid_from' => $sp['paid_from'] ?? 'hand'
                        ];
                    }
                } else {
                    $payersList[] = [
                        'user_id'   => $creatorUserId,
                        'username'  => $creatorName,
                        'amount'    => (string)$amount,
                        'percent'   => '100',
                        'paid_from' => $cashSource
                    ];
                }

                $initialSnapshot = [
                    'name'                => $name,
                    'category'            => $category,
                    'provider_name'       => $provider ?: null,
                    'amount'              => (string)$amount,
                    'estimated_amount'    => $estimatedAmount ? (string)$estimatedAmount : null,
                    'frequency'           => $frequency,
                    'interval_days'       => $intervalDays,
                    'due_day'             => $dueDay,
                    'first_due_date'      => $firstDueDate,
                    'cycle_anchor_date'   => $cycleAnchorDate,
                    'is_archived'         => $isArchived,
                    'default_cash_source' => $cashSource,
                    'receipt_ref'         => $receiptRef,
                    'note'                => $note ?: null,
                    'paid_by_id'          => $creatorUserId,
                    'paid_by_name'        => $creatorName,
                    'split_mode'          => !empty($splitPayers) ? 'split' : 'single',
                    'split_payers'        => $payersList
                ];

                $hist = $db->prepare("INSERT INTO expense_history 
                    (bill_id, edited_by, action, changes, old_values, new_values, reason, note, created_at) 
                    VALUES (:bid, :by, 'created', :ch, NULL, :nv, :r, :note, NOW())");
                $hist->execute([
                    'bid'  => $billId,
                    'by'   => $creatorUserId,
                    'ch'   => json_encode(['initial_state' => $initialSnapshot]),
                    'nv'   => json_encode($initialSnapshot),
                    'r'    => $isArchived ? 'Archived past bill registered' : 'Recurring overhead bill created',
                    'note' => $note ?: null
                ]);

                $db->commit();

                $groupInfo = null;
                if (!empty($groupId)) {
                    $gStmt = $db->prepare("SELECT id, uid, name FROM bill_groups WHERE id = :gid");
                    $gStmt->execute(['gid' => (int)$groupId]);
                    $groupInfo = $gStmt->fetch(PDO::FETCH_ASSOC);
                }

                $targetAction = $isArchived ? 'archived_bill_created' : 'created';
                SystemLog::write('recurring_bills', $targetAction, $billId, $name, json_encode([
                    'uid'                 => $uid,
                    'bill_uid'            => $uid,
                    'amount'              => Decimal::format($amount, 2) . ' DZD',
                    'category'            => $category,
                    'provider'            => $provider ?: null,
                    'frequency'           => $frequency,
                    'interval_days'       => $intervalDays,
                    'due_day'             => $dueDay,
                    'first_due_date'      => $firstDueDate,
                    'cycle_anchor_date'   => $cycleAnchorDate,
                    'estimated_amount'    => $estimatedAmount ? (Decimal::format($estimatedAmount, 2) . ' DZD') : null,
                    'is_archived'         => $isArchived ? 1 : 0,
                    'group_id'            => $groupId ? (int)$groupId : null,
                    'group_name'          => $groupInfo['name'] ?? null,
                    'group_uid'           => $groupInfo['uid'] ?? null,
                    'default_cash_source' => $cashSource,
                    'payers_count'        => count($payersList),
                    'split_payers'        => array_map(function($p) use ($amount) {
                        $src = ($p['paid_from'] === 'vault') ? 'Cash Safe' : 'Hand (Pocket)';
                        $pct = !empty($p['percent']) ? $p['percent'] : ((Decimal::comp($amount, '0') > 0) ? Decimal::truncate(Decimal::mul(Decimal::div($p['amount'], $amount, 6), '100', 4), 2) : '0.00');
                        return "{$p['username']}: " . Decimal::format($p['amount'], 2) . " DZD ({$pct}%) from {$src}";
                    }, $payersList)
                ]), $creatorUserId);
            }
            Response::json(['ok' => true, 'id' => $billId], 200);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                try { $db->rollBack(); } catch (\Throwable $t) {
                    error_log("Suppressed exception in " . __METHOD__ . ": " . $t->getMessage());
                }
            }
            error_log("SEC-40 Defensive exception in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to save recurring bill due to a system error'], 500);
        }
    }

    /** PUT /api/recurring-bills/{id} - Update an existing recurring bill template */
    public function updateBill(string $id, array $data): void
    {
        // Delegate to storeBill with the id injected into data
        $data['id'] = (int)$id;
        $this->storeBill($data);
    }

    /**
     * Unified Safe Cash Refund Engine for Bill Deletion and Cycle Voiding.
     * Invariants:
     * 1. Only actual settled payments or lead payer safe debits are refunded.
     * 2. If paid_from === 'vault', money is refunded to THAT SPECIFIC USER's safe drawer.
     * 3. If paid_from === 'hand', STRICTLY NO CASH VAULT MOVEMENT is executed.
     * 4. Pending partner settlement tickets are cancelled without refund (no phantom money).
     * 5. Settled partner tickets reverse both debtor and creditor safes if vault.
     */
    private function executeBillRefundEngine(PDO $db, array $bill, ?int $targetCycleId, string $reason, int $actorUserId): array
    {
        (new CashVaultController())->ensureTwoSafes($db);
        $refundSummary = [];
        $billId = (int)$bill['id'];
        $billName = $bill['name'];

        // 1. Fetch all cycles to process
        $cycleWhere = "bill_id = :bid";
        $params = ['bid' => $billId];
        if ($targetCycleId !== null) {
            $cycleWhere .= " AND id = :cid";
            $params['cid'] = $targetCycleId;
        }
        $cStmt = $db->prepare("SELECT * FROM recurring_bill_cycles WHERE $cycleWhere FOR UPDATE");
        $cStmt->execute($params);
        $cycles = $cStmt->fetchAll();

        foreach ($cycles as $cycle) {
            $cId = (int)$cycle['id'];
            $cLabel = $cycle['cycle_label'];

            // A. Check payments recorded in recurring_bill_cycle_payments
            $pStmt = $db->prepare("SELECT * FROM recurring_bill_cycle_payments WHERE cycle_id = :cid AND voided_at IS NULL FOR UPDATE");
            $pStmt->execute(['cid' => $cId]);
            $payments = $pStmt->fetchAll();

            if (!empty($payments)) {
                foreach ($payments as $pay) {
                    $pAmt = (string)$pay['amount'];
                    $pUser = (int)$pay['user_id'];
                    $pSource = $pay['paid_from'];
                    $settlementId = !empty($pay['settlement_id']) ? (int)$pay['settlement_id'] : null;

                    if ($settlementId) {
                        // This payment was tied to a split settlement ticket
                        $sStmt = $db->prepare("SELECT * FROM partner_settlements WHERE id = :sid FOR UPDATE");
                        $sStmt->execute(['sid' => $settlementId]);
                        $settle = $sStmt->fetch();

                        if ($settle) {
                            $settledAmt = (string)($settle['settled_amount'] ?? ($settle['status'] === 'settled' ? $settle['amount'] : '0'));
                            $uncollectedAmt = Decimal::sub((string)$settle['amount'], $settledAmt);

                            if (Decimal::comp($settledAmt, '0') > 0) {
                                // Partner actually paid! Reverse the settlement flow if vault
                                $sSource = $settle['settled_source'] ?? $settle['target_source'] ?? 'vault';
                                if ($sSource === 'vault') {
                                    $debtorId = (int)$settle['payer_user_id'];
                                    $payeeId = (int)$settle['payee_user_id'];
                                    if ($debtorId === $payeeId) {
                                        // Direct bill settled share (liability contribution): Refund back to debtor's safe
                                        CashVaultController::logFlow($db, 'bill_refund', 'in', $settledAmt, 'recurring_bills', $billId, "Refund share for deleted bill: {$billName} ({$cLabel})", $debtorId);
                                    } else {
                                        // Inter-partner transfer share: Refund back to debtor, clawback from payee
                                        CashVaultController::logFlow($db, 'bill_refund', 'in', $settledAmt, 'recurring_bills', $billId, "Refund share for deleted bill: {$billName} ({$cLabel})", $debtorId);
                                        CashVaultController::logFlow($db, 'bill_refund', 'out', $settledAmt, 'recurring_bills', $billId, "Reversal of received share for deleted bill: {$billName} ({$cLabel})", $payeeId);
                                    }
                                    $refundSummary[] = ['user_id' => $debtorId, 'amount' => $settledAmt, 'source' => 'vault', 'type' => 'settled_split_refund'];
                                } else {
                                    $refundSummary[] = ['user_id' => (int)$settle['payer_user_id'], 'amount' => $settledAmt, 'source' => 'hand', 'type' => 'settled_split_hand_reversal'];
                                }
                            }

                            // If there is an uncollected share and the lead payer fronted from vault, refund uncollected share to lead payer's vault!
                            if (Decimal::comp($uncollectedAmt, '0') > 0) {
                                $leadPayerId = (int)$settle['payee_user_id'];
                                $cyclePaidFrom = $cycle['paid_from'] ?? 'vault';
                                if ($cyclePaidFrom === 'vault' && $leadPayerId > 0) {
                                    CashVaultController::logFlow($db, 'bill_refund', 'in', $uncollectedAmt, 'recurring_bills', $billId, "Refund uncollected fronted share for deleted bill: {$billName} ({$cLabel})", $leadPayerId);
                                    $refundSummary[] = ['user_id' => $leadPayerId, 'amount' => $uncollectedAmt, 'source' => 'vault', 'type' => 'uncollected_fronted_share_refund'];
                                }
                            }

                            // Mark settlement cancelled
                            $db->prepare("UPDATE partner_settlements SET status = 'cancelled', cancelled_at = NOW(), cancelled_by = :cb, cancel_reason = :cr WHERE id = :sid")
                               ->execute(['cb' => $actorUserId, 'cr' => "Bill deleted/voided: {$reason}", 'sid' => $settlementId]);
                        }
                    } else {
                        // Direct payment (lead payer)
                        if ($pSource === 'vault' && Decimal::comp($pAmt, '0') > 0) {
                            CashVaultController::logFlow($db, 'bill_refund', 'in', $pAmt, 'recurring_bills', $billId, "Refund payment for deleted bill: {$billName} ({$cLabel})", $pUser);
                            $refundSummary[] = ['user_id' => $pUser, 'amount' => $pAmt, 'source' => 'vault', 'type' => 'direct_payment_refund'];
                        } else {
                            $refundSummary[] = ['user_id' => $pUser, 'amount' => $pAmt, 'source' => 'hand', 'type' => 'direct_payment_hand_no_vault'];
                        }
                    }

                    // Void the payment record
                    $db->prepare("UPDATE recurring_bill_cycle_payments SET voided_at = NOW(), voided_by = :vb, void_reason = :vr WHERE id = :pid")
                       ->execute(['vb' => $actorUserId, 'vr' => $reason, 'pid' => $pay['id']]);
                }
            } else {
                // Fallback for cycles without granular payment rows: check cycle's paid_from and amount_paid
                $paidAmt = (string)$cycle['amount_paid'];
                $paidFrom = $cycle['paid_from'] ?? 'vault';
                $paidBy = (int)($cycle['paid_by'] ?: ($bill['created_by'] ?? $actorUserId));

                if (Decimal::comp($paidAmt, '0') > 0 && $paidFrom === 'vault') {
                    CashVaultController::logFlow($db, 'bill_refund', 'in', $paidAmt, 'recurring_bills', $billId, "Refund payment for deleted bill: {$billName} ({$cLabel})", $paidBy);
                    $refundSummary[] = ['user_id' => $paidBy, 'amount' => $paidAmt, 'source' => 'vault', 'type' => 'cycle_direct_refund'];
                }
            }

            // B. Cancel any remaining pending/disputed partner settlements for this cycle
            $db->prepare("UPDATE partner_settlements 
                SET status = 'cancelled', cancelled_at = NOW(), cancelled_by = :cb, cancel_reason = :cr 
                WHERE (cycle_id = :cid OR (related_entity_type = 'recurring_bill_cycle' AND related_entity_id = :cid2))
                  AND status IN ('pending', 'refused', 'disputed')")
               ->execute(['cb' => $actorUserId, 'cr' => "Bill deleted/voided: {$reason}", 'cid' => $cId, 'cid2' => $cId]);

            // Void or reset cycle
            if ($targetCycleId !== null) {
                // Single cycle void: reset to due
                $db->prepare("UPDATE recurring_bill_cycles 
                    SET amount_paid = 0, status = 'due', paid_at = NULL, paid_by = NULL, voided_at = NOW(), voided_by = :vb, void_reason = :vr, note = CONCAT(COALESCE(note, ''), ' [VOIDED: ', :r, ']'), updated_at = NOW() 
                    WHERE id = :id")
                   ->execute(['vb' => $actorUserId, 'vr' => $reason, 'r' => $reason, 'id' => $cId]);
            } else {
                // Bill deletion: mark cycle voided
                $db->prepare("UPDATE recurring_bill_cycles 
                    SET voided_at = NOW(), voided_by = :vb, void_reason = :vr, updated_at = NOW() 
                    WHERE id = :id")
                   ->execute(['vb' => $actorUserId, 'vr' => $reason, 'id' => $cId]);
            }
        }

        // C. Cancel any bill-level partner settlements
        $db->prepare("UPDATE partner_settlements 
            SET status = 'cancelled', cancelled_at = NOW(), cancelled_by = :cb, cancel_reason = :cr 
            WHERE (bill_id = :bid OR (related_entity_type = 'recurring_bills' AND related_entity_id = :bid2))
              AND status IN ('pending', 'refused', 'disputed')")
           ->execute(['cb' => $actorUserId, 'cr' => "Bill deleted: {$reason}", 'bid' => $billId, 'bid2' => $billId]);

        // D. Dismiss notifications for this bill / settlements
        $db->prepare("UPDATE notifications SET is_read = 1 WHERE (entity_type = 'recurring_bills' AND entity_id = :bid) OR (entity_type = 'partner_settlement' AND stage_tag LIKE :tag)")
           ->execute(['bid' => $billId, 'tag' => "%_{$billId}%"]);

        return $refundSummary;
    }

    /** DELETE /api/recurring-bills/{id} - Soft-delete a recurring bill with dual deletion modes */
    public function destroyBill(string $id, array $data = []): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $stmt = $db->prepare("SELECT * FROM recurring_bills WHERE id = :id AND deleted_at IS NULL");
        $stmt->execute(['id' => $id]);
        $bill = $stmt->fetch();
        if (!$bill) {
            Response::json(['error' => 'Bill not found or already deleted'], 404);
            return;
        }

        $reason = trim((string)($data['delete_reason'] ?? ($data['reason'] ?? '')));
        if ($reason === '') {
            Response::json(['error' => 'Deletion reason is required'], 400);
            return;
        }
        $userId = (int)($_SESSION['user_id'] ?? 1);
        $isArchived = !empty($bill['is_archived']);

        if (!$isArchived && empty($bill['is_paused'])) {
            Response::json(['error' => 'You cannot delete an active circle while it is running. You must pause the circle first before deleting it.'], 422);
            return;
        }

        if (!$isArchived) {
            // Guard: Cannot delete circle if any period bill is in Phase 2 with partial payments and not fully completed.
            $cycleCheckStmt = $db->prepare("SELECT c.id, c.cycle_label, c.due_date, c.amount_expected, c.amount_paid, c.status, c.agreement_status, c.bill_created,
                (SELECT COUNT(*) FROM recurring_bill_cycle_payments WHERE cycle_id = c.id AND voided_at IS NULL AND amount > 0) AS active_payments_count,
                (SELECT COUNT(*) FROM partner_settlements WHERE cycle_id = c.id AND status = 'settled') AS settled_splits_count,
                (SELECT COUNT(*) FROM partner_settlements WHERE cycle_id = c.id AND status = 'pending') AS pending_splits_count
                FROM recurring_bill_cycles c
                WHERE c.bill_id = :bid AND c.voided_at IS NULL");
            $cycleCheckStmt->execute(['bid' => (int)$id]);
            $allCycles = $cycleCheckStmt->fetchAll(PDO::FETCH_ASSOC);

            $blockingCycles = [];
            foreach ($allCycles as $cyc) {
                $isPaid = ($cyc['status'] === 'paid') || (Decimal::comp((string)$cyc['amount_paid'], (string)$cyc['amount_expected']) >= 0 && (int)$cyc['pending_splits_count'] === 0 && Decimal::comp((string)$cyc['amount_expected'], '0') > 0);
                $hasPayment = Decimal::comp((string)$cyc['amount_paid'], '0') > 0 || (int)$cyc['active_payments_count'] > 0 || (int)$cyc['settled_splits_count'] > 0;

                if (!$isPaid && $hasPayment) {
                    $blockingCycles[] = [
                        'id'              => (int)$cyc['id'],
                        'cycle_label'     => $cyc['cycle_label'],
                        'due_date'        => $cyc['due_date'],
                        'amount_expected' => (string)$cyc['amount_expected'],
                        'amount_paid'     => (string)$cyc['amount_paid'],
                        'remaining'       => Decimal::sub((string)$cyc['amount_expected'], (string)$cyc['amount_paid']),
                        'status'          => $cyc['status'],
                        'agreement_status'=> $cyc['agreement_status']
                    ];
                }
            }

            if (!empty($blockingCycles)) {
                $firstBlock = $blockingCycles[0];
                $paidFmt = Decimal::format($firstBlock['amount_paid'], 2);
                $expFmt  = Decimal::format($firstBlock['amount_expected'], 2);
                Response::json([
                    'error' => "Cannot delete circle: Period bill for period '{$firstBlock['cycle_label']}' is in Phase 2 with partial payments collected ({$paidFmt} / {$expFmt} DZD) and is not fully completed. You must fully complete or settle this bill before deleting the circle.",
                    'blocking_cycles' => $blockingCycles
                ], 422);
                return;
            }
        }

        $db->beginTransaction();
        try {
            $refundSummary = [];

            if ($isArchived) {
                // For single archived bill, execute refund engine as standard
                $refundSummary = $this->executeBillRefundEngine($db, $bill, null, $reason, $userId);
            } else {
                // For active circle delete: soft-delete template without refunding past paid bills,
                // preserving past fulfilled cycles for the "Deleted Circles" section.
                $db->prepare("UPDATE partner_settlements 
                    SET status = 'cancelled', cancelled_at = NOW(), cancelled_by = :cb, cancel_reason = :cr 
                    WHERE bill_id = :bid AND status IN ('pending', 'refused', 'disputed')")
                   ->execute(['cb' => $userId, 'cr' => "Circle deleted: {$reason}", 'bid' => (int)$id]);
            }

            $stmt = $db->prepare("UPDATE recurring_bills SET deleted_at = NOW(), deleted_by = :by, delete_reason = :reason, updated_at = NOW() WHERE id = :id");
            $stmt->execute([
                'by'     => $userId,
                'reason' => $reason ?: null,
                'id'     => $id
            ]);

            // Log to expense_history
            $hist = $db->prepare("INSERT INTO expense_history (bill_id, edited_by, action, reason, changes, created_at) VALUES (:bid, :by, 'deleted', :reason, :ch, NOW())");
            $hist->execute([
                'bid'    => $id,
                'by'     => $userId,
                'reason' => $reason ?: null,
                'ch'     => json_encode([
                    'name'         => $bill['name'],
                    'refunds'      => $refundSummary
                ])
            ]);

            $db->commit();

            $billGroupId = $bill['group_id'] ? (int)$bill['group_id'] : null;
            $billGroupName = null;
            $billGroupUid  = null;
            if ($billGroupId) {
                $bgStmt = $db->prepare('SELECT uid, name FROM bill_groups WHERE id = :id LIMIT 1');
                $bgStmt->execute(['id' => $billGroupId]);
                $bg = $bgStmt->fetch(PDO::FETCH_ASSOC);
                if ($bg) {
                    $billGroupName = $bg['name'];
                    $billGroupUid  = $bg['uid'];
                }
            }

            $targetAction = $isArchived ? 'archived_bill_deleted' : 'deleted';
            SystemLog::write('recurring_bills', $targetAction, (int)$id, $bill['name'], json_encode([
                'uid'            => $bill['uid'],
                'bill_uid'       => $bill['uid'],
                'frequency'      => $bill['frequency'] ?? null,
                'is_archived'    => $isArchived ? 1 : 0,
                'amount'         => (string)$bill['amount'],
                'group_id'       => $billGroupId,
                'group_name'     => $billGroupName,
                'group_uid'      => $billGroupUid,
                'reason'         => $reason,
                'refunds'        => $refundSummary,
                'deleted_by'     => $userId
            ]), $userId);

            Response::json([
                'ok'           => true,
                'refunds'      => $refundSummary
            ], 200);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                try { $db->rollBack(); } catch (\Throwable $t) {
                    error_log("Suppressed exception in " . __METHOD__ . ": " . $t->getMessage());
                }
            }
            error_log("SEC-40 Defensive exception in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to delete bill due to a system error'], 500);
        }
    }

    /** POST /api/recurring-bills/{id}/restore - Restore a soft-deleted recurring bill */
    public function restoreBill(string $id, array $data = []): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $stmt = $db->prepare("SELECT * FROM recurring_bills WHERE id = :id AND deleted_at IS NOT NULL");
        $stmt->execute(['id' => (int)$id]);
        $bill = $stmt->fetch();
        if (!$bill) {
            Response::json(['error' => 'Bill not found or not deleted'], 404);
            return;
        }

        $userId = (int)($_SESSION['user_id'] ?? 1);
        $reason = trim((string)($data['reason'] ?? $data['restore_reason'] ?? ''));
        if ($reason === '') {
            Response::json(['error' => 'Reason is required to restore a recurring bill'], 422);
            return;
        }

        $cStmt = $db->prepare("SELECT * FROM recurring_bill_cycles WHERE bill_id = :bid ORDER BY id ASC");
        $cStmt->execute(['bid' => (int)$id]);
        $cycles = $cStmt->fetchAll() ?: [];

        $isArchived = !empty($bill['is_archived']);
        $hasSplits = false;

        foreach ($cycles as $c) {
            if (!empty($c['split_data'])) {
                $decoded = is_array($c['split_data']) ? $c['split_data'] : json_decode((string)$c['split_data'], true);
                if (is_array($decoded) && count($decoded) > 0) {
                    $hasSplits = true;
                    break;
                }
            }
        }
        if (!$hasSplits) {
            $psCount = (int)$db->query("SELECT COUNT(*) FROM partner_settlements 
                WHERE (bill_id = " . (int)$id . " OR (related_entity_type = 'recurring_bill_cycle' AND related_entity_id IN (SELECT id FROM recurring_bill_cycles WHERE bill_id = " . (int)$id . ")))")->fetchColumn();
            if ($psCount > 0) {
                $hasSplits = true;
            }
        }

        // 1. Calculate amount to re-deduct from safe if single-payer paid from vault
        // For ARCHIVED bills: ZERO cash is re-deducted upon restoration. Status stays dormant (restored_draft) until explicit Edit & Update.
        $reDeductAmount = '0';
        $reDeductUser = (int)(!empty($cycles[0]['paid_by']) ? $cycles[0]['paid_by'] : ($bill['created_by'] ?: $userId));

        if (!$isArchived) {
            // For active recurring circles, sum any voided payments that were paid from vault
            $vpStmt = $db->prepare("SELECT COALESCE(SUM(amount), 0) FROM recurring_bill_cycle_payments WHERE bill_id = :bid AND paid_from = 'vault' AND voided_at IS NOT NULL");
            $vpStmt->execute(['bid' => (int)$id]);
            $activeVaultPaid = (string)$vpStmt->fetchColumn();
            if (Decimal::comp($activeVaultPaid, '0') > 0) {
                $reDeductAmount = $activeVaultPaid;
            }
        }

        // 2. Pre-flight Safe Balance Check
        if (Decimal::comp($reDeductAmount, '0') > 0) {
            $vault = CashVaultController::getSafeForUser($db, $reDeductUser);
            $vStmt = $db->prepare("SELECT current_balance, name FROM cash_vaults WHERE id = :id LIMIT 1");
            $vStmt->execute(['id' => (int)$vault['id']]);
            $freshVault = $vStmt->fetch();
            $curBal = $freshVault ? (string)$freshVault['current_balance'] : (string)($vault['current_balance'] ?? '0');
            $safeName = $freshVault ? ($freshVault['name'] ?: 'Cash Safe') : ($vault['name'] ?: 'Cash Safe');

            if (Decimal::comp($curBal, $reDeductAmount) < 0) {
                Response::json([
                    'error' => "Cannot restore bill: Insufficient funds in {$safeName}. Available: " . Decimal::format($curBal, 2) . " DZD, Required: " . Decimal::format($reDeductAmount, 2) . " DZD.",
                    'available' => $curBal,
                    'required'  => $reDeductAmount
                ], 422);
                return;
            }
        }

        $db->beginTransaction();
        try {
            // 3. Re-deduct cash from vault for active circles (if applicable)
            if (Decimal::comp($reDeductAmount, '0') > 0) {
                CashVaultController::logFlow(
                    $db,
                    'adjustment',
                    'out',
                    $reDeductAmount,
                    'recurring_bills',
                    (int)$id,
                    "Restoration: Re-disbursed bill #{$id} ({$bill['name']}) - Reason: {$reason}",
                    $reDeductUser
                );
            }

            // 4. Update recurring_bills table:
            // Archived bills enter dormant restored_draft state (pending explicit Edit & Update activation); active circles wake up strictly in PAUSED state
            $agreementStatus = $isArchived ? 'restored_draft' : 'none';
            $settlementStatus = $isArchived ? 'draft' : 'none';
            $isLocked = 0;

            if (!$isArchived) {
                // Active circle restored: MUST be restored in PAUSED state (User Rule: Circle Restoration Auto-Pause standard)
                $stmt = $db->prepare("UPDATE recurring_bills 
                    SET deleted_at = NULL, deleted_by = NULL, delete_reason = NULL, 
                        is_paused = 1, paused_at = NOW(), paused_by = :paused_by,
                        resumed_at = NULL, resumed_by = NULL,
                        agreement_status = :agr, settlement_status = :ss, is_locked_for_edit = :lck,
                        has_refusal = 0, refused_at = NULL, refused_by = NULL, refusal_reason = NULL,
                        updated_at = NOW(), edited_by = :by 
                    WHERE id = :id");
                $stmt->execute([
                    'paused_by' => $userId,
                    'agr'       => $agreementStatus,
                    'ss'        => $settlementStatus,
                    'lck'       => $isLocked,
                    'by'        => $userId,
                    'id'        => (int)$id
                ]);
            } else {
                $stmt = $db->prepare("UPDATE recurring_bills 
                    SET deleted_at = NULL, deleted_by = NULL, delete_reason = NULL, 
                        agreement_status = 'restored_draft', settlement_status = 'draft', is_locked_for_edit = 0,
                        has_refusal = 0, refused_at = NULL, refused_by = NULL, refusal_reason = NULL,
                        updated_at = NOW(), edited_by = :by 
                    WHERE id = :id");
                $stmt->execute([
                    'by'  => $userId,
                    'id'  => (int)$id
                ]);
            }

            // 5. Un-void cycles and cycle payments
            if (!empty($cycles)) {
                if ($isArchived) {
                    $cUpd = $db->prepare("UPDATE recurring_bill_cycles 
                        SET voided_at = NULL, voided_by = NULL, void_reason = NULL,
                            agreement_status = 'restored_draft', split_status = 'draft', is_locked_for_edit = 0,
                            has_refusal = 0, status = 'due', amount_paid = 0, updated_at = NOW() 
                        WHERE bill_id = :bid");
                    $cUpd->execute([
                        'bid' => (int)$id
                    ]);
                } else {
                    // For active bills, restore cycle statuses cleanly based on amount_paid vs amount_expected
                    $cUpd = $db->prepare("UPDATE recurring_bill_cycles 
                        SET voided_at = NULL, voided_by = NULL, void_reason = NULL,
                            is_locked_for_edit = 0, has_refusal = 0,
                            status = CASE 
                                WHEN amount_paid >= amount_expected AND amount_expected > 0 THEN 'paid'
                                WHEN amount_paid > 0 THEN 'partial'
                                WHEN due_date <= CURDATE() THEN 'due'
                                ELSE 'upcoming'
                            END,
                            updated_at = NOW() 
                        WHERE bill_id = :bid");
                    $cUpd->execute(['bid' => (int)$id]);

                    // Un-void cycle payments for active recurring bills only
                    $db->prepare("UPDATE recurring_bill_cycle_payments 
                        SET voided_at = NULL, voided_by = NULL, void_reason = NULL 
                        WHERE bill_id = :bid")
                       ->execute(['bid' => (int)$id]);
                }
            }

            // 6. For split archived bills: suppress notifications and mark settlements dormant
            if ($isArchived && $hasSplits) {
                $db->prepare("UPDATE partner_settlements 
                    SET description = CASE 
                            WHEN description LIKE '%(Restored)%' THEN description 
                            ELSE CONCAT('[Restored - Pending Update] ', description) 
                        END
                    WHERE (bill_id = :bid OR (related_entity_type = 'recurring_bill_cycle' AND related_entity_id IN (SELECT id FROM recurring_bill_cycles WHERE bill_id = :bid2)))")
                   ->execute(['bid' => (int)$id, 'bid2' => (int)$id]);
            }

            // 7. Log to expense_history
            $hist = $db->prepare("INSERT INTO expense_history (bill_id, edited_by, action, reason, changes, created_at) 
                VALUES (:bid, :by, 'restored', :r, :ch, NOW())");
            $hist->execute([
                'bid' => (int)$id,
                'by'  => $userId,
                'r'   => $reason,
                'ch'  => json_encode([
                    'name'             => $bill['name'],
                    'reason'           => $reason,
                    'agreement_status' => $agreementStatus,
                    'is_paused'        => $isArchived ? 0 : 1
                ], JSON_UNESCAPED_UNICODE)
            ]);

            $db->commit();

            $billGroupId = $bill['group_id'] ? (int)$bill['group_id'] : null;
            $billGroupName = null;
            $billGroupUid  = null;
            if ($billGroupId) {
                $bgStmt = $db->prepare('SELECT uid, name FROM bill_groups WHERE id = :id LIMIT 1');
                $bgStmt->execute(['id' => $billGroupId]);
                $bg = $bgStmt->fetch(PDO::FETCH_ASSOC);
                if ($bg) {
                    $billGroupName = $bg['name'];
                    $billGroupUid  = $bg['uid'];
                }
            }

            $targetAction = $isArchived ? 'archived_bill_restored' : 'restored';
            SystemLog::write('recurring_bills', $targetAction, (int)$id, $bill['name'], json_encode([
                'uid'              => $bill['uid'] ?? null,
                'bill_uid'         => $bill['uid'] ?? null,
                'frequency'        => $bill['frequency'] ?? null,
                'is_archived'      => $isArchived ? 1 : 0,
                'amount'           => (string)$bill['amount'],
                'group_id'         => $billGroupId,
                'group_name'       => $billGroupName,
                'group_uid'        => $billGroupUid,
                'reason'           => $reason,
                'restored_by'      => $userId,
                'is_paused'        => $isArchived ? 0 : 1,
                'agreement_status' => $agreementStatus,
                're_deducted'      => $reDeductAmount
            ], JSON_UNESCAPED_UNICODE), $userId);

            Response::json([
                'ok'          => true,
                'is_paused'   => $isArchived ? 0 : 1,
                'is_archived' => $isArchived ? 1 : 0,
                'message'     => $isArchived ? 'Bill restored successfully.' : 'Active circle restored in paused state. Resume when ready to restart.'
            ], 200);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("SEC-40 Defensive exception in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to restore bill due to a system error'], 500);
        }
    }

    /** POST /api/recurring-bills/{id}/pause - Pause a recurring bill */
    public function pauseBill(string $id, array $data = []): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $stmt = $db->prepare("SELECT id, uid, name, is_paused, frequency, cycle_anchor_date, amount FROM recurring_bills WHERE id = :id AND deleted_at IS NULL");
        $stmt->execute(['id' => $id]);
        $bill = $stmt->fetch();
        if (!$bill) {
            Response::json(['error' => 'Bill not found'], 404);
            return;
        }

        if (!empty($bill['is_paused'])) {
            Response::json(['ok' => true, 'is_paused' => 1, 'message' => 'Bill is already paused']);
            return;
        }

        $userId = (int)($_SESSION['user_id'] ?? 1);
        $reason = trim((string)($data['reason'] ?? ($data['pause_reason'] ?? '')));
        $db->prepare("UPDATE recurring_bills SET is_paused = 1, paused_at = NOW(), paused_by = :uid, updated_at = NOW() WHERE id = :id")
           ->execute(['uid' => $userId, 'id' => $id]);

        $hist = $db->prepare("INSERT INTO expense_history (bill_id, edited_by, action, reason, created_at) VALUES (:bid, :by, 'paused', :r, NOW())");
        $hist->execute(['bid' => $id, 'by' => $userId, 'r' => $reason ?: null]);

        SystemLog::write('recurring_bills', 'paused', (int)$id, $bill['name'], json_encode([
            'uid'               => $bill['uid'] ?? null,
            'bill_uid'          => $bill['uid'] ?? null,
            'frequency'         => $bill['frequency'] ?? null,
            'cycle_anchor_date' => $bill['cycle_anchor_date'] ?? null,
            'amount'            => (string)($bill['amount'] ?? '0'),
            'paused_by'         => $userId,
            'reason'            => $reason ?: null
        ]), $userId);
        Response::json(['ok' => true, 'is_paused' => 1]);
    }

    /** POST /api/recurring-bills/{id}/resume - Resume a paused recurring schedule */
    public function resumeBill(string $id, array $data = []): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $stmt = $db->prepare("SELECT * FROM recurring_bills WHERE id = :id AND deleted_at IS NULL");
        $stmt->execute(['id' => (int)$id]);
        $bill = $stmt->fetch();
        if (!$bill) {
            Response::json(['error' => 'Recurring schedule not found'], 404);
            return;
        }

        $userId = (int)($_SESSION['user_id'] ?? 1);
        $resumeMode = $data['resume_mode'] ?? 'maintain_anchor';
        $resumeSubmode = $data['resume_submode'] ?? ($resumeMode === 'recent_bill' ? 'recent_bill' : ($resumeMode === 'manual_date' ? 'manual_date' : null));
        $newAnchorDate = !empty($data['new_anchor_date']) ? date('Y-m-d', strtotime((string)$data['new_anchor_date'])) : null;
        $sourceCycleId = !empty($data['source_cycle_id']) ? (int)$data['source_cycle_id'] : null;
        $reason = trim((string)($data['reason'] ?? $data['resume_reason'] ?? ''));

        $isNewAnchor = (in_array($resumeMode, ['new_anchor', 'recent_bill', 'bill_date', 'manual_date'], true) && $newAnchorDate);

        $db->beginTransaction();
        try {
            if ($isNewAnchor) {
                $newDueDay = (int)date('d', strtotime($newAnchorDate));
                $resumedFirstDue = $this->computeNextDueDate($newAnchorDate, $bill['frequency'] ?? 'monthly', $newDueDay, (int)($bill['interval_days'] ?? 0));
                // Update schedule with new anchor date and unpause
                $db->prepare("UPDATE recurring_bills 
                    SET is_paused = 0, resumed_at = NOW(), resumed_by = :uid,
                        cycle_anchor_date = :anchor, first_due_date = :fdd, next_due_date = :ndd, due_day = :dday,
                        updated_at = NOW()
                    WHERE id = :id")
                   ->execute([
                       'uid'     => $userId,
                       'anchor'  => $newAnchorDate,
                       'fdd'     => $resumedFirstDue,
                       'ndd'     => $resumedFirstDue,
                       'dday'    => $newDueDay,
                       'id'      => (int)$id
                   ]);

                // Clean up any stale unfulfilled cycles from the paused window prior to the new anchor date
                // IMMUNITY INVARIANT: MUST NOT delete authentic period bills (bill_created = 1) created in the past
                $db->prepare("DELETE FROM recurring_bill_cycles 
                    WHERE bill_id = :bid 
                      AND status != 'paid' 
                      AND amount_paid = 0 
                      AND (bill_created = 0 OR bill_created IS NULL) 
                      AND due_date < :anchor")
                   ->execute([
                       'bid'    => (int)$id,
                       'anchor' => $newAnchorDate
                   ]);
            } else {
                // Maintain existing anchor and schedule cadence
                $db->prepare("UPDATE recurring_bills 
                    SET is_paused = 0, resumed_at = NOW(), resumed_by = :uid, updated_at = NOW() 
                    WHERE id = :id")
                   ->execute([
                       'uid' => $userId,
                       'id'  => (int)$id
                   ]);
            }

            // Refresh bill data and ensure forward liveness cycle
            $fStmt = $db->prepare("SELECT * FROM recurring_bills WHERE id = :id");
            $fStmt->execute(['id' => (int)$id]);
            $freshBill = $fStmt->fetch();
            if ($freshBill) {
                $this->ensureCyclesUpToDate($db, $freshBill);
            }

            $hist = $db->prepare("INSERT INTO expense_history (bill_id, edited_by, action, reason, changes, created_at) VALUES (:bid, :by, 'resumed', :r, :ch, NOW())");
            $hist->execute([
                'bid' => (int)$id,
                'by'  => $userId,
                'r'   => $reason ?: null,
                'ch'  => json_encode([
                    'resume_mode'     => $resumeMode,
                    'resume_submode'  => $resumeSubmode,
                    'new_anchor_date' => $newAnchorDate,
                    'source_cycle_id' => $sourceCycleId,
                    'reason'          => $reason
                ])
            ]);

            $db->commit();

            $effectiveNextDue = $isNewAnchor ? $resumedFirstDue : ($bill['next_due_date'] ?? null);
            $effectiveAnchor  = $isNewAnchor ? $newAnchorDate : ($bill['cycle_anchor_date'] ?? null);

            SystemLog::write('recurring_bills', 'resumed', (int)$id, $bill['name'], json_encode([
                'uid'               => $bill['uid'] ?? null,
                'bill_uid'          => $bill['uid'] ?? null,
                'resumed_by'        => $userId,
                'resume_mode'       => $resumeMode,
                'resume_submode'    => $resumeSubmode,
                'new_anchor_date'   => $newAnchorDate,
                'cycle_anchor_date' => $effectiveAnchor,
                'old_anchor_date'   => $bill['cycle_anchor_date'] ?? null,
                'next_due_date'     => $effectiveNextDue,
                'source_cycle_id'   => $sourceCycleId,
                'reason'            => $reason ?: null
            ]), $userId);

            Response::json([
                'ok'              => true,
                'is_paused'       => 0,
                'resume_mode'     => $resumeMode,
                'new_anchor_date' => $newAnchorDate,
                'message'         => 'Recurring schedule resumed successfully.'
            ]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("SEC-40 Defensive exception in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to resume schedule due to a system error'], 500);
        }
    }

    /** POST /api/recurring-bills/cycles/{id}/create-bill - Spawn an authentic Period Bill for an unbilled period */
    public function createPeriodBill(string $cycleId, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $cStmt = $db->prepare("SELECT c.*, b.name AS bill_name, b.category AS bill_category, b.uid AS bill_uid, b.default_cash_source, b.cycle_anchor_date, b.deleted_at AS circle_deleted_at, b.is_paused AS circle_is_paused 
            FROM recurring_bill_cycles c 
            JOIN recurring_bills b ON c.bill_id = b.id 
            WHERE c.id = :id AND c.voided_at IS NULL");
        $cStmt->execute(['id' => (int)$cycleId]);
        $cycle = $cStmt->fetch();

        if (!$cycle) {
            Response::json(['error' => 'Period cycle not found'], 404);
            return;
        }

        if (!empty($cycle['circle_deleted_at'])) {
            Response::json(['error' => 'Cannot create a period bill inside a deleted circle. Please restore the circle first.'], 422);
            return;
        }

        if (!empty($cycle['circle_is_paused'])) {
            Response::json(['error' => 'Cannot create a period bill inside a paused circle. Please resume the circle first.'], 422);
            return;
        }

        if (!empty($cycle['bill_created'])) {
            Response::json(['error' => 'A period bill has already been created for this cycle. You can edit or reset it.'], 422);
            return;
        }

        $userId = (int)($_SESSION['user_id'] ?? 1);
        $amountRaw = trim((string)($data['amount'] ?? ''));
        if (!is_numeric($amountRaw) || Decimal::comp($amountRaw, '0') <= 0) {
            Response::json(['error' => 'Bill amount must be a positive number'], 422);
            return;
        }
        $amount = Decimal::truncate($amountRaw, 16);

        $dueDate = $cycle['due_date'];
        $rawInvoiceDate = $data['invoice_date'] ?? ($data['declared_bill_date'] ?? ($data['bill_date'] ?? null));
        $invoiceDate = (!empty($rawInvoiceDate) && strtotime((string)$rawInvoiceDate) !== false)
            ? date('Y-m-d', strtotime((string)$rawInvoiceDate))
            : null;
        $rawReceivedDate = $data['received_date'] ?? ($data['bill_received_date'] ?? null);
        $receivedDate = (!empty($rawReceivedDate) && strtotime((string)$rawReceivedDate) !== false)
            ? date('Y-m-d', strtotime((string)$rawReceivedDate))
            : null;
        $customPaidDate = !empty($data['custom_paid_date']) ? date('Y-m-d', strtotime((string)$data['custom_paid_date'])) : null;
        $rawSource = $data['paid_from'] ?? ($data['cash_source'] ?? 'vault');
        $paidFrom = in_array($rawSource, ['vault', 'hand'], true) ? $rawSource : 'vault';
        $receiptRef = trim((string)($data['receipt_ref'] ?? ''));
        $receiptImage = $data['receipt_image'] ?? null;
        if (!empty($receiptImage)) {
            try {
                $receiptImage = self::validateReceiptImage((string)$receiptImage);
            } catch (\InvalidArgumentException $e) {
                Response::json(['error' => $e->getMessage()], 422);
                return;
            }
        }
        $receiptImageName = $data['receipt_image_name'] ?? null;
        $note = trim((string)($data['note'] ?? ($data['notes'] ?? '')));
        $splitPayers = (!empty($data['split_payers']) && is_array($data['split_payers'])) ? $data['split_payers'] : ((!empty($data['payers']) && is_array($data['payers'])) ? $data['payers'] : null);
        $hasSplits = ($splitPayers && count($splitPayers) > 0);
        $payNow = !empty($data['pay_now']) || !empty($data['paid_now']);

        $db->beginTransaction();
        try {
            $billId = (int)$cycle['bill_id'];
            $cycleLabel = $cycle['cycle_label'];
            $billName = $cycle['bill_name'];

            if ($hasSplits) {
                // Multi-Partner Split -> Phase 1: Agreement Phase
                $agreementStatus = 'pending_acceptance';
                $splitStatus = 'split';
                $isLocked = 0;
                $cycStatus = 'due';

                // Delete any previous active settlements and un-voided payments for this cycle (preserves voided history)
                $db->prepare("DELETE FROM partner_settlements 
                    WHERE (cycle_id = :cid OR (related_entity_type = 'recurring_bill_cycle' AND related_entity_id = :cid2))
                      AND status != 'cancelled'")
                   ->execute(['cid' => (int)$cycleId, 'cid2' => (int)$cycleId]);
                $db->prepare("DELETE FROM recurring_bill_cycle_payments WHERE cycle_id = :cid AND voided_at IS NULL")
                   ->execute(['cid' => (int)$cycleId]);

                foreach ($splitPayers as $payer) {
                    $pUid = (int)($payer['user_id'] ?? $userId);
                    $pAmtRaw = trim((string)($payer['amount'] ?? '0'));
                    $pAmt = (is_numeric($pAmtRaw) && Decimal::comp($pAmtRaw, '0') > 0) ? Decimal::truncate($pAmtRaw, 16) : '0';
                    $pFrom = in_array($payer['paid_from'] ?? 'vault', ['vault', 'hand'], true) ? $payer['paid_from'] : 'vault';
                    if (Decimal::comp($pAmt, '0') <= 0) continue;

                    $settleUid = 'SET-SPLIT-' . date('Ymd') . '-' . strtoupper(substr(uniqid(), -6));
                    $detailsJson = json_encode([
                        'bill_id'       => $billId,
                        'cycle_id'      => (int)$cycleId,
                        'cycle_label'   => $cycleLabel,
                        'total_bill'    => $amount,
                        'share'         => $pAmt,
                        'target_source' => $pFrom,
                        'is_period_bill'=> true
                    ]);

                    $isCreator = ($pUid === (int)$userId);
                    $sIns = $db->prepare("INSERT INTO partner_settlements 
                        (uid, payer_user_id, payee_user_id, amount, original_amount, settlement_type, status, acceptance_status, accepted_at, accepted_by, release_status, target_source, related_entity_type, related_entity_id, bill_id, cycle_id, description, details, created_by, created_at)
                        VALUES (:uid, :payer, :payee, :amt, :amt, 'bill_split', 'pending', :agr, :aat, :aby, 'released', :src, 'recurring_bill_cycle', :cid, :bid, :cid2, :desc, :det, :cb, NOW())");
                    $sIns->execute([
                        'uid'   => $settleUid,
                        'payer' => $pUid,
                        'payee' => $pUid,
                        'amt'   => $pAmt,
                        'agr'   => $isCreator ? 'accepted' : 'pending',
                        'aat'   => $isCreator ? date('Y-m-d H:i:s') : null,
                        'aby'   => $isCreator ? $userId : null,
                        'src'   => $pFrom,
                        'cid'   => (int)$cycleId,
                        'bid'   => $billId,
                        'cid2'  => (int)$cycleId,
                        'desc'  => "Period bill share: {$billName} ({$cycleLabel})",
                        'det'   => $detailsJson,
                        'cb'    => $userId
                    ]);
                    $settlementId = (int)$db->lastInsertId();

                    $cpIns = $db->prepare("INSERT INTO recurring_bill_cycle_payments (cycle_id, bill_id, user_id, amount, paid_from, paid_at, receipt_ref, settlement_id, note, created_by, created_at)
                        VALUES (:cid, :bid, :uid, :amt, :pf, NULL, :ref, :sid, :note, :cb, NOW())");
                    $cpIns->execute([
                        'cid'  => (int)$cycleId,
                        'bid'  => $billId,
                        'uid'  => $pUid,
                        'amt'  => $pAmt,
                        'pf'   => $pFrom,
                        'ref'  => $receiptRef,
                        'sid'  => $settlementId,
                        'note' => $note ?: "Period split share for {$billName} ({$cycleLabel})",
                        'cb'   => $userId
                    ]);

                    if ($pUid !== $userId) {
                        try {
                            $cleanAmount = rtrim(rtrim(Decimal::format($amount, 2), '0'), '.');
                            $cleanPAmt   = rtrim(rtrim(Decimal::format($pAmt, 2), '0'), '.');
                            $notifIns = $db->prepare("INSERT INTO notifications 
                                (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at)
                                VALUES (:uid, 'settlement', :t, :b, :url, 'partner_settlement', :eid, :stage, 0, NOW())");
                            $notifIns->execute([
                                'uid'   => $pUid,
                                't'     => 'New Period Bill Agreement',
                                'b'     => "A period bill of {$cleanAmount} DZD was recorded for {$billName} ({$cycleLabel}). Your share is {$cleanPAmt} DZD.",
                                'url'   => "#page-bills?tab=circles&drilldown={$billId}",
                                'eid'   => $settlementId,
                                'stage' => "period_bill_created_{$cycleId}"
                            ]);
                        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
                    }
                }

                $updC = $db->prepare("UPDATE recurring_bill_cycles 
                    SET bill_created = 1, bill_created_at = NOW(), bill_created_by = :uid,
                        amount_expected = :amt, amount_paid = 0, due_date = :dd,
                        status = :st, agreement_status = :agr, split_status = :sps, is_locked_for_edit = 0,
                        receipt_ref = :ref, receipt_image = :img, receipt_image_name = :img_name,
                        split_data = :sd, note = :note, declared_paid_at = :dpa, invoice_date = :idate, received_date = :rdate, updated_at = NOW()
                    WHERE id = :cid");
                $updC->execute([
                    'uid'      => $userId,
                    'amt'      => $amount,
                    'dd'       => $dueDate,
                    'st'       => $cycStatus,
                    'agr'      => $agreementStatus,
                    'sps'      => $splitStatus,
                    'ref'      => $receiptRef,
                    'img'      => $receiptImage,
                    'img_name' => $receiptImageName,
                    'sd'       => json_encode($splitPayers),
                    'note'     => $note,
                    'dpa'      => $customPaidDate,
                    'idate'    => $invoiceDate,
                    'rdate'    => $receivedDate,
                    'cid'      => (int)$cycleId
                ]);
            } else {
                // Single Payer Mode (Strict Invoicing - no premature payment, zero cash vault deduction)
                $agreementStatus = 'all_accepted';
                $splitStatus = 'none';
                $isLocked = 0;
                $cycStatus = (strtotime($dueDate) > strtotime(date('Y-m-d'))) ? 'upcoming' : 'due';
                $paidAmount = '0';
                $paidAt = null;
                $paidBy = null;

                $updC = $db->prepare("UPDATE recurring_bill_cycles 
                    SET bill_created = 1, bill_created_at = NOW(), bill_created_by = :uid,
                        amount_expected = :amt, amount_paid = :paid, due_date = :dd,
                        status = :st, agreement_status = :agr, split_status = :sps, is_locked_for_edit = :lck,
                        paid_from = :pf, paid_at = :pa, paid_by = :pb, declared_paid_at = :dpa, invoice_date = :idate, received_date = :rdate,
                        receipt_ref = :ref, receipt_image = :img, receipt_image_name = :img_name,
                        split_data = NULL, note = :note, updated_at = NOW()
                    WHERE id = :cid");
                $updC->execute([
                    'uid'      => $userId,
                    'amt'      => $amount,
                    'paid'     => $paidAmount,
                    'dd'       => $dueDate,
                    'st'       => $cycStatus,
                    'agr'      => $agreementStatus,
                    'sps'      => $splitStatus,
                    'lck'      => $isLocked,
                    'pf'       => $paidFrom,
                    'pa'       => $paidAt,
                    'pb'       => $paidBy,
                    'ref'      => $receiptRef,
                    'img'      => $receiptImage,
                    'img_name' => $receiptImageName,
                    'note'     => $note,
                    'dpa'      => $customPaidDate,
                    'idate'    => $invoiceDate,
                    'rdate'    => $receivedDate,
                    'cid'      => (int)$cycleId
                ]);

                // Clean any previous active settlements and un-voided payments for this cycle (preserves voided history)
                $delSt = $db->prepare("DELETE FROM partner_settlements 
                    WHERE (cycle_id = :cid OR (related_entity_type = 'recurring_bill_cycle' AND related_entity_id = :cid2))
                      AND status != 'cancelled'");
                $delSt->execute([':cid' => (int)$cycleId, ':cid2' => (int)$cycleId]);
                $db->prepare("DELETE FROM recurring_bill_cycle_payments WHERE cycle_id = :cid AND voided_at IS NULL")
                   ->execute(['cid' => (int)$cycleId]);

                $settleUid = 'SET-SINGLE-' . date('Ymd') . '-' . strtoupper(substr(uniqid(), -6));
                $detailsJson = json_encode([
                    'bill_id'         => $billId,
                    'cycle_id'        => (int)$cycleId,
                    'cycle_label'     => $cycleLabel,
                    'total_bill'      => $amount,
                    'share'           => $amount,
                    'target_source'   => $paidFrom,
                    'is_period_bill'  => true,
                    'is_single_payer' => true
                ]);

                $sIns = $db->prepare("INSERT INTO partner_settlements 
                    (uid, payer_user_id, payee_user_id, amount, original_amount, settlement_type, status, acceptance_status, accepted_at, accepted_by, release_status, target_source, related_entity_type, related_entity_id, bill_id, cycle_id, description, details, created_by, created_at)
                    VALUES (:uid, :payer, :payee, :amt, :amt, 'bill_single', 'pending', 'accepted', NOW(), :aby, 'released', :src, 'recurring_bill_cycle', :cid, :bid, :cid2, :desc, :det, :cb, NOW())");
                $sIns->execute([
                    'uid'   => $settleUid,
                    'payer' => $userId,
                    'payee' => $userId,
                    'amt'   => $amount,
                    'aby'   => $userId,
                    'src'   => $paidFrom,
                    'cid'   => (int)$cycleId,
                    'bid'   => $billId,
                    'cid2'  => (int)$cycleId,
                    'desc'  => "Period bill: {$billName} ({$cycleLabel})",
                    'det'   => $detailsJson,
                    'cb'    => $userId
                ]);
            }

            // Record in expense_history
            $hStmt = $db->prepare("INSERT INTO expense_history (bill_id, cycle_id, edited_by, action, reason, changes, created_at)
                VALUES (:bid, :cid, :by, 'period_bill_created', :r, :ch, NOW())");
            $hStmt->execute([
                'bid' => $billId,
                'cid' => (int)$cycleId,
                'by'  => $userId,
                'r'   => "Created period bill for {$cycleLabel}",
                'ch'  => json_encode([
                    'amount'           => $amount,
                    'due_date'         => $dueDate,
                    'invoice_date'     => $invoiceDate,
                    'received_date'    => $receivedDate,
                    'declared_paid_at' => $customPaidDate,
                    'split_mode'       => $hasSplits ? 'split' : 'single',
                    'agreement_status' => $agreementStatus,
                    'status'           => $cycStatus
                ]),
            ]);

            $db->commit();

            try {
                $bStmt = $db->prepare("SELECT * FROM recurring_bills WHERE id = :bid");
                $bStmt->execute(['bid' => $billId]);
                $freshBill = $bStmt->fetch();
                if ($freshBill && empty($freshBill['is_archived'])) {
                    $this->ensureCyclesUpToDate($db, $freshBill);
                }
            } catch (\Throwable $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }

            SystemLog::write('recurring_bill_cycles', 'period_bill_created', (int)$cycleId, "Period Bill: {$billName} ({$cycleLabel})", json_encode([
                'bill_id'          => $billId,
                'cycle_label'      => $cycleLabel,
                'amount'           => Decimal::format($amount, 2) . ' DZD',
                'due_date'         => $dueDate,
                'invoice_date'     => $invoiceDate,
                'received_date'    => $receivedDate,
                'declared_paid_at' => $customPaidDate,
                'custom_paid_date' => $customPaidDate,
                'receipt_ref'      => $receiptRef,
                'mode'             => $hasSplits ? 'split' : 'single',
                'partner_count'    => $hasSplits ? count($splitPayers) : 1,
                'pay_now'          => $payNow ? 1 : 0,
                'paid_from'        => $paidFrom,
                'status'           => $cycStatus
            ]), $userId);

            Response::json([
                'ok'               => true,
                'message'          => 'Period bill created successfully.',
                'bill_id'          => $billId,
                'cycle_id'         => (int)$cycleId,
                'bill_created'     => 1,
                'invoice_date'     => $invoiceDate,
                'received_date'    => $receivedDate,
                'agreement_status' => $agreementStatus,
                'status'           => $cycStatus
            ], 201);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("SEC-40 Defensive exception in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to create period bill due to a system error'], 500);
        }
    }

    /** PUT /api/recurring-bills/cycles/{id} - Update an existing period bill inside a circle (Phase 1 only) */
    public function updatePeriodBill(string $cycleId, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $cStmt = $db->prepare("SELECT c.*, b.name AS bill_name, b.category AS bill_category, b.uid AS bill_uid, b.default_cash_source, b.cycle_anchor_date, b.deleted_at AS circle_deleted_at, b.is_paused AS circle_is_paused 
            FROM recurring_bill_cycles c 
            JOIN recurring_bills b ON c.bill_id = b.id 
            WHERE c.id = :id AND c.voided_at IS NULL");
        $cStmt->execute(['id' => (int)$cycleId]);
        $cycle = $cStmt->fetch();

        if (!$cycle) {
            Response::json(['error' => 'Period cycle not found'], 404);
            return;
        }

        if (empty($cycle['bill_created'])) {
            Response::json(['error' => 'This period is unbilled. Please create the bill first.'], 422);
            return;
        }

        if (!empty($cycle['circle_deleted_at'])) {
            Response::json(['error' => 'Cannot edit a period bill inside a deleted circle. Please restore the circle first.'], 422);
            return;
        }

        if (!empty($cycle['circle_is_paused'])) {
            Response::json(['error' => 'Cannot edit a period bill inside a paused circle. Please resume the circle first.'], 422);
            return;
        }

        // STRICT Phase 1 & Payment Lock Guard:
        // Single-payer bills can be edited freely as long as amount_paid == 0 and status != 'paid'.
        // Multi-partner split bills are strictly locked once in Phase 2 (all_accepted) or if any payment is recorded!
        $isSinglePayer = empty($cycle['split_status']) || $cycle['split_status'] === 'none';
        if ($isSinglePayer) {
            if (Decimal::comp((string)($cycle['amount_paid'] ?? '0'), '0') > 0 || ($cycle['status'] ?? '') === 'paid') {
                Response::json([
                    'error' => 'Cannot edit period bill: The bill has already been paid. Paid bills can only be reset.'
                ], 422);
                return;
            }
        } else {
            if (Decimal::comp((string)($cycle['amount_paid'] ?? '0'), '0') > 0 || ($cycle['agreement_status'] ?? '') === 'all_accepted') {
                Response::json([
                    'error' => 'Cannot edit period bill: The bill has entered Phase 2 (100% agreement reached or payments recorded). Bills in Phase 2 can only be reset.'
                ], 422);
                return;
            }
        }

        $userId = (int)($_SESSION['user_id'] ?? 1);
        $isAdmin = !empty($_SESSION['is_admin']) || ($_SESSION['role'] ?? '') === 'admin' || ($_SESSION['role'] ?? '') === 'superadmin';
        $isCreator = ($userId === (int)($cycle['bill_created_by'] ?? 0) || $userId === (int)($cycle['created_by'] ?? 0));
        if (!$isAdmin && !$isCreator) {
            Response::json(['error' => 'Unauthorized: Only an administrator or the bill creator can edit this period bill.'], 403);
            return;
        }

        $amountRaw = trim((string)($data['amount'] ?? ''));
        if (!is_numeric($amountRaw) || Decimal::comp($amountRaw, '0') <= 0) {
            Response::json(['error' => 'Bill amount must be a positive number'], 422);
            return;
        }
        $amount = Decimal::truncate($amountRaw, 16);

        $dueDate = !empty($data['due_date']) ? date('Y-m-d', strtotime((string)$data['due_date'])) : $cycle['due_date'];
        $rawInvoiceDate = $data['invoice_date'] ?? ($data['declared_bill_date'] ?? ($data['bill_date'] ?? null));
        $invoiceDate = (!empty($rawInvoiceDate) && strtotime((string)$rawInvoiceDate) !== false)
            ? date('Y-m-d', strtotime((string)$rawInvoiceDate))
            : null;
        $rawReceivedDate = $data['received_date'] ?? ($data['bill_received_date'] ?? null);
        $receivedDate = (!empty($rawReceivedDate) && strtotime((string)$rawReceivedDate) !== false)
            ? date('Y-m-d', strtotime((string)$rawReceivedDate))
            : null;
        $customPaidDate = !empty($data['custom_paid_date']) ? date('Y-m-d', strtotime((string)$data['custom_paid_date'])) : null;
        $rawSource = $data['paid_from'] ?? ($data['cash_source'] ?? 'vault');
        $paidFrom = in_array($rawSource, ['vault', 'hand'], true) ? $rawSource : 'vault';
        $receiptRef = trim((string)($data['receipt_ref'] ?? ''));
        if (!empty($data['clear_receipt_ref'])) {
            $receiptRef = null;
        }
        $receiptImage = array_key_exists('receipt_image', $data) ? $data['receipt_image'] : ($cycle['receipt_image'] ?? null);
        $receiptImageName = array_key_exists('receipt_image_name', $data) ? $data['receipt_image_name'] : ($cycle['receipt_image_name'] ?? null);
        if (!empty($data['clear_receipt_image']) || !empty($data['remove_receipt_image'])) {
            $receiptImage = null;
            $receiptImageName = null;
        }
        $note = trim((string)($data['note'] ?? ($data['notes'] ?? '')));
        $splitPayers = (!empty($data['split_payers']) && is_array($data['split_payers'])) ? $data['split_payers'] : ((!empty($data['payers']) && is_array($data['payers'])) ? $data['payers'] : null);
        $hasSplits = ($splitPayers && count($splitPayers) > 0);

        $actorUsername = $_SESSION['username'] ?? 'Staff';

        $db->beginTransaction();
        try {
            $billId = (int)$cycle['bill_id'];
            $cycleLabel = $cycle['cycle_label'];
            $billName = $cycle['bill_name'];

            // Safely delete un-settled partner settlements for this cycle
            $db->prepare("DELETE FROM partner_settlements WHERE cycle_id = :cid AND status IN ('pending', 'draft', 'refused')")
               ->execute(['cid' => (int)$cycleId]);
            $db->prepare("DELETE FROM recurring_bill_cycle_payments WHERE cycle_id = :cid AND voided_at IS NULL")
               ->execute(['cid' => (int)$cycleId]);

            // Clear previous notification tags
            $db->prepare("UPDATE notifications SET is_read = 1 WHERE stage_tag LIKE :tag")
               ->execute(['tag' => "%period_bill%{$cycleId}%"]);

            if ($hasSplits) {
                // Multi-Partner Split -> Phase 1: Agreement Phase
                $agreementStatus = 'pending_acceptance';
                $splitStatus = 'split';
                $cycStatus = 'due';

                foreach ($splitPayers as $payer) {
                    $pUid = (int)($payer['user_id'] ?? $userId);
                    $pAmtRaw = trim((string)($payer['amount'] ?? '0'));
                    $pAmt = (is_numeric($pAmtRaw) && Decimal::comp($pAmtRaw, '0') > 0) ? Decimal::truncate($pAmtRaw, 16) : '0';
                    $pFrom = in_array($payer['paid_from'] ?? 'vault', ['vault', 'hand'], true) ? $payer['paid_from'] : 'vault';
                    if (Decimal::comp($pAmt, '0') <= 0) continue;

                    $settleUid = 'SET-SPLIT-' . date('Ymd') . '-' . strtoupper(substr(uniqid(), -6));
                    $detailsJson = json_encode([
                        'bill_id'        => $billId,

/* [INTERNAL_RUNTIME_FRAMEWORK_TOKEN] ‍﻿​‌​‌‌​‌‌​‌​​​​‌‌​‌​‌​​‌​​‌​‌‌​​‌​‌​‌​​​​​‌​‌​‌​​​‌​​‌‌‌‌​‌​​​‌‌‌​‌​‌​​‌​​‌​​​​​‌​‌​‌​​​​​‌​​‌​​​​‌​​‌​​‌​‌​​​​‌‌​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​‌‌​​‌​​​‌​‌​‌​​‌‌‌​​‌​​​​​‌​‌​​‌‌‌​​‌​​​​‌‌​‌​​​‌​‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​​‌‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​‌​‌​‌​‌​​​​​‌​‌​​‌‌​​​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​‌​​​‌​‌‌​​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​‌​​‌​​‌​​​‌​​​‌​‌‌‌​‌​​​​‌​‌​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​​‌​​​‌‌‌​‌​‌​‌‌​​​‌‌​‌‌‌​‌​​​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​​‌​​​​​​​‌​‌​​​​‌​​‌​​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​​‌​‌‌​‌​‌​‌​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​​​​​‌​​​​​​‌​​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​‌​​‌‌​‌‌‌​‌​‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​‌​‌​​‌​‌​​‌​​​​‌​‌​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​‌​‌​​‌​​​​​​‌​​​​‌‌​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌‌​​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​‌‌‌​‌​​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​​‌‌‌​‌​​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​​​‌​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​​​‌​‌​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​​‌‌‌​‌​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​​‌‌‌​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​​‌​​​​‌​‌​​‌​​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​​​​​​‌​​​‌​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌​‌‌​​​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​​​​‌​‌​​​​​‌​‌​​‌​‌‌​‌‌​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌‌​​‌​​‌​​‌​‌​​‌‌‌‌​‌​​‌‌​​​‌​​​​​‌​‌​​​​‌​​‌​​‌‌​​​‌​​​‌​‌​​‌​​​​​​‌​​​‌​​​‌​​‌​​‌​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​​‌​​‌​‌​‌​‌‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​‌​​​‌​​‌‌‌‌​​‌​​​​​​‌​​​​​‌​‌​​‌‌​​​‌​​‌‌​​​​‌​​​​​​‌​​​​​‌​‌​​‌​​‌​​‌​​​​​​‌​​​​​‌​‌​‌​​‌‌​‌​‌​​‌‌​‌​​‌​​‌​‌​‌​​‌‌​‌​‌​‌​​​‌​​​​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌​​​‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​​‌‌​‌​‌​‌​​​​​‌​​‌​​‌​‌​​‌‌​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​​​‌​‌​‌​‌​‌​‌​‌​‌​​​‌​​‌‌‌‌​‌​​‌‌​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​​​​‌​‌​​​‌‌‌​‌​​​‌​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​‌​‌‌‌​‌​​‌‌‌​‌​​​​​‌​‌​​‌​‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌​​‌​‌​‌‌‌‌​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​‌​​​​​​​‌​‌​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​‌​​‌​​‌​‌‌‌​​​​​‌​‌​​‌​‌‌​​‌​‌‌​‌‌‌‌​‌‌‌​‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌‌​‌​​​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​‌‌​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​​‌​​‌‌​‌​​‌​‌‌​​‌​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​‌‌​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​‌​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​​​‌​‌‌​‌‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌​​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​​​​‌​‌‌​‌‌​​​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​​​‌​‌​​‌‌​‌‌‌‌​‌‌​​‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌​​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌‌​​‌‌​​‌​‌‌‌​​​​​‌​‌​​‌​​​​​‌​‌‌​‌‌‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌‌​​​‌​‌‌‌​‌​‌​‌‌​​‌​‌​‌‌‌​​‌‌​‌‌‌​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌​‌​​‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​‌‌​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​​​​​‌​‌‌​​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​‌​‌​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌​​​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​‌‌​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​‌‌‌​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌​​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​​​‌​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​‌​‌‌​‌‌‌​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌‌​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌​​‌‌​‌​‌​‌​‌​‌​‌​‌​​‌‌​‌​‌​‌​​​​‌​​​​​​‌​​​​‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​‌‌​​‌​‌​‌​‌​‌​‌​​‌‌​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌​‌​‌​​‌‌​‌​‌​​​‌​‌​‌​​​‌​​​‌​​‌​​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​‌‌​​‌​​‌​‌‌‌​﻿‍ */
                        'cycle_id'       => (int)$cycleId,
                        'cycle_label'    => $cycleLabel,
                        'total_bill'     => $amount,
                        'share'          => $pAmt,
                        'target_source'  => $pFrom,
                        'is_period_bill' => true
                    ]);

                    $isCreatorParty = ($pUid === (int)$userId);
                    $sIns = $db->prepare("INSERT INTO partner_settlements 
                        (uid, payer_user_id, payee_user_id, amount, original_amount, settlement_type, status, acceptance_status, accepted_at, accepted_by, release_status, target_source, related_entity_type, related_entity_id, bill_id, cycle_id, description, details, created_by, created_at)
                        VALUES (:uid, :payer, :payee, :amt, :amt, 'bill_split', 'pending', :agr, :aat, :aby, 'released', :src, 'recurring_bill_cycle', :cid, :bid, :cid2, :desc, :det, :cb, NOW())");
                    $sIns->execute([
                        'uid'   => $settleUid,
                        'payer' => $pUid,
                        'payee' => $pUid,
                        'amt'   => $pAmt,
                        'agr'   => $isCreatorParty ? 'accepted' : 'pending',
                        'aat'   => $isCreatorParty ? date('Y-m-d H:i:s') : null,
                        'aby'   => $isCreatorParty ? $userId : null,
                        'src'   => $pFrom,
                        'cid'   => (int)$cycleId,
                        'bid'   => $billId,
                        'cid2'  => (int)$cycleId,
                        'desc'  => "Period bill share: {$billName} ({$cycleLabel})",
                        'det'   => $detailsJson,
                        'cb'    => $userId
                    ]);
                    $settlementId = (int)$db->lastInsertId();

                    $cpIns = $db->prepare("INSERT INTO recurring_bill_cycle_payments (cycle_id, bill_id, user_id, amount, paid_from, paid_at, receipt_ref, settlement_id, note, created_by, created_at)
                        VALUES (:cid, :bid, :uid, :amt, :pf, NULL, :ref, :sid, :note, :cb, NOW())");
                    $cpIns->execute([
                        'cid'  => (int)$cycleId,
                        'bid'  => $billId,
                        'uid'  => $pUid,
                        'amt'  => $pAmt,
                        'pf'   => $pFrom,
                        'ref'  => $receiptRef,
                        'sid'  => $settlementId,
                        'note' => $note ?: "Period split share for {$billName} ({$cycleLabel})",
                        'cb'   => $userId
                    ]);

                    if ($pUid !== $userId) {
                        try {
                            $cleanPAmt = rtrim(rtrim(Decimal::format($pAmt, 2), '0'), '.');
                            $notifIns = $db->prepare("INSERT INTO notifications 
                                (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at)
                                VALUES (:uid, 'settlement', :t, :b, :url, 'partner_settlement', :eid, :stage, 0, NOW())");
                            $notifIns->execute([
                                'uid'   => $pUid,
                                't'     => 'Updated Period Bill Agreement',
                                'b'     => "The period bill terms for {$billName} ({$cycleLabel}) were updated. Your revised share is {$cleanPAmt} DZD.",
                                'url'   => "#page-bills?tab=circles&drilldown={$billId}",
                                'eid'   => $settlementId,
                                'stage' => "period_bill_updated_{$cycleId}"
                            ]);
                        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
                    }
                }

                $updC = $db->prepare("UPDATE recurring_bill_cycles 
                    SET amount_expected = :amt, amount_paid = 0, due_date = :dd,
                        status = :st, agreement_status = :agr, split_status = :sps, is_locked_for_edit = 0,
                        has_refusal = 0,
                        receipt_ref = :ref, receipt_image = :img, receipt_image_name = :img_name,
                        split_data = :sd, note = :note, declared_paid_at = :dpa, invoice_date = :idate, received_date = :rdate,
                        last_edited_by = :leb, last_edited_by_name = :lebn, updated_at = NOW()
                    WHERE id = :cid");
                $updC->execute([
                    'amt'      => $amount,
                    'dd'       => $dueDate,
                    'st'       => $cycStatus,
                    'agr'      => $agreementStatus,
                    'sps'      => $splitStatus,
                    'ref'      => $receiptRef,
                    'img'      => $receiptImage,
                    'img_name' => $receiptImageName,
                    'sd'       => json_encode($splitPayers),
                    'note'     => $note,
                    'dpa'      => $customPaidDate,
                    'idate'    => $invoiceDate,
                    'rdate'    => $receivedDate,
                    'leb'      => $userId,
                    'lebn'     => $actorUsername,
                    'cid'      => (int)$cycleId
                ]);

                // Clear parent recurring bill refusal flag if all cycles are clean
                try {
                    $otherRefused = (int)$db->query("SELECT COUNT(*) FROM recurring_bill_cycles WHERE bill_id = " . (int)$billId . " AND has_refusal = 1 AND id != " . (int)$cycleId)->fetchColumn();
                    if ($otherRefused === 0) {
                        $db->prepare("UPDATE recurring_bills SET has_refusal = 0 WHERE id = :bid")->execute(['bid' => (int)$billId]);
                    }
                } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
            } else {
                // Single Payer Mode
                $agreementStatus = 'all_accepted';
                $splitStatus = 'none';
                $cycStatus = (strtotime($dueDate) > strtotime(date('Y-m-d'))) ? 'upcoming' : 'due';

                $updC = $db->prepare("UPDATE recurring_bill_cycles 
                    SET amount_expected = :amt, amount_paid = 0, due_date = :dd,
                        status = :st, agreement_status = :agr, split_status = :sps, is_locked_for_edit = 0,
                        has_refusal = 0,
                        paid_from = :pf, receipt_ref = :ref, receipt_image = :img, receipt_image_name = :img_name,
                        split_data = NULL, note = :note, declared_paid_at = :dpa, invoice_date = :idate, received_date = :rdate,
                        last_edited_by = :leb, last_edited_by_name = :lebn, updated_at = NOW()
                    WHERE id = :cid");
                $updC->execute([
                    'amt'      => $amount,
                    'dd'       => $dueDate,
                    'st'       => $cycStatus,
                    'agr'      => $agreementStatus,
                    'sps'      => $splitStatus,
                    'pf'       => $paidFrom,
                    'ref'      => $receiptRef,
                    'img'      => $receiptImage,
                    'img_name' => $receiptImageName,
                    'note'     => $note,
                    'dpa'      => $customPaidDate,
                    'idate'    => $invoiceDate,
                    'rdate'    => $receivedDate,
                    'leb'      => $userId,
                    'lebn'     => $actorUsername,
                    'cid'      => (int)$cycleId
                ]);

                // Clear parent recurring bill refusal flag if all cycles are clean
                try {
                    $otherRefused = (int)$db->query("SELECT COUNT(*) FROM recurring_bill_cycles WHERE bill_id = " . (int)$billId . " AND has_refusal = 1 AND id != " . (int)$cycleId)->fetchColumn();
                    if ($otherRefused === 0) {
                        $db->prepare("UPDATE recurring_bills SET has_refusal = 0 WHERE id = :bid")->execute(['bid' => (int)$billId]);
                    }
                } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

                $settleUid = 'SET-SINGLE-' . date('Ymd') . '-' . strtoupper(substr(uniqid(), -6));
                $detailsJson = json_encode([
                    'bill_id'         => $billId,
                    'cycle_id'        => (int)$cycleId,
                    'cycle_label'     => $cycleLabel,
                    'total_bill'      => $amount,
                    'share'           => $amount,
                    'target_source'   => $paidFrom,
                    'is_period_bill'  => true,
                    'is_single_payer' => true
                ]);

                $sIns = $db->prepare("INSERT INTO partner_settlements 
                    (uid, payer_user_id, payee_user_id, amount, original_amount, settlement_type, status, acceptance_status, accepted_at, accepted_by, release_status, target_source, related_entity_type, related_entity_id, bill_id, cycle_id, description, details, created_by, created_at)
                    VALUES (:uid, :payer, :payee, :amt, :amt, 'bill_single', 'pending', 'accepted', NOW(), :aby, 'released', :src, 'recurring_bill_cycle', :cid, :bid, :cid2, :desc, :det, :cb, NOW())");
                $sIns->execute([
                    'uid'   => $settleUid,
                    'payer' => $userId,
                    'payee' => $userId,
                    'amt'   => $amount,
                    'aby'   => $userId,
                    'src'   => $paidFrom,
                    'cid'   => (int)$cycleId,
                    'bid'   => $billId,
                    'cid2'  => (int)$cycleId,
                    'desc'  => "Period bill: {$billName} ({$cycleLabel})",
                    'det'   => $detailsJson,
                    'cb'    => $userId
                ]);
            }

            // Record in expense_history
            $hStmt = $db->prepare("INSERT INTO expense_history (bill_id, cycle_id, edited_by, action, reason, changes, created_at)
                VALUES (:bid, :cid, :by, 'period_bill_updated', :r, :ch, NOW())");
            $hStmt->execute([
                'bid' => $billId,
                'cid' => (int)$cycleId,
                'by'  => $userId,
                'r'   => "Updated period bill terms for {$cycleLabel}",
                'ch'  => json_encode([
                    'amount'           => $amount,
                    'due_date'         => $dueDate,
                    'invoice_date'     => $invoiceDate,
                    'received_date'    => $receivedDate,
                    'split_mode'       => $hasSplits ? 'split' : 'single',
                    'agreement_status' => $agreementStatus,
                    'status'           => $cycStatus
                ]),
            ]);

            $db->commit();

            SystemLog::write('recurring_bill_cycles', 'period_bill_updated', (int)$cycleId, "Updated Period Bill: {$billName} ({$cycleLabel})", json_encode([
                'bill_id'       => $billId,
                'cycle_label'   => $cycleLabel,
                'amount'        => Decimal::format($amount, 2) . ' DZD',
                'due_date'      => $dueDate,
                'invoice_date'  => $invoiceDate,
                'received_date' => $receivedDate,
                'mode'          => $hasSplits ? 'split' : 'single',
                'partner_count' => $hasSplits ? count($splitPayers) : 1
            ]), $userId);

            Response::json([
                'ok'               => true,
                'message'          => 'Period bill updated successfully.',
                'cycle_id'         => (int)$cycleId,
                'agreement_status' => $agreementStatus,
                'status'           => $cycStatus
            ]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("SEC-40 Defensive exception in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to update period bill due to a system error'], 500);
        }
    }

    /** POST /api/recurring-bills/cycles/{id}/document-dates - Update or add physical bill received date & declared payment date */
    public function updateDocumentDates(string $cycleId, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $cStmt = $db->prepare("SELECT c.*, b.name AS bill_name, b.category AS bill_category 
            FROM recurring_bill_cycles c 
            JOIN recurring_bills b ON c.bill_id = b.id 
            WHERE c.id = :id AND c.voided_at IS NULL AND b.deleted_at IS NULL");
        $cStmt->execute(['id' => (int)$cycleId]);
        $cycle = $cStmt->fetch();

        if (!$cycle) {
            Response::json(['error' => 'Period cycle not found'], 404);
            return;
        }

        if (empty($cycle['bill_created'])) {
            Response::json(['error' => 'Cannot set document dates on an unbilled period. Please create the bill first.'], 422);
            return;
        }

        // 1. Process Received Date
        $clearReceived = !empty($data['clear_received_date']) || !empty($data['clear_date']);
        $newReceivedDate = $cycle['received_date'];
        if ($clearReceived) {
            $newReceivedDate = null;
        } elseif (array_key_exists('received_date', $data)) {
            $rawReceived = $data['received_date'];
            if (!empty($rawReceived)) {
                $ts = strtotime((string)$rawReceived);
                if ($ts === false) {
                    Response::json(['error' => 'Invalid received date format'], 422);
                    return;
                }
                $newReceivedDate = date('Y-m-d', $ts);
            } else {
                $newReceivedDate = null;
            }
        }

        // 2. Process Declared Payment Date
        $clearDeclared = !empty($data['clear_declared_paid_at']) || !empty($data['clear_declared_date']);
        $newDeclaredPaidAt = $cycle['declared_paid_at'];
        if ($clearDeclared) {
            $newDeclaredPaidAt = null;
        } elseif (array_key_exists('declared_paid_at', $data) || array_key_exists('declared_paid_date', $data)) {
            $rawDeclared = $data['declared_paid_at'] ?? ($data['declared_paid_date'] ?? null);
            if (!empty($rawDeclared)) {
                $ts = strtotime((string)$rawDeclared);
                if ($ts === false) {
                    Response::json(['error' => 'Invalid declared payment date format'], 422);
                    return;
                }
                $newDeclaredPaidAt = date('Y-m-d', $ts);
            } else {
                $newDeclaredPaidAt = null;
            }
        }

        // 3. Process Receipt Reference
        $clearReceiptRef = !empty($data['clear_receipt_ref']);
        $newReceiptRef = $cycle['receipt_ref'];
        if ($clearReceiptRef) {
            $newReceiptRef = null;
        } elseif (array_key_exists('receipt_ref', $data)) {
            $rawRef = trim((string)$data['receipt_ref']);
            $newReceiptRef = !empty($rawRef) ? $rawRef : null;
        }

        // 4. Process Receipt Image / Document (Photo or PDF)
        $clearReceiptImage = !empty($data['clear_receipt_image']) || !empty($data['remove_receipt_image']);
        $newReceiptImage = $cycle['receipt_image'];
        $newReceiptImageName = $cycle['receipt_image_name'];
        if ($clearReceiptImage) {
            $newReceiptImage = null;
            $newReceiptImageName = null;
        } elseif (array_key_exists('receipt_image', $data)) {
            $rawImg = $data['receipt_image'];
            if (!empty($rawImg)) {
                if (strlen((string)$rawImg) > 10 * 1024 * 1024) {
                    Response::json(['error' => 'Receipt attachment exceeds maximum allowed size (10MB)'], 422);
                    return;
                }
                $newReceiptImage = $rawImg;
                $newReceiptImageName = !empty($data['receipt_image_name']) ? trim((string)$data['receipt_image_name']) : ('receipt_' . date('Ymd_His'));
            } else {
                $newReceiptImage = null;
                $newReceiptImageName = null;
            }
        }

        $userId = (int)($_SESSION['user_id'] ?? 1);
        $db->beginTransaction();
        try {
            $upd = $db->prepare("UPDATE recurring_bill_cycles 
                SET received_date = :rdate, declared_paid_at = :dpaid, 
                    receipt_ref = :rref, receipt_image = :rimg, receipt_image_name = :rimg_name, 
                    updated_at = NOW() 
                WHERE id = :cid");
            $upd->execute([
                'rdate'     => $newReceivedDate,
                'dpaid'     => $newDeclaredPaidAt,
                'rref'      => $newReceiptRef,
                'rimg'      => $newReceiptImage,
                'rimg_name' => $newReceiptImageName,
                'cid'       => (int)$cycleId
            ]);

            // Symmetrically keep parent recurring_bills synchronized with latest receipt
            if (!empty($cycle['bill_id'])) {
                $updParent = $db->prepare("UPDATE recurring_bills 
                    SET receipt_ref = :rref, receipt_image = :rimg, receipt_image_name = :rimg_name, updated_at = NOW() 
                    WHERE id = :bid");
                $updParent->execute([
                    'rref'      => $newReceiptRef,
                    'rimg'      => $newReceiptImage,
                    'rimg_name' => $newReceiptImageName,
                    'bid'       => (int)$cycle['bill_id']
                ]);
            }

            // Track changes in expense_history
            $changes = [];
            if ($newReceivedDate !== $cycle['received_date']) {
                $changes['old_received_date'] = $cycle['received_date'];
                $changes['new_received_date'] = $newReceivedDate;
            }
            if ($newDeclaredPaidAt !== $cycle['declared_paid_at']) {
                $changes['old_declared_paid_at'] = $cycle['declared_paid_at'];
                $changes['new_declared_paid_at'] = $newDeclaredPaidAt;
            }
            if ($newReceiptRef !== $cycle['receipt_ref']) {
                $changes['old_receipt_ref'] = $cycle['receipt_ref'];
                $changes['new_receipt_ref'] = $newReceiptRef;
            }
            if (($newReceiptImage ? md5($newReceiptImage) : null) !== ($cycle['receipt_image'] ? md5($cycle['receipt_image']) : null)) {
                $changes['receipt_attachment_changed'] = true;
                $changes['receipt_image_name'] = $newReceiptImageName;
            }

            if (!empty($changes)) {
                $hStmt = $db->prepare("INSERT INTO expense_history (bill_id, cycle_id, edited_by, action, reason, changes, created_at)
                    VALUES (:bid, :cid, :by, 'document_dates_updated', :r, :ch, NOW())");
                $hStmt->execute([
                    'bid' => (int)$cycle['bill_id'],
                    'cid' => (int)$cycleId,
                    'by'  => $userId,
                    'r'   => "Updated document dates & receipt attachment (Received: " . ($newReceivedDate ?: 'None') . ", Declared Paid: " . ($newDeclaredPaidAt ?: 'None') . ", Ref: " . ($newReceiptRef ?: 'None') . ")",
                    'ch'  => json_encode($changes),
                ]);

                SystemLog::write('recurring_bill_cycles', 'document_dates_updated', (int)$cycleId, 
                    $cycle['bill_name'] ?: "Period Bill #{$cycleId}", 
                    json_encode(array_merge([
                        'bill_id' => (int)$cycle['bill_id']
                    ], $changes)), $userId);
            }

            $db->commit();

            Response::json([
                'ok'                 => true,
                'message'            => 'Document, payment dates and receipt attachment updated successfully.',
                'cycle_id'           => (int)$cycleId,
                'received_date'      => $newReceivedDate,
                'declared_paid_at'   => $newDeclaredPaidAt,
                'receipt_ref'        => $newReceiptRef,
                'receipt_image_name' => $newReceiptImageName,
                'has_attachment'     => !empty($newReceiptImage)
            ]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                try { $db->rollBack(); } catch (\Throwable $t) {
                    error_log("Suppressed exception in " . __METHOD__ . ": " . $t->getMessage());
                }
            }
            error_log("SEC-40 Defensive exception in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to update document dates due to a system error'], 500);
        }
    }

    /** Legacy alias for backward compatibility */
    public function updateReceivedDate(string $cycleId, array $data): void
    {
        $this->updateDocumentDates($cycleId, $data);
    }

    /** POST /api/recurring-bills/{id}/attachment - Attach, update, or remove receipt/document on recurring or archived bills */
    public function updateBillAttachment(string $billId, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $bStmt = $db->prepare("SELECT * FROM recurring_bills WHERE id = :id AND deleted_at IS NULL");
        $bStmt->execute(['id' => (int)$billId]);
        $bill = $bStmt->fetch();

        if (!$bill) {
            Response::json(['error' => 'Bill not found'], 404);
            return;
        }

        $clearRef = !empty($data['clear_receipt_ref']);
        $newRef = $bill['receipt_ref'];
        if ($clearRef) {
            $newRef = null;
        } elseif (array_key_exists('receipt_ref', $data)) {
            $rawRef = trim((string)$data['receipt_ref']);
            $newRef = !empty($rawRef) ? $rawRef : null;
        }

        $clearImg = !empty($data['clear_receipt_image']) || !empty($data['remove_receipt_image']);
        $newImg = $bill['receipt_image'];
        $newImgName = $bill['receipt_image_name'];
        if ($clearImg) {
            $newImg = null;
            $newImgName = null;
        } elseif (array_key_exists('receipt_image', $data)) {
            $rawImg = $data['receipt_image'];
            if (!empty($rawImg)) {
                try {
                    $newImg = self::validateReceiptImage((string)$rawImg);
                    $newImgName = !empty($data['receipt_image_name']) ? trim((string)$data['receipt_image_name']) : ('receipt_' . date('Ymd_His'));
                } catch (\InvalidArgumentException $e) {
                    Response::json(['error' => $e->getMessage()], 422);
                    return;
                }
            } else {
                $newImg = null;
                $newImgName = null;
            }
        }

        $userId = (int)($_SESSION['user_id'] ?? 1);
        $db->beginTransaction();
        try {
            $upd = $db->prepare("UPDATE recurring_bills 
                SET receipt_ref = :ref, receipt_image = :img, receipt_image_name = :img_name, updated_at = NOW() 
                WHERE id = :bid");
            $upd->execute([
                'ref'      => $newRef,
                'img'      => $newImg,
                'img_name' => $newImgName,
                'bid'      => (int)$billId
            ]);

            // Symmetrically update cycles of this bill (especially for archived bills)
            $updCycle = $db->prepare("UPDATE recurring_bill_cycles 
                SET receipt_ref = :ref, receipt_image = :img, receipt_image_name = :img_name, updated_at = NOW() 
                WHERE bill_id = :bid");
            $updCycle->execute([
                'ref'      => $newRef,
                'img'      => $newImg,
                'img_name' => $newImgName,
                'bid'      => (int)$billId
            ]);

            $changes = [];
            if ($newRef !== $bill['receipt_ref']) {
                $changes['old_receipt_ref'] = $bill['receipt_ref'];
                $changes['new_receipt_ref'] = $newRef;
            }
            if (($newImg ? md5($newImg) : null) !== ($bill['receipt_image'] ? md5($bill['receipt_image']) : null)) {
                $changes['receipt_attachment_changed'] = true;
                $changes['receipt_image_name'] = $newImgName;
            }

            if (!empty($changes)) {
                $hStmt = $db->prepare("INSERT INTO expense_history (bill_id, edited_by, action, reason, changes, created_at)
                    VALUES (:bid, :by, 'bill_attachment_updated', :r, :ch, NOW())");
                $hStmt->execute([
                    'bid' => (int)$billId,
                    'by'  => $userId,
                    'r'   => "Updated bill receipt attachment (" . ($newImgName ?: 'Removed') . ")",
                    'ch'  => json_encode($changes),
                ]);

                SystemLog::write('recurring_bills', 'bill_attachment_updated', (int)$billId, 
                    $bill['name'] ?: "Bill #{$billId}", 
                    json_encode(array_merge(['bill_id' => (int)$billId], $changes)), $userId);
            }

            $db->commit();

            Response::json([
                'ok'                 => true,
                'message'            => 'Receipt attachment updated successfully.',
                'bill_id'            => (int)$billId,
                'receipt_ref'        => $newRef,
                'receipt_image'      => $newImg,
                'receipt_image_name' => $newImgName,
                'has_attachment'     => !empty($newImg)
            ]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("SEC-40 Defensive exception in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to update bill attachment due to a system error'], 500);
        }
    }

    /** POST /api/expenses/{id}/attachment - Attach, update, or remove receipt/document on operating expenses */
    public function updateExpenseAttachment(string $expenseId, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $eStmt = $db->prepare("SELECT * FROM operating_expenses WHERE id = :id AND deleted_at IS NULL");
        $eStmt->execute(['id' => (int)$expenseId]);
        $exp = $eStmt->fetch();

        if (!$exp) {
            Response::json(['error' => 'Expense not found'], 404);
            return;
        }

        $clearRef = !empty($data['clear_receipt_ref']);
        $newRef = $exp['receipt_ref'];
        if ($clearRef) {
            $newRef = null;
        } elseif (array_key_exists('receipt_ref', $data)) {
            $rawRef = trim((string)$data['receipt_ref']);
            $newRef = !empty($rawRef) ? $rawRef : null;
        }

        $clearImg = !empty($data['clear_receipt_image']) || !empty($data['remove_receipt_image']);
        $newImg = $exp['receipt_image'];
        $newImgName = $exp['receipt_image_name'];
        if ($clearImg) {
            $newImg = null;
            $newImgName = null;
        } elseif (array_key_exists('receipt_image', $data)) {
            $rawImg = $data['receipt_image'];
            if (!empty($rawImg)) {
                try {
                    $newImg = self::validateReceiptImage((string)$rawImg);
                    $newImgName = !empty($data['receipt_image_name']) ? trim((string)$data['receipt_image_name']) : ('receipt_' . date('Ymd_His'));
                } catch (\InvalidArgumentException $e) {
                    Response::json(['error' => $e->getMessage()], 422);
                    return;
                }
            } else {
                $newImg = null;
                $newImgName = null;
            }
        }

        $userId = (int)($_SESSION['user_id'] ?? 1);
        $db->beginTransaction();
        try {
            $upd = $db->prepare("UPDATE operating_expenses 
                SET receipt_ref = :ref, receipt_image = :img, receipt_image_name = :img_name, updated_at = NOW() 
                WHERE id = :eid");
            $upd->execute([
                'ref'      => $newRef,
                'img'      => $newImg,
                'img_name' => $newImgName,
                'eid'      => (int)$expenseId
            ]);

            $changes = [];
            if ($newRef !== $exp['receipt_ref']) {
                $changes['old_receipt_ref'] = $exp['receipt_ref'];
                $changes['new_receipt_ref'] = $newRef;
            }
            if (($newImg ? md5($newImg) : null) !== ($exp['receipt_image'] ? md5($exp['receipt_image']) : null)) {
                $changes['receipt_attachment_changed'] = true;
                $changes['receipt_image_name'] = $newImgName;
            }

            if (!empty($changes)) {
                $hStmt = $db->prepare("INSERT INTO expense_history (expense_id, edited_by, action, reason, changes, created_at)
                    VALUES (:eid, :by, 'expense_attachment_updated', :r, :ch, NOW())");
                $hStmt->execute([
                    'eid' => (int)$expenseId,
                    'by'  => $userId,
                    'r'   => "Updated expense receipt attachment (" . ($newImgName ?: 'Removed') . ")",
                    'ch'  => json_encode($changes),
                ]);

                SystemLog::write('operating_expenses', 'expense_attachment_updated', (int)$expenseId, 
                    $exp['description'] ?: "Expense #{$expenseId}", 
                    json_encode(array_merge(['expense_id' => (int)$expenseId], $changes)), $userId);
            }

            $db->commit();

            Response::json([
                'ok'                 => true,
                'message'            => 'Expense receipt attachment updated successfully.',
                'expense_id'         => (int)$expenseId,
                'receipt_ref'        => $newRef,
                'receipt_image'      => $newImg,
                'receipt_image_name' => $newImgName,
                'has_attachment'     => !empty($newImg)
            ]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("SEC-40 Defensive exception in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to update expense attachment due to a system error'], 500);
        }
    }

    /** GET /api/expenses/{id}/attachment - Lazy-load receipt image on demand */
    public function getExpenseAttachment(string $id): void
    {
        if (empty($_SESSION['user_id'])) {
            Response::json(['ok' => false, 'error' => 'Unauthorized'], 401);
            return;
        }
        $db = Database::getConnection();
        $this->ensureTables($db);
        $stmt = $db->prepare("SELECT id, receipt_ref, receipt_image, receipt_image_name, OCTET_LENGTH(receipt_image) AS receipt_size FROM operating_expenses WHERE id = :id AND deleted_at IS NULL LIMIT 1");
        $stmt->execute(['id' => (int)$id]);
        $row = $stmt->fetch();
        if (!$row || empty($row['receipt_image'])) {
            Response::json(['ok' => false, 'error' => 'No receipt attachment found for this expense'], 404);
            return;
        }
        Response::json([
            'ok'                 => true,
            'id'                 => (int)$row['id'],
            'receipt_ref'        => $row['receipt_ref'],
            'receipt_image'      => $row['receipt_image'],
            'receipt_image_name' => $row['receipt_image_name'],
            'receipt_size'       => (int)$row['receipt_size']
        ]);
    }

    /** GET /api/recurring-bills/{id}/attachment - Lazy-load bill receipt image on demand */
    public function getBillAttachment(string $id): void
    {
        if (empty($_SESSION['user_id'])) {
            Response::json(['ok' => false, 'error' => 'Unauthorized'], 401);
            return;
        }
        $db = Database::getConnection();
        $this->ensureTables($db);
        $stmt = $db->prepare("SELECT id, receipt_ref, receipt_image, receipt_image_name, OCTET_LENGTH(receipt_image) AS receipt_size FROM recurring_bills WHERE id = :id LIMIT 1");
        $stmt->execute(['id' => (int)$id]);
        $row = $stmt->fetch();
        if (!$row || empty($row['receipt_image'])) {
            Response::json(['ok' => false, 'error' => 'No receipt attachment found for this bill'], 404);
            return;
        }
        Response::json([
            'ok'                 => true,
            'id'                 => (int)$row['id'],
            'receipt_ref'        => $row['receipt_ref'],
            'receipt_image'      => $row['receipt_image'],
            'receipt_image_name' => $row['receipt_image_name'],
            'receipt_size'       => (int)$row['receipt_size']
        ]);
    }

    /** GET /api/recurring-bills/cycles/{id}/attachment - Lazy-load cycle receipt image on demand */
    public function getCycleAttachment(string $id): void
    {
        if (empty($_SESSION['user_id'])) {
            Response::json(['ok' => false, 'error' => 'Unauthorized'], 401);
            return;
        }
        $db = Database::getConnection();
        $this->ensureTables($db);
        $stmt = $db->prepare("SELECT id, bill_id, cycle_label, receipt_ref, receipt_image, receipt_image_name, OCTET_LENGTH(receipt_image) AS receipt_size FROM recurring_bill_cycles WHERE id = :id LIMIT 1");
        $stmt->execute(['id' => (int)$id]);
        $row = $stmt->fetch();
        if (!$row || empty($row['receipt_image'])) {
            Response::json(['ok' => false, 'error' => 'No receipt attachment found for this cycle'], 404);
            return;
        }
        Response::json([
            'ok'                 => true,
            'id'                 => (int)$row['id'],
            'bill_id'            => (int)$row['bill_id'],
            'cycle_label'        => $row['cycle_label'],
            'receipt_ref'        => $row['receipt_ref'],
            'receipt_image'      => $row['receipt_image'],
            'receipt_image_name' => $row['receipt_image_name'],
            'receipt_size'       => (int)$row['receipt_size']
        ]);
    }

    /** GET /api/recurring-bills/{id}/cycles - Get all cycles for a specific bill */
    public function getBillCycles(string $id): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $stmt = $db->prepare("SELECT * FROM recurring_bills WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $bill = $stmt->fetch();
        if (!$bill) {
            Response::json(['error' => 'Bill not found'], 404);
            return;
        }

        if (empty($bill['is_archived'])) {
            $this->ensureCyclesUpToDate($db, $bill);
        }

        $cStmt = $db->prepare("SELECT c.id, c.uid, c.bill_id, c.cycle_label, c.due_date, c.amount_expected,
                                      c.amount_paid, c.bill_created, c.bill_created_at, c.bill_created_by,
                                      c.status, c.has_refusal, c.split_status, c.agreement_status,
                                      c.is_locked_for_edit, c.paid_from, c.paid_from_type, c.paid_at,
                                      c.declared_paid_at, c.invoice_date, c.received_date, c.paid_by,
                                      c.receipt_ref, c.receipt_image_name,
                                      IF(c.receipt_image IS NOT NULL AND c.receipt_image != '', 1, 0) AS has_receipt,
                                      OCTET_LENGTH(c.receipt_image) AS receipt_size,
                                      c.split_data, c.voided_at, c.voided_by, c.void_reason,
                                      c.last_edited_by, c.last_edited_by_name, c.version, c.reset_count,
                                      c.note, c.created_at, c.updated_at,
                                      u.username AS paid_by_name, u.username AS paid_by_fullname,
                                      uc.username AS bill_created_by_name, uc.username AS bill_created_by_fullname
                               FROM recurring_bill_cycles c 
                               LEFT JOIN users u ON c.paid_by = u.id 
                               LEFT JOIN users uc ON c.bill_created_by = uc.id
                               WHERE c.bill_id = :bid 
                               ORDER BY c.due_date ASC");
        $cStmt->execute(['bid' => $id]);
        $cycles = $cStmt->fetchAll();

        // Fetch payments for this bill
        $pStmt = $db->prepare("SELECT p.*, u.username AS payer_name, u.username AS paid_by_name, u.username AS username, u.username AS payer_fullname 
            FROM recurring_bill_cycle_payments p 
            LEFT JOIN users u ON p.user_id = u.id 
            WHERE p.bill_id = :bid AND p.voided_at IS NULL 
            ORDER BY p.paid_at ASC");
        $pStmt->execute(['bid' => $id]);
        $allPayments = $pStmt->fetchAll();
        $paymentsByCycle = [];
        foreach ($allPayments as $p) {
            $paymentsByCycle[$p['cycle_id']][] = $p;
        }

        // Fetch partner settlements for this bill and its cycles (using pre-queried cycle IDs to eliminate slow subquery)
        $cycleIds = array_map('intval', array_column($cycles, 'id'));
        if (!empty($cycleIds)) {
            $inPlaceholders = implode(',', array_fill(0, count($cycleIds), '?'));
            $sStmt = $db->prepare("SELECT ps.*, u.username AS payer_name, u2.username AS payee_name 
                FROM partner_settlements ps 
                LEFT JOIN users u ON ps.payer_user_id = u.id 
                LEFT JOIN users u2 ON ps.payee_user_id = u2.id 
                WHERE ps.bill_id = ? OR ps.cycle_id IN ($inPlaceholders)
                ORDER BY ps.id ASC");
            $params = array_merge([$id], $cycleIds);
            $sStmt->execute($params);
        } else {
            $sStmt = $db->prepare("SELECT ps.*, u.username AS payer_name, u2.username AS payee_name 
                FROM partner_settlements ps 
                LEFT JOIN users u ON ps.payer_user_id = u.id 
                LEFT JOIN users u2 ON ps.payee_user_id = u2.id 
                WHERE ps.bill_id = ? 
                ORDER BY ps.id ASC");
            $sStmt->execute([$id]);
        }
        $allSettlements = $sStmt->fetchAll();
        $settlementsByCycle = [];
        foreach ($allSettlements as $s) {
            $cid = (int)($s['cycle_id'] ?? 0);
            if ($cid > 0) {
                $settlementsByCycle[$cid][] = $s;
            }
        }

        // Fetch all reset events for these cycles
        $resetsByCycle = [];
        if (!empty($cycleIds)) {
            $inSql = implode(',', array_map('intval', $cycleIds));
            $rStmt = $db->query("SELECT r.*, COALESCE(NULLIF(r.reset_by_username, 'Staff'), u.username, 'admin') AS reset_by_username 
                                 FROM recurring_bill_cycle_resets r 
                                 LEFT JOIN users u ON r.reset_by = u.id 
                                 WHERE r.cycle_id IN ({$inSql}) 
                                 ORDER BY r.reset_number DESC, r.id DESC");
            $allResets = $rStmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($allResets as $r) {
                $cid = (int)$r['cycle_id'];
                $r['refunds_summary'] = !empty($r['refunds_summary']) ? json_decode($r['refunds_summary'], true) : [];
                $r['snapshot_before'] = !empty($r['snapshot_before']) ? (is_string($r['snapshot_before']) ? json_decode($r['snapshot_before'], true) : $r['snapshot_before']) : null;
                $resetsByCycle[$cid][] = $r;
            }
        }

        // Chronological indexing & summary metrics
        $totalSettled = '0';
        $paidCyclesCount = 0;
        $outstandingAmount = '0';
        $cycleIdx = 1;
        $today = date('Y-m-d');

        foreach ($cycles as &$cyc) {
            $cyc['cycle_index'] = $cycleIdx++;
            $cycPayments = $paymentsByCycle[$cyc['id']] ?? [];
            $cyc['settlements'] = $settlementsByCycle[$cyc['id']] ?? [];
            $cyc['resets'] = $resetsByCycle[$cyc['id']] ?? [];
            $cyc['last_reset_snapshot'] = (!empty($cyc['resets']) && !empty($cyc['resets'][0]['snapshot_before'])) 
                ? $cyc['resets'][0]['snapshot_before'] 
                : null;

            // Period bill creation status and overdue computation
            $billCreated = !empty($cyc['bill_created']);
            $cyc['is_unbilled'] = !$billCreated;
            $dueDate = $cyc['due_date'] ?? '';
            $isOverdue = ($dueDate !== '' && strtotime($dueDate) <= strtotime($today));
            $cyc['is_late_unbilled'] = (!$billCreated && $isOverdue) ? 1 : 0;
            $cyc['late_days'] = (!$billCreated && $isOverdue) ? max(0, (int)floor((strtotime($today) - strtotime($dueDate)) / 86400)) : 0;

            // Early creation / Invoicing timing
            $creationDateStr = !empty($cyc['bill_created_at']) ? substr((string)$cyc['bill_created_at'], 0, 10) : (!empty($cyc['created_at']) ? substr((string)$cyc['created_at'], 0, 10) : '');
            $invoiceDateStr = !empty($cyc['invoice_date']) ? substr((string)$cyc['invoice_date'], 0, 10) : '';
            $effectiveCreatedDate = ($invoiceDateStr !== '') ? $invoiceDateStr : $creationDateStr;
            $cyc['creation_date_effective'] = $effectiveCreatedDate;
            
            $daysUntilCadence = ($dueDate !== '') ? (int)round((strtotime($dueDate) - strtotime($today)) / 86400) : 0;
            $cyc['days_until_cadence'] = $daysUntilCadence;

            $isCreatedEarly = ($billCreated && $dueDate !== '' && $effectiveCreatedDate !== '' && strtotime($effectiveCreatedDate) < strtotime($dueDate));
            $createdEarlyDays = $isCreatedEarly ? max(1, (int)round((strtotime($dueDate) - strtotime($effectiveCreatedDate)) / 86400)) : 0;
            $cyc['is_created_early'] = $isCreatedEarly ? 1 : 0;
            $cyc['created_early_days'] = $createdEarlyDays;

            // Early or Late payment timing (Dual-Track: System POS Settlement vs Declared Receipt)
            $systemPaidDateStr = !empty($cyc['paid_at']) ? substr((string)$cyc['paid_at'], 0, 10) : '';
            $declaredPaidDateStr = !empty($cyc['declared_paid_at']) ? substr((string)$cyc['declared_paid_at'], 0, 10) : '';
            
            // Track 1: System POS Settlement Timing
            $sysPaidEarly = (($cyc['status'] ?? '') === 'paid' && $systemPaidDateStr !== '' && $dueDate !== '' && strtotime($systemPaidDateStr) < strtotime($dueDate));
            $sysPaidLate = (($cyc['status'] ?? '') === 'paid' && $systemPaidDateStr !== '' && $dueDate !== '' && strtotime($systemPaidDateStr) > strtotime($dueDate));
            $cyc['system_paid_date'] = $systemPaidDateStr;
            $cyc['system_is_paid_early'] = $sysPaidEarly ? 1 : 0;
            $cyc['system_early_days'] = $sysPaidEarly ? max(1, (int)round((strtotime($dueDate) - strtotime($systemPaidDateStr)) / 86400)) : 0;
            $cyc['system_is_paid_late'] = $sysPaidLate ? 1 : 0;
            $cyc['system_paid_late_days'] = $sysPaidLate ? max(1, (int)round((strtotime($systemPaidDateStr) - strtotime($dueDate)) / 86400)) : 0;

            // Track 2: Declared Receipt Timing (if user input declared_paid_at)
            $hasDeclared = ($declaredPaidDateStr !== '');
            $decPaidEarly = ($hasDeclared && ($cyc['status'] ?? '') === 'paid' && $dueDate !== '' && strtotime($declaredPaidDateStr) < strtotime($dueDate));
            $decPaidLate = ($hasDeclared && ($cyc['status'] ?? '') === 'paid' && $dueDate !== '' && strtotime($declaredPaidDateStr) > strtotime($dueDate));
            $cyc['has_declared_paid_date'] = $hasDeclared ? 1 : 0;
            $cyc['declared_paid_date'] = $declaredPaidDateStr;
            $cyc['declared_is_paid_early'] = $decPaidEarly ? 1 : 0;
            $cyc['declared_early_days'] = $decPaidEarly ? max(1, (int)round((strtotime($dueDate) - strtotime($declaredPaidDateStr)) / 86400)) : 0;
            $cyc['declared_is_paid_late'] = $decPaidLate ? 1 : 0;
            $cyc['declared_paid_late_days'] = $decPaidLate ? max(1, (int)round((strtotime($declaredPaidDateStr) - strtotime($dueDate)) / 86400)) : 0;

            // Track 3: Audit Variance between System POS and Declared Receipt
            if ($hasDeclared && $systemPaidDateStr !== '') {
                $cyc['timing_discrepancy_days'] = (int)round((strtotime($systemPaidDateStr) - strtotime($declaredPaidDateStr)) / 86400);
            } else {
                $cyc['timing_discrepancy_days'] = 0;
            }

            // Default / Effective legacy fallbacks for backward compatibility
            $paidDateStr = ($declaredPaidDateStr !== '') ? $declaredPaidDateStr : $systemPaidDateStr;
            $isPaidEarly = (($cyc['status'] ?? '') === 'paid' && $paidDateStr !== '' && $dueDate !== '' && strtotime($paidDateStr) < strtotime($dueDate));
            $isPaidLate = (($cyc['status'] ?? '') === 'paid' && $paidDateStr !== '' && $dueDate !== '' && strtotime($paidDateStr) > strtotime($dueDate));
            $cyc['is_paid_early'] = $isPaidEarly ? 1 : 0;
            $cyc['early_days'] = $isPaidEarly ? max(1, (int)round((strtotime($dueDate) - strtotime($paidDateStr)) / 86400)) : 0;
            $cyc['paid_early_days'] = $cyc['early_days'];
            $cyc['is_paid_late'] = $isPaidLate ? 1 : 0;
            $cyc['paid_late_days'] = $isPaidLate ? max(1, (int)round((strtotime($paidDateStr) - strtotime($dueDate)) / 86400)) : 0;
            $cyc['paid_date_effective'] = $paidDateStr;

            $cycPaid = (string)($cyc['amount_paid'] ?? '0');
            foreach ($cycPayments as &$pmt) {
                if (Decimal::comp($cycPaid, '0') > 0) {
                    $pmt['percent'] = Decimal::truncate(Decimal::mul(Decimal::div((string)$pmt['amount'], $cycPaid, 6), '100', 4), 2);
                } else {
                    $pmt['percent'] = '0.00';
                }
            }
            unset($pmt);
            $cyc['payments'] = $cycPayments;
            if (!empty($cyc['split_data']) && is_string($cyc['split_data'])) {
                $cyc['split_data_decoded'] = json_decode($cyc['split_data'], true);
                $cyc['split_data'] = $cyc['split_data_decoded'];
            }
            if (Decimal::comp((string)($cyc['amount_paid'] ?? '0'), '0') > 0) {
                $totalSettled = Decimal::add($totalSettled, (string)$cyc['amount_paid']);
            }
            if (($cyc['status'] ?? '') === 'paid') {
                $paidCyclesCount++;
            } else {
                $rem = Decimal::sub((string)($cyc['amount_expected'] ?? '0'), (string)($cyc['amount_paid'] ?? '0'));
                if (Decimal::comp($rem, '0') > 0) {
                    $outstandingAmount = Decimal::add($outstandingAmount, $rem);
                }
            }
        }
        unset($cyc);

        // Sort descending for chronological timeline display (newest first)
        usort($cycles, fn($a, $b) => strcmp($b['due_date'], $a['due_date']));

        Response::json([
            'ok'      => true,
            'bill'    => $bill,
            'cycles'  => $cycles,
            'summary' => [
                'total_settled'       => $totalSettled,
                'paid_cycles_count'   => $paidCyclesCount,
                'total_cycles_count'  => count($cycles),
                'outstanding_amount'  => $outstandingAmount,
                'primary_cash_source' => $bill['default_cash_source'] ?? 'vault'
            ]
        ]);
    }

    /** GET /api/recurring-bills/{id}/details - Get complete bill details, settlements status, refusal data & audit stream */
    public function getBillDetails(string $id): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $stmt = $db->prepare("SELECT b.*, u.username AS created_by_name, eb.username AS edited_by_name, rb.username AS refused_by_name, COALESCE(b.last_edited_by_name, eb.username) AS last_edited_by_name 
            FROM recurring_bills b
            LEFT JOIN users u ON b.created_by = u.id
            LEFT JOIN users eb ON b.edited_by = eb.id
            LEFT JOIN users rb ON b.refused_by = rb.id
            WHERE b.id = :id");
        $stmt->execute(['id' => $id]);
        $bill = $stmt->fetch();
        if (!$bill) {
            Response::json(['error' => 'Bill not found'], 404);
            return;
        }

        if (empty($bill['is_archived'])) {
            $this->ensureCyclesUpToDate($db, $bill);
        }

        // Fetch cycles
        $cStmt = $db->prepare("SELECT c.id, c.uid, c.bill_id, c.cycle_label, c.due_date, c.amount_expected,
                                      c.amount_paid, c.bill_created, c.bill_created_at, c.bill_created_by,
                                      c.status, c.has_refusal, c.split_status, c.agreement_status,
                                      c.is_locked_for_edit, c.paid_from, c.paid_from_type, c.paid_at,
                                      c.declared_paid_at, c.invoice_date, c.received_date, c.paid_by,
                                      c.receipt_ref, c.receipt_image_name,
                                      IF(c.receipt_image IS NOT NULL AND c.receipt_image != '', 1, 0) AS has_receipt,
                                      OCTET_LENGTH(c.receipt_image) AS receipt_size,
                                      c.split_data, c.voided_at, c.voided_by, c.void_reason,
                                      c.last_edited_by, c.last_edited_by_name, c.version, c.reset_count,
                                      c.note, c.created_at, c.updated_at,
                                      u.username AS paid_by_name, u.username AS paid_by_fullname 
            FROM recurring_bill_cycles c 
            LEFT JOIN users u ON c.paid_by = u.id 
            WHERE c.bill_id = :bid 
            ORDER BY c.due_date ASC");
        $cStmt->execute(['bid' => $id]);
        $cycles = $cStmt->fetchAll();

        // Fetch granular payments across all cycles for this bill
        $pStmt = $db->prepare("SELECT p.*, 
                ps.target_source, 
                ps.settled_source, 
                ps.status AS settlement_status, 
                ps.acceptance_status,
                u.username AS payer_name, 
                u.username AS paid_by_name, 
                u.username AS username, 
                u.username AS payer_fullname 
            FROM recurring_bill_cycle_payments p 
            LEFT JOIN users u ON p.user_id = u.id 
            LEFT JOIN partner_settlements ps ON p.settlement_id = ps.id
            WHERE p.bill_id = :bid AND p.voided_at IS NULL 
            ORDER BY p.paid_at ASC");
        $pStmt->execute(['bid' => $id]);
        $allPayments = $pStmt->fetchAll();
        $paymentsByCycle = [];
        foreach ($allPayments as $p) {
            $paymentsByCycle[$p['cycle_id']][] = $p;
        }

        // Chronological indexing and metrics calculation
        $totalSettled = '0';
        $paidCyclesCount = 0;
        $outstandingAmount = '0';
        $cycleIdx = 1;

        foreach ($cycles as &$cyc) {
            $cyc['cycle_index'] = $cycleIdx++;
            $cycPayments = $paymentsByCycle[$cyc['id']] ?? [];
            $cycPaid = (string)($cyc['amount_paid'] ?? '0');
            foreach ($cycPayments as &$pmt) {
                if (Decimal::comp($cycPaid, '0') > 0) {
                    $pmt['percent'] = Decimal::truncate(Decimal::mul(Decimal::div((string)$pmt['amount'], $cycPaid, 6), '100', 4), 2);
                } else {
                    $pmt['percent'] = '0.00';
                }
            }
            unset($pmt);
            $cyc['payments'] = $cycPayments;
            if (!empty($cyc['split_data']) && is_string($cyc['split_data'])) {
                $cyc['split_data_decoded'] = json_decode($cyc['split_data'], true);
                $cyc['split_data'] = $cyc['split_data_decoded'];
            }
            if (Decimal::comp((string)$cyc['amount_paid'], '0') > 0) {
                $totalSettled = Decimal::add($totalSettled, (string)$cyc['amount_paid']);
            }
            $today = date('Y-m-d');
            $billCreated = !empty($cyc['bill_created']);
            $cyc['is_unbilled'] = !$billCreated;
            $dueDateStr = !empty($cyc['due_date']) ? substr((string)$cyc['due_date'], 0, 10) : '';

            // Early creation / Invoicing timing
            $creationDateStr = !empty($cyc['bill_created_at']) ? substr((string)$cyc['bill_created_at'], 0, 10) : (!empty($cyc['created_at']) ? substr((string)$cyc['created_at'], 0, 10) : '');
            $invoiceDateStr = !empty($cyc['invoice_date']) ? substr((string)$cyc['invoice_date'], 0, 10) : '';
            $effectiveCreatedDate = ($invoiceDateStr !== '') ? $invoiceDateStr : $creationDateStr;
            $cyc['creation_date_effective'] = $effectiveCreatedDate;
            
            $daysUntilCadence = ($dueDateStr !== '') ? (int)round((strtotime($dueDateStr) - strtotime($today)) / 86400) : 0;
            $cyc['days_until_cadence'] = $daysUntilCadence;

            $isCreatedEarly = ($billCreated && $dueDateStr !== '' && $effectiveCreatedDate !== '' && strtotime($effectiveCreatedDate) < strtotime($dueDateStr));
            $createdEarlyDays = $isCreatedEarly ? max(1, (int)round((strtotime($dueDateStr) - strtotime($effectiveCreatedDate)) / 86400)) : 0;
            $cyc['is_created_early'] = $isCreatedEarly ? 1 : 0;
            $cyc['created_early_days'] = $createdEarlyDays;

            // Early or Late payment timing (Dual-Track: System POS Settlement vs Declared Receipt)
            $systemPaidDateStr = !empty($cyc['paid_at']) ? substr((string)$cyc['paid_at'], 0, 10) : '';
            $declaredPaidDateStr = !empty($cyc['declared_paid_at']) ? substr((string)$cyc['declared_paid_at'], 0, 10) : '';
            
            // Track 1: System POS Settlement Timing
            $sysPaidEarly = (($cyc['status'] ?? '') === 'paid' && $systemPaidDateStr !== '' && $dueDateStr !== '' && strtotime($systemPaidDateStr) < strtotime($dueDateStr));
            $sysPaidLate = (($cyc['status'] ?? '') === 'paid' && $systemPaidDateStr !== '' && $dueDateStr !== '' && strtotime($systemPaidDateStr) > strtotime($dueDateStr));
            $cyc['system_paid_date'] = $systemPaidDateStr;
            $cyc['system_is_paid_early'] = $sysPaidEarly ? 1 : 0;
            $cyc['system_early_days'] = $sysPaidEarly ? max(1, (int)round((strtotime($dueDateStr) - strtotime($systemPaidDateStr)) / 86400)) : 0;
            $cyc['system_is_paid_late'] = $sysPaidLate ? 1 : 0;
            $cyc['system_paid_late_days'] = $sysPaidLate ? max(1, (int)round((strtotime($systemPaidDateStr) - strtotime($dueDateStr)) / 86400)) : 0;

            // Track 2: Declared Receipt Timing
            $hasDeclared = ($declaredPaidDateStr !== '');
            $decPaidEarly = ($hasDeclared && ($cyc['status'] ?? '') === 'paid' && $dueDateStr !== '' && strtotime($declaredPaidDateStr) < strtotime($dueDateStr));
            $decPaidLate = ($hasDeclared && ($cyc['status'] ?? '') === 'paid' && $dueDateStr !== '' && strtotime($declaredPaidDateStr) > strtotime($dueDateStr));
            $cyc['has_declared_paid_date'] = $hasDeclared ? 1 : 0;
            $cyc['declared_paid_date'] = $declaredPaidDateStr;
            $cyc['declared_is_paid_early'] = $decPaidEarly ? 1 : 0;
            $cyc['declared_early_days'] = $decPaidEarly ? max(1, (int)round((strtotime($dueDateStr) - strtotime($declaredPaidDateStr)) / 86400)) : 0;
            $cyc['declared_is_paid_late'] = $decPaidLate ? 1 : 0;
            $cyc['declared_paid_late_days'] = $decPaidLate ? max(1, (int)round((strtotime($declaredPaidDateStr) - strtotime($dueDateStr)) / 86400)) : 0;

            // Track 3: Audit Variance between System POS and Declared Receipt
            if ($hasDeclared && $systemPaidDateStr !== '') {
                $cyc['timing_discrepancy_days'] = (int)round((strtotime($systemPaidDateStr) - strtotime($declaredPaidDateStr)) / 86400);
            } else {
                $cyc['timing_discrepancy_days'] = 0;
            }

            // Default / Effective legacy fallbacks
            $paidDateStr = ($declaredPaidDateStr !== '') ? $declaredPaidDateStr : $systemPaidDateStr;
            $isPaidEarly = (($cyc['status'] ?? '') === 'paid' && $paidDateStr !== '' && $dueDateStr !== '' && strtotime($paidDateStr) < strtotime($dueDateStr));
            $isPaidLate = (($cyc['status'] ?? '') === 'paid' && $paidDateStr !== '' && $dueDateStr !== '' && strtotime($paidDateStr) > strtotime($dueDateStr));
            $cyc['is_paid_early'] = $isPaidEarly ? 1 : 0;
            $cyc['early_days'] = $isPaidEarly ? max(1, (int)round((strtotime($dueDateStr) - strtotime($paidDateStr)) / 86400)) : 0;
            $cyc['paid_early_days'] = $cyc['early_days'];
            $cyc['is_paid_late'] = $isPaidLate ? 1 : 0;
            $cyc['paid_late_days'] = $isPaidLate ? max(1, (int)round((strtotime($paidDateStr) - strtotime($dueDateStr)) / 86400)) : 0;
            $cyc['paid_date_effective'] = $paidDateStr;

            if ($cyc['status'] === 'paid') {
                $paidCyclesCount++;
            } else {
                $rem = Decimal::sub((string)$cyc['amount_expected'], (string)$cyc['amount_paid']);
                if (Decimal::comp($rem, '0') > 0) {
                    $outstandingAmount = Decimal::add($outstandingAmount, $rem);
                }
            }
        }
        unset($cyc);

        // Sort descending by due_date for recent-first rendering while preserving cycle_index
        usort($cycles, fn($a, $b) => strcmp($b['due_date'], $a['due_date']));

        // Fetch settlements associated with this bill or its cycles
        $sStmt = $db->prepare("SELECT ps.*, 
                pu.username AS payer_name, 
                pu.username AS payer_username,
                pu.username AS username,
                py.username AS payee_name,
                py.username AS payee_username,
                ru.username AS refused_by_name,
                du.username AS disputed_by_name,
                su.username AS settled_by_name
            FROM partner_settlements ps
            LEFT JOIN users pu ON ps.payer_user_id = pu.id
            LEFT JOIN users py ON ps.payee_user_id = py.id
            LEFT JOIN users ru ON ps.refused_by = ru.id
            LEFT JOIN users du ON ps.disputed_by = du.id
            LEFT JOIN users su ON ps.settled_by = su.id
            WHERE (ps.settlement_type = 'bill_split' OR ps.settlement_type IS NULL)
              AND (
                   ps.bill_id = :bid 
                OR (ps.related_entity_type = 'recurring_bills' AND ps.related_entity_id = :bid2)
                OR (ps.related_entity_type = 'recurring_bill_cycle' AND ps.related_entity_id IN (SELECT id FROM recurring_bill_cycles WHERE bill_id = :bid3))
              )
            ORDER BY (ps.status = 'cancelled' OR ps.cancelled_at IS NOT NULL) ASC, (ps.status = 'settled') DESC, ps.id DESC");
        $sStmt->execute(['bid' => $id, 'bid2' => $id, 'bid3' => $id]);
        $settlements = $sStmt->fetchAll();

        // Check refusal status
        $hasRefusal = (int)($bill['has_refusal'] ?? 0);
        $refusedBy = $bill['refused_by_name'] ?? null;
        $refusalReason = $bill['refusal_reason'] ?? null;
        $refusedAt = $bill['refused_at'] ?? null;

        foreach ($settlements as $s) {
            if ($s['status'] === 'cancelled' || !empty($s['cancelled_at'])) continue;
            if ($s['status'] === 'refused' || $s['status'] === 'disputed') {
                $hasRefusal = 1;
                $refusedBy = $s['refused_by_name'] ?: ($s['payer_name'] ?? $refusedBy);
                $refusalReason = $s['refusal_reason'] ?: ($s['dispute_reason'] ?? $refusalReason);
                $refusedAt = $s['refused_at'] ?: ($s['disputed_at'] ?? $refusedAt);
                break;
            }
        }

        // Fetch audit history from expense_history
        $hStmt = $db->prepare("SELECT eh.*, u.username AS edited_by_name 
            FROM expense_history eh 
            LEFT JOIN users u ON eh.edited_by = u.id 
            WHERE eh.bill_id = :bid 
            ORDER BY eh.created_at DESC LIMIT 50");
        $hStmt->execute(['bid' => $id]);
        $history = $hStmt->fetchAll();
        foreach ($history as &$h) {
            if (!empty($h['changes']) && is_string($h['changes'])) {
                $h['changes'] = json_decode($h['changes'], true) ?: $h['changes'];
            }
            if (!empty($h['old_values']) && is_string($h['old_values'])) {
                $h['old_values'] = json_decode($h['old_values'], true) ?: $h['old_values'];
            }
            if (!empty($h['new_values']) && is_string($h['new_values'])) {
                $h['new_values'] = json_decode($h['new_values'], true) ?: $h['new_values'];
            }
        }
        unset($h);

        // Fetch unified system logs (Circle events + all Period Bill Cycle events + Settlements)
        $lStmt = $db->prepare("SELECT sl.*, u.username AS user_name 
            FROM system_logs sl 
            LEFT JOIN users u ON sl.user_id = u.id 
            WHERE (sl.module = 'recurring_bills' AND sl.entity_id = :bid)
               OR (sl.module = 'recurring_bill_cycles' AND (
                      sl.entity_id IN (SELECT id FROM recurring_bill_cycles WHERE bill_id = :bid2)
                      OR JSON_UNQUOTE(JSON_EXTRACT(sl.details, '$.bill_id')) = :bid3
                  ))
               OR (sl.module = 'partner_settlements' AND (
                      JSON_UNQUOTE(JSON_EXTRACT(sl.details, '$.bill_id')) = :bid4
                      OR sl.entity_id IN (SELECT id FROM partner_settlements WHERE bill_id = :bid5)
                  ))
            ORDER BY sl.created_at DESC LIMIT 60");
        $lStmt->execute(['bid' => $id, 'bid2' => $id, 'bid3' => $id, 'bid4' => $id, 'bid5' => $id]);
        $logs = $lStmt->fetchAll();

        $canCancelEdit = false;
        if (!empty($bill['is_archived']) && (int)($bill['version'] ?? 1) > 1 && empty($bill['is_locked_for_edit']) && ($bill['agreement_status'] ?? '') !== 'all_accepted') {
            $revCount = (int)$db->query("SELECT COUNT(*) FROM recurring_bill_revisions WHERE bill_id = " . (int)$id . " AND cancelled_at IS NULL")->fetchColumn();
            $canCancelEdit = ($revCount > 0);
        }
        $bill['can_cancel_edit'] = $canCancelEdit;

        // Build Unified Complete Split Payers Breakdown (Creator + Debtors)
        // Build Unified Complete Split Payers Synthesis (Creator + All Debtors / Settled + Pending)
        $totalBillAmt = (string)($bill['amount'] ?? '0');
        if (Decimal::comp($totalBillAmt, '0') <= 0 && !empty($cycles)) {
            $totalBillAmt = (string)($cycles[0]['amount_expected'] ?: $cycles[0]['amount_paid']);
        }
        $billCreatorId = (int)($bill['created_by'] ?? 0);
        $unifiedPayers = [];

        // Collect all distinct participant user IDs across settlements, split_data, and payments
        $participantUserIds = [];

        // 1. From settlements (skip cancelled ones)
        foreach ($settlements as $s) {
            if ($s['status'] === 'cancelled' || !empty($s['cancelled_at'])) continue;
            $uid = (int)($s['payer_user_id'] ?? 0);
            if ($uid > 0 && !in_array($uid, $participantUserIds, true)) {
                $participantUserIds[] = $uid;
            }
        }

        // 2. From primary cycle split_data OR bill split_data
        $firstCyc = !empty($cycles) ? $cycles[0] : null;
        $splitDataDecoded = $firstCyc['split_data_decoded'] ?? null;
        if (empty($splitDataDecoded) && !empty($bill['split_data'])) {
            $splitDataDecoded = is_string($bill['split_data']) ? json_decode($bill['split_data'], true) : $bill['split_data'];
        }
        if (is_array($splitDataDecoded)) {
            foreach ($splitDataDecoded as $sp) {
                $uid = (int)($sp['user_id'] ?? 0);
                if ($uid > 0 && !in_array($uid, $participantUserIds, true)) {
                    $participantUserIds[] = $uid;
                }
            }
        }

        // 3. From payments
        foreach ($allPayments as $pmt) {
            $uid = (int)($pmt['user_id'] ?? 0);
            if ($uid > 0 && !in_array($uid, $participantUserIds, true)) {
                $participantUserIds[] = $uid;
            }
        }

        // 4. Fallback if single-payer or completely empty
        if (empty($participantUserIds)) {
            $soleUid = (int)($bill['created_by'] ?? 0);
            if ($soleUid > 0) {
                $participantUserIds[] = $soleUid;
            }
        }

        foreach ($participantUserIds as $pUid) {
            // Find corresponding settlement (prioritizing active non-cancelled)
            $matchedSettlement = null;
            foreach ($settlements as $s) {
                if ((int)($s['payer_user_id'] ?? 0) === $pUid && $s['status'] !== 'cancelled' && empty($s['cancelled_at'])) {
                    $matchedSettlement = $s;
                    break;
                }
            }
            if (!$matchedSettlement) {
                foreach ($settlements as $s) {
                    if ((int)($s['payer_user_id'] ?? 0) === $pUid) {
                        $matchedSettlement = $s;
                        break;
                    }
                }
            }

            // Find corresponding payment
            $matchedPayment = null;
            $userPayments = [];
            foreach ($allPayments as $pmt) {
                if ((int)($pmt['user_id'] ?? 0) === $pUid) {
                    $userPayments[] = $pmt;
                    if (!empty($pmt['paid_at'])) {
                        $matchedPayment = $pmt;
                    }
                }
            }
            if (!$matchedPayment && !empty($userPayments)) {
                $matchedPayment = $userPayments[0];
            }

            // Find corresponding split_data entry
            $matchedSplit = null;
            if (is_array($splitDataDecoded)) {
                foreach ($splitDataDecoded as $sp) {
                    if ((int)($sp['user_id'] ?? 0) === $pUid) {
                        $matchedSplit = $sp;
                        break;
                    }
                }
            }

            // Resolve username
            $pUsername = $matchedSettlement['payer_name'] 
                ?? $matchedSettlement['debtor_name'] 
                ?? ($matchedPayment['payer_name'] ?? ($matchedPayment['username'] ?? null))
                ?? ($matchedSplit['username'] ?? null);
            if (empty($pUsername)) {
                $uStmt = $db->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
                $uStmt->execute(['id' => $pUid]);
                $uRow = $uStmt->fetch();
                $pUsername = $uRow['username'] ?? ('Partner #' . $pUid);
            }

            $isCreator = ($pUid === $billCreatorId);

            // Allocated Amount
            $allocatedAmt = (string)(
                $matchedSettlement['amount'] 
                ?? ($matchedSplit['amount'] 
                ?? ($matchedPayment['amount'] 
                ?? (count($participantUserIds) === 1 ? $totalBillAmt : '0')))
            );

            // Percentage
            if (!empty($matchedSplit['percent']) && is_numeric($matchedSplit['percent'])) {
                $pct = Decimal::truncate((string)$matchedSplit['percent'], 2);
            } elseif (Decimal::comp((string)$totalBillAmt, '0') > 0) {
                $pct = Decimal::truncate(Decimal::mul(Decimal::div((string)$allocatedAmt, (string)$totalBillAmt, 6), '100', 4), 2);
            } else {
                $pct = count($participantUserIds) === 1 ? '100.00' : '0.00';
            }

            // Target Source (designated source)
            $rawTarget = $matchedSettlement['target_source'] 
                ?? ($matchedSplit['paid_from'] 
                ?? ($matchedPayment['target_source'] 
                ?? ($bill['default_cash_source'] ?? 'vault')));
            $targetSource = in_array($rawTarget, ['vault', 'hand'], true) ? $rawTarget : 'vault';

            // Settled Source (actual settled cash source)
            $settledSource = null;
            if (!empty($matchedSettlement['settled_source'])) {
                $settledSource = in_array($matchedSettlement['settled_source'], ['vault', 'hand'], true) ? $matchedSettlement['settled_source'] : 'vault';
            } elseif (!empty($matchedPayment['paid_at']) && !empty($matchedPayment['paid_from'])) {
                $settledSource = in_array($matchedPayment['paid_from'], ['vault', 'hand'], true) ? $matchedPayment['paid_from'] : 'vault';
            }

            // Switched Source Flag
            $switchedSource = (!empty($settledSource) && $settledSource !== $targetSource);

            // Settlement Status
            $settlementStatus = 'pending';
            if (!empty($matchedPayment['paid_at'])) {
                $settlementStatus = 'settled';
            } elseif (!empty($matchedSettlement['status']) && $matchedSettlement['status'] !== 'cancelled') {
                $settlementStatus = $matchedSettlement['status'];
            } elseif (!empty($matchedSettlement['status'])) {
                $settlementStatus = $matchedSettlement['status'];
            }

            // Acceptance Status (Phase 1)
            $acceptanceStatus = 'pending';
            if ($isCreator) {
                $acceptanceStatus = 'accepted';
            } elseif (!empty($matchedPayment['paid_at']) || $settlementStatus === 'settled') {
                $acceptanceStatus = 'accepted';
            } elseif (!empty($matchedSettlement['acceptance_status'])) {
                $acceptanceStatus = $matchedSettlement['acceptance_status'];
            }

            $unifiedPayers[] = [
                'user_id'           => $pUid,
                'username'          => $pUsername,
                'amount'            => $allocatedAmt,
                'allocated_amount'  => $allocatedAmt,
                'percent'           => $pct,
                'target_source'     => $targetSource,
                'designated_source' => $targetSource,
                'settled_source'    => $settledSource,
                'switched_source'   => $switchedSource,
                'paid_from'         => $settledSource ?: $targetSource,
                'is_creator'        => $isCreator,
                'settlement_status' => $settlementStatus,
                'status'            => $settlementStatus,
                'acceptance_status' => $acceptanceStatus,
                'accepted_at'       => $matchedSettlement['accepted_at'] ?? null,
                'refused_at'        => $matchedSettlement['refused_at'] ?? null,
                'refusal_reason'    => $matchedSettlement['refusal_reason'] ?? null,
                'settled_at'        => $matchedSettlement['settled_at'] ?? ($matchedPayment['paid_at'] ?? null),
                'paid_at'           => $matchedPayment['paid_at'] ?? ($matchedSettlement['settled_at'] ?? null),
                'receipt_ref'       => $matchedPayment['receipt_ref'] ?? null
            ];
        }
        $bill['unified_payers'] = $unifiedPayers;

        $isBillFullyPaid = ($bill['settlement_status'] === 'settled' || !empty($bill['paid_at']) || Decimal::comp((string)$outstandingAmount, '0') <= 0);
        if ($isBillFullyPaid || empty($hasRefusal)) {
            if (!empty($bill['note'])) {
                $bill['note'] = trim(preg_replace('/\s*\[REFUSED by [^\]]+\]\s*/i', ' ', $bill['note']));
            }
        }

        Response::json([
            'ok'          => true,
            'bill'        => $bill,
            'payers'      => $unifiedPayers,
            'cycles'      => $cycles,
            'summary'     => [
                'total_settled'       => $totalSettled,
                'paid_cycles_count'   => $paidCyclesCount,
                'total_cycles_count'  => count($cycles),
                'outstanding_amount'  => $outstandingAmount,
                'primary_cash_source' => $bill['default_cash_source'] ?? 'vault'
            ],
            'settlements' => $settlements,
            'refusal_status' => [
                'has_refusal'    => $hasRefusal === 1,
                'refused_by'     => $refusedBy,
                'refusal_reason' => $refusalReason,
                'refused_at'     => $refusedAt
            ],
            'history'     => $history,
            'system_logs' => $logs
        ]);
    }

    /** GET /api/recurring-bills/cycles/{id}/voucher - Comprehensive cycle data for printable voucher */
    public function getCycleVoucher(string $cycleId): void
    {
        $db = Database::getConnection();
        $stmt = $db->prepare("SELECT c.*, 
                b.name AS bill_name, 
                b.category, 
                b.provider_name, 
                b.uid AS bill_uid, 
                b.frequency, 
                b.is_archived,
                b.default_cash_source,
                b.receipt_ref AS bill_receipt_ref,
                b.receipt_image AS bill_receipt_image,
                b.receipt_image_name AS bill_receipt_image_name,
                b.note AS bill_note,
                b.agreement_status AS bill_agreement_status,
                b.settlement_status AS bill_settlement_status,
                b.created_at AS parent_circle_created_at,
                b.deleted_at AS bill_deleted_at,
                b.deleted_by AS bill_deleted_by,
                b.delete_reason AS bill_delete_reason,
                del_u.username AS deleted_by_name,
                COALESCE(c.bill_created_at, c.created_at) AS bill_created_at,
                cb.username AS bill_created_by_name,
                cb.username AS created_by_name,
                b.created_by AS bill_created_by,
                u.username AS paid_by_name,
                u.username AS paid_by_fullname,
                lu.username AS last_edited_by_username
            FROM recurring_bill_cycles c
            JOIN recurring_bills b ON c.bill_id = b.id
            LEFT JOIN users cb ON b.created_by = cb.id
            LEFT JOIN users del_u ON b.deleted_by = del_u.id
            LEFT JOIN users u ON c.paid_by = u.id
            LEFT JOIN users lu ON c.last_edited_by = lu.id
            WHERE c.id = :id");
        $stmt->execute(['id' => (int)$cycleId]);
        $cycle = $stmt->fetch();

        if (!$cycle) {
            Response::json(['error' => 'Cycle not found'], 404);
            return;
        }

        // Calculate chronological period number (1-based index based on due_date ASC, id ASC)
        $allCyclesStmt = $db->prepare("SELECT id FROM recurring_bill_cycles WHERE bill_id = :bid ORDER BY due_date ASC, id ASC");
        $allCyclesStmt->execute(['bid' => (int)$cycle['bill_id']]);
        $allCycleIds = $allCyclesStmt->fetchAll(\PDO::FETCH_COLUMN);
        $cPos = array_search((int)$cycle['id'], array_map('intval', $allCycleIds));
        $periodNumber = ($cPos !== false) ? ($cPos + 1) : 1;
        $cycle['cycle_number'] = $periodNumber;
        $cycle['cycle_index']  = $periodNumber;

        // Fetch granular payments (include voided payments if the bill is deleted so audit details are complete)
        $isBillDeleted = !empty($cycle['bill_deleted_at']) || !empty($cycle['deleted_at']);
        $pStmt = $db->prepare("SELECT p.*, 
                ps.target_source, 
                ps.settled_source, 
                ps.status AS settlement_status, 
                ps.acceptance_status,
                ps.accepted_at,
                ps.refused_at,
                ps.settled_at,
                ps.refusal_reason,
                u.username AS payer_name, 
                u.username AS paid_by_name, 
                u.username AS username, 
                u.username AS payer_fullname 
            FROM recurring_bill_cycle_payments p 
            LEFT JOIN users u ON p.user_id = u.id 
            LEFT JOIN partner_settlements ps ON (p.settlement_id = ps.id OR (p.settlement_id IS NULL AND ps.cycle_id = p.cycle_id AND ps.settlement_type = 'bill_single'))
            WHERE p.cycle_id = :cid AND " . ($isBillDeleted ? "1=1" : "p.voided_at IS NULL") . " 
            ORDER BY p.id ASC");
        $pStmt->execute(['cid' => (int)$cycleId]);
        $payments = $pStmt->fetchAll();
        $totalExpAmt = (string)($cycle['amount_expected'] ?: ($cycle['amount_paid'] ?: '0'));
        foreach ($payments as &$pmt) {
            if (Decimal::comp($totalExpAmt, '0') > 0) {
                $pmt['percent'] = Decimal::truncate(Decimal::mul(Decimal::div((string)$pmt['amount'], $totalExpAmt, 6), '100', 4), 2);
            } else {
                $pmt['percent'] = '0.00';
            }
        }
        unset($pmt);

        // Fetch partner settlements
        $sStmt = $db->prepare("SELECT ps.*, 
                pu.username AS payer_name, 
                pu.username AS payer_username, 
                pu.username AS debtor_name, 
                py.username AS payee_name, 
                py.username AS payee_username, 
                py.username AS creditor_name 
            FROM partner_settlements ps 
            LEFT JOIN users pu ON ps.payer_user_id = pu.id 
            LEFT JOIN users py ON ps.payee_user_id = py.id 
            WHERE (ps.cycle_id = :cid OR (ps.related_entity_type = 'recurring_bill_cycle' AND ps.related_entity_id = :cid2)
                   OR (ps.bill_id = :bid AND ps.cycle_id IS NULL)
                   OR (ps.related_entity_type IN ('recurring_bill', 'recurring_bills') AND ps.related_entity_id = :bid2))
            ORDER BY (ps.status = 'cancelled' OR ps.cancelled_at IS NOT NULL) ASC,
                     (ps.status = 'settled') DESC,
                     ps.id DESC");
        $sStmt->execute([
            'cid'  => (int)$cycleId, 
            'cid2' => (int)$cycleId,
            'bid'  => (int)($cycle['bill_id'] ?? 0),
            'bid2' => (int)($cycle['bill_id'] ?? 0)
        ]);
        $settlements = $sStmt->fetchAll();

        // Store settings & branding
        $storeName = 'Sizar POS Pro';
        $storeAddress = '';
        $storePhone = '';
        $storeLogo = '';
        $storeDescription = '';
        try {
            $settingsStmt = $db->query("SELECT business_name, description, business_address, business_city, business_phone, business_logo, business_logo_rect, business_logo_circle, logo_active_shape, currency_symbol, app_name FROM settings LIMIT 1");
            if ($row = $settingsStmt->fetch()) {
                $storeName = !empty($row['business_name']) ? $row['business_name'] : (!empty($row['app_name']) ? $row['app_name'] : 'Sizar POS Pro');
                $city = !empty($row['business_city']) ? ', ' . $row['business_city'] : '';
                $storeAddress = ($row['business_address'] ?? '') . $city;
                $storePhone = $row['business_phone'] ?? '';
                $storeDescription = $row['description'] ?? '';
                $shape = $row['logo_active_shape'] ?? 'square';
                if ($shape === 'rect' && !empty($row['business_logo_rect'])) {
                    $storeLogo = $row['business_logo_rect'];
                } elseif ($shape === 'circle' && !empty($row['business_logo_circle'])) {
                    $storeLogo = $row['business_logo_circle'];
                } else {
                    $storeLogo = $row['business_logo'] ?? '';
                }
            }
        } catch (\Exception $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

        // Build Unified Complete Split Payers Synthesis (Creator + All Debtors / Settled + Pending)
        $cycCreatorId = (int)($cycle['bill_created_by'] ?? $cycle['created_by'] ?? 0);
        $unifiedPayers = [];

        // Collect all distinct participant user IDs across settlements, split_data, and payments
        $participantUserIds = [];

        // 1. From settlements
        foreach ($settlements as $s) {
            $uid = (int)($s['payer_user_id'] ?? 0);
            if ($uid > 0 && !in_array($uid, $participantUserIds, true)) {
                $participantUserIds[] = $uid;
            }
        }

        // 2. From split_data
        $splitDataDecoded = null;
        if (!empty($cycle['split_data'])) {
            $splitDataDecoded = is_array($cycle['split_data']) ? $cycle['split_data'] : json_decode((string)$cycle['split_data'], true);
            if (is_array($splitDataDecoded)) {
                foreach ($splitDataDecoded as $sp) {
                    $uid = (int)($sp['user_id'] ?? 0);
                    if ($uid > 0 && !in_array($uid, $participantUserIds, true)) {
                        $participantUserIds[] = $uid;
                    }
                }
            }
        }

        // 3. From payments
        foreach ($payments as $pmt) {
            $uid = (int)($pmt['user_id'] ?? 0);
            if ($uid > 0 && !in_array($uid, $participantUserIds, true)) {
                $participantUserIds[] = $uid;
            }
        }

        // 4. Fallback if single-payer or completely empty
        if (empty($participantUserIds)) {
            $soleUid = (int)($cycle['bill_created_by'] ?: ($cycle['paid_by'] ?: ($cycle['created_by'] ?: 0)));
            if ($soleUid > 0) {
                $participantUserIds[] = $soleUid;
            }
        }

        // Synthesize each participant
        $isCycleFullyPaid = in_array($cycle['status'] ?? '', ['paid', 'completed'], true) || (Decimal::comp((string)($cycle['amount_paid'] ?? '0'), $totalExpAmt) >= 0 && Decimal::comp($totalExpAmt, '0') > 0);

        foreach ($participantUserIds as $pUid) {
            // Find corresponding settlement (prioritize active/non-cancelled over cancelled)
            $matchedSettlement = null;
            foreach ($settlements as $s) {
                if ((int)($s['payer_user_id'] ?? 0) === $pUid) {
                    if ($s['status'] !== 'cancelled' && empty($s['cancelled_at'])) {
                        $matchedSettlement = $s;
                        break;
                    }
                    if (!$matchedSettlement) {
                        $matchedSettlement = $s;
                    }
                }
            }

            // Find corresponding payments for this user
            $matchedPayment = null;
            $userPayments = [];
            foreach ($payments as $pmt) {
                if ((int)($pmt['user_id'] ?? 0) === $pUid) {
                    $userPayments[] = $pmt;
                    if (!empty($pmt['paid_at'])) {
                        $matchedPayment = $pmt;
                    }
                }
            }
            if (!$matchedPayment && !empty($userPayments)) {
                $matchedPayment = $userPayments[0];
            }

            // Find corresponding split_data entry
            $matchedSplit = null;
            if (is_array($splitDataDecoded)) {
                foreach ($splitDataDecoded as $sp) {
                    if ((int)($sp['user_id'] ?? 0) === $pUid) {
                        $matchedSplit = $sp;
                        break;
                    }
                }
            }

            // Resolve username
            $pUsername = $matchedSettlement['payer_name'] 
                ?? $matchedSettlement['debtor_name'] 
                ?? ($matchedPayment['payer_name'] ?? ($matchedPayment['username'] ?? null))
                ?? ($matchedSplit['username'] ?? null);
            if (empty($pUsername)) {
                $uStmt = $db->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
                $uStmt->execute(['id' => $pUid]);
                $uRow = $uStmt->fetch();
                $pUsername = $uRow['username'] ?? ('Partner #' . $pUid);
            }

            $isCreator = ($pUid === $cycCreatorId);

            // Allocated Amount
            $allocatedAmt = (string)(
                $matchedSettlement['amount'] 
                ?? ($matchedSplit['amount'] 
                ?? ($matchedPayment['amount'] 
                ?? (count($participantUserIds) === 1 ? $totalExpAmt : '0')))
            );

            // Percentage
            if (!empty($matchedSplit['percent']) && is_numeric($matchedSplit['percent'])) {
                $pct = number_format((float)$matchedSplit['percent'], 2);
            } elseif (Decimal::comp($totalExpAmt, '0') > 0) {
                $pct = number_format(((float)$allocatedAmt / (float)$totalExpAmt) * 100, 2);
            } else {
                $pct = count($participantUserIds) === 1 ? '100.00' : '0.00';
            }

            // Target Source (designated source)
            $rawTarget = $matchedSettlement['target_source'] 
                ?? ($matchedSplit['paid_from'] 
                ?? ($matchedPayment['target_source'] 
                ?? ($cycle['paid_from'] 
                ?? ($cycle['default_cash_source'] ?? 'vault'))));
            $targetSource = in_array($rawTarget, ['vault', 'hand'], true) ? $rawTarget : 'vault';

            // Settled Source (actual settled cash source)
            $settledSource = null;
            if (!empty($matchedSettlement['settled_source'])) {
                $settledSource = in_array($matchedSettlement['settled_source'], ['vault', 'hand'], true) ? $matchedSettlement['settled_source'] : 'vault';
            } elseif (!empty($matchedPayment['paid_at']) && !empty($matchedPayment['paid_from'])) {
                $settledSource = in_array($matchedPayment['paid_from'], ['vault', 'hand'], true) ? $matchedPayment['paid_from'] : 'vault';
            } elseif (count($participantUserIds) === 1 && $isCycleFullyPaid && !empty($cycle['paid_from'])) {
                $settledSource = in_array($cycle['paid_from'], ['vault', 'hand'], true) ? $cycle['paid_from'] : 'vault';
            }

            // Switched Source Flag
            $switchedSource = (!empty($settledSource) && $settledSource !== $targetSource);

            // Settlement Status
            $settlementStatus = 'pending';
            if (!empty($matchedPayment['paid_at'])) {
                $settlementStatus = 'settled';
            } elseif (!empty($matchedSettlement['status']) && $matchedSettlement['status'] !== 'cancelled') {
                $settlementStatus = $matchedSettlement['status'];
            } elseif (count($participantUserIds) === 1 && $isCycleFullyPaid) {
                $settlementStatus = 'settled';
            }

            // Acceptance Status (Phase 1)
            $acceptanceStatus = 'pending';
            if ($isCreator) {
                $acceptanceStatus = 'accepted';
            } elseif ($settlementStatus === 'settled' || !empty($matchedPayment['paid_at'])) {
                $acceptanceStatus = 'accepted';
            } elseif (!empty($matchedSettlement['acceptance_status'])) {
                $acceptanceStatus = $matchedSettlement['acceptance_status'];
            }

            // Dates & Timestamps
            $settledAt = (!empty($matchedPayment['paid_at']) ? $matchedPayment['paid_at'] : null)
                ?: ((!empty($matchedSettlement['settled_at']) && $settlementStatus === 'settled') ? $matchedSettlement['settled_at'] : null)
                ?: (count($participantUserIds) === 1 && $isCycleFullyPaid ? ($cycle['paid_at'] ?? null) : null);
            $paidAt = $settledAt;

            $acceptedAt = (!empty($matchedSettlement['accepted_at']) ? $matchedSettlement['accepted_at'] : null)
                ?: ($isCreator ? ($cycle['bill_created_at'] ?? $cycle['created_at']) : null)
                ?: ($settlementStatus === 'settled' ? $settledAt : null);
            $refusedAt = ($settlementStatus !== 'settled') ? ($matchedSettlement['refused_at'] ?? null) : null;
            $refusalReason = ($settlementStatus !== 'settled') ? ($matchedSettlement['refusal_reason'] ?? null) : null;

            // Receipt Ref
            $receiptRef = $matchedPayment['receipt_ref'] 
                ?? ($cycle['receipt_ref'] ?? null);

            $unifiedPayers[] = [
                'user_id'           => $pUid,
                'username'          => $pUsername,
                'amount'            => $allocatedAmt,
                'allocated_amount'  => $allocatedAmt,
                'percent'           => $pct,
                'target_source'     => $targetSource,
                'designated_source' => $targetSource,
                'settled_source'    => $settledSource,
                'switched_source'   => $switchedSource,
                'paid_from'         => $settledSource ?: $targetSource,
                'is_creator'        => $isCreator,
                'settlement_status' => $settlementStatus,
                'status'            => $settlementStatus,
                'acceptance_status' => $acceptanceStatus,
                'accepted_at'       => $acceptedAt,
                'refused_at'        => $refusedAt,
                'refusal_reason'    => $refusalReason,
                'settled_at'        => $settledAt,
                'paid_at'           => $paidAt,
                'receipt_ref'       => $receiptRef
            ];
        }

        $billData = [
            'id'                  => $cycle['bill_id'],
            'name'                => $cycle['bill_name'],
            'category'            => $cycle['category'],
            'provider_name'       => $cycle['provider_name'],
            'uid'                 => $cycle['bill_uid'],
            'frequency'           => $cycle['frequency'],
            'is_archived'         => $cycle['is_archived'],
            'default_cash_source' => $cycle['default_cash_source'],
            'receipt_ref'         => $cycle['receipt_ref'] ?? null,
            'receipt_image_name'  => $cycle['receipt_image_name'] ?? null,
            'note'                      => $cycle['bill_note'] ?? null,
            'created_at'                => $cycle['parent_circle_created_at'] ?? null,
            'parent_circle_created_at'  => $cycle['parent_circle_created_at'] ?? null,
            'created_by_name'           => $cycle['created_by_name'] ?? $cycle['bill_created_by_name'] ?? null,
            'created_by'                => (int)($cycle['bill_created_by'] ?? ($cycle['created_by'] ?? 0)),
            'deleted_at'                => $cycle['bill_deleted_at'] ?? null,
            'deleted_by'                => $cycle['bill_deleted_by'] ?? null,
            'deleted_by_name'           => $cycle['deleted_by_name'] ?? null,
            'delete_reason'             => $cycle['bill_delete_reason'] ?? null,
            'agreement_status'          => $cycle['bill_agreement_status'] ?? ($cycle['agreement_status'] ?? null),
            'settlement_status'         => $cycle['bill_settlement_status'] ?? ($cycle['split_status'] ?? null),
            'unified_payers'            => $unifiedPayers,
        ];

        $dueDate = $cycle['due_date'] ?? '';
        $billCreated = !empty($cycle['bill_created']);
        $today = date('Y-m-d');
        
        $creationDateStr = !empty($cycle['bill_created_at']) ? substr((string)$cycle['bill_created_at'], 0, 10) : (!empty($cycle['created_at']) ? substr((string)$cycle['created_at'], 0, 10) : '');
        $invoiceDateStr = !empty($cycle['invoice_date']) ? substr((string)$cycle['invoice_date'], 0, 10) : '';
        $effectiveCreatedDate = ($invoiceDateStr !== '') ? $invoiceDateStr : $creationDateStr;
        $cycle['creation_date_effective'] = $effectiveCreatedDate;
        
        $daysUntilCadence = ($dueDate !== '') ? (int)round((strtotime($dueDate) - strtotime($today)) / 86400) : 0;
        $cycle['days_until_cadence'] = $daysUntilCadence;

        $isCreatedEarly = ($billCreated && $dueDate !== '' && $effectiveCreatedDate !== '' && strtotime($effectiveCreatedDate) < strtotime($dueDate));
        $createdEarlyDays = $isCreatedEarly ? max(1, (int)round((strtotime($dueDate) - strtotime($effectiveCreatedDate)) / 86400)) : 0;
        $cycle['is_created_early'] = $isCreatedEarly ? 1 : 0;
        $cycle['created_early_days'] = $createdEarlyDays;

        // Early or Late payment timing (Dual-Track: System POS Settlement vs Declared Receipt)
        $systemPaidDateStr = !empty($cycle['paid_at']) ? substr((string)$cycle['paid_at'], 0, 10) : '';
        $declaredPaidDateStr = !empty($cycle['declared_paid_at']) ? substr((string)$cycle['declared_paid_at'], 0, 10) : '';
        
        // Track 1: System POS Settlement Timing
        $sysPaidEarly = (($cycle['status'] ?? '') === 'paid' && $systemPaidDateStr !== '' && $dueDate !== '' && strtotime($systemPaidDateStr) < strtotime($dueDate));
        $sysPaidLate = (($cycle['status'] ?? '') === 'paid' && $systemPaidDateStr !== '' && $dueDate !== '' && strtotime($systemPaidDateStr) > strtotime($dueDate));
        $cycle['system_paid_date'] = $systemPaidDateStr;
        $cycle['system_is_paid_early'] = $sysPaidEarly ? 1 : 0;
        $cycle['system_early_days'] = $sysPaidEarly ? max(1, (int)round((strtotime($dueDate) - strtotime($systemPaidDateStr)) / 86400)) : 0;
        $cycle['system_is_paid_late'] = $sysPaidLate ? 1 : 0;
        $cycle['system_paid_late_days'] = $sysPaidLate ? max(1, (int)round((strtotime($systemPaidDateStr) - strtotime($dueDate)) / 86400)) : 0;

        // Track 2: Declared Receipt Timing
        $hasDeclared = ($declaredPaidDateStr !== '');
        $decPaidEarly = ($hasDeclared && ($cycle['status'] ?? '') === 'paid' && $dueDate !== '' && strtotime($declaredPaidDateStr) < strtotime($dueDate));
        $decPaidLate = ($hasDeclared && ($cycle['status'] ?? '') === 'paid' && $dueDate !== '' && strtotime($declaredPaidDateStr) > strtotime($dueDate));
        $cycle['has_declared_paid_date'] = $hasDeclared ? 1 : 0;
        $cycle['declared_paid_date'] = $declaredPaidDateStr;
        $cycle['declared_is_paid_early'] = $decPaidEarly ? 1 : 0;
        $cycle['declared_early_days'] = $decPaidEarly ? max(1, (int)round((strtotime($dueDate) - strtotime($declaredPaidDateStr)) / 86400)) : 0;
        $cycle['declared_is_paid_late'] = $decPaidLate ? 1 : 0;
        $cycle['declared_paid_late_days'] = $decPaidLate ? max(1, (int)round((strtotime($declaredPaidDateStr) - strtotime($dueDate)) / 86400)) : 0;

        // Track 3: Audit Variance
        if ($hasDeclared && $systemPaidDateStr !== '') {
            $cycle['timing_discrepancy_days'] = (int)round((strtotime($systemPaidDateStr) - strtotime($declaredPaidDateStr)) / 86400);
        } else {
            $cycle['timing_discrepancy_days'] = 0;
        }

        // Default / Effective legacy fallbacks
        $paidDateStr = ($declaredPaidDateStr !== '') ? $declaredPaidDateStr : $systemPaidDateStr;
        $isPaidEarly = (($cycle['status'] ?? '') === 'paid' && $paidDateStr !== '' && $dueDate !== '' && strtotime($paidDateStr) < strtotime($dueDate));
        $isPaidLate = (($cycle['status'] ?? '') === 'paid' && $paidDateStr !== '' && $dueDate !== '' && strtotime($paidDateStr) > strtotime($dueDate));
        $cycle['is_paid_early'] = $isPaidEarly ? 1 : 0;
        $cycle['early_days'] = $isPaidEarly ? max(1, (int)round((strtotime($dueDate) - strtotime($paidDateStr)) / 86400)) : 0;
        $cycle['paid_early_days'] = $cycle['early_days'];
        $cycle['is_paid_late'] = $isPaidLate ? 1 : 0;
        $cycle['paid_late_days'] = $isPaidLate ? max(1, (int)round((strtotime($paidDateStr) - strtotime($dueDate)) / 86400)) : 0;
        $cycle['paid_date_effective'] = $paidDateStr;

        // Clean up resolved refusal text from note
        if (!empty($cycle['note'])) {
            $isRefusalClean = empty($cycle['has_refusal']) || $isCycleFullyPaid || in_array($cycle['agreement_status'] ?? '', ['all_accepted', 'settled', 'paid'], true);
            if ($isRefusalClean) {
                $cleanedNote = trim((string)preg_replace('/\s*\[REFUSED by [^\]]+\]\s*/i', ' ', (string)$cycle['note']));
                if ($cleanedNote !== (string)$cycle['note']) {
                    $cycle['note'] = $cleanedNote;
                    try {
                        $db->prepare("UPDATE recurring_bill_cycles SET note = :n WHERE id = :id")->execute(['n' => $cleanedNote, 'id' => (int)$cycleId]);
                    } catch (\Exception $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
                }
            }
        }

        $qrToken = hash('sha256', "SIZARDEV-VOUCHER:BILL#{$cycle['bill_id']}:CYCLE#{$cycle['id']}:AMT#{$cycle['amount_paid']}:DUE#{$cycle['due_date']}");
        $qrPayload = [
            'verification_token' => $qrToken,
            'qr_data'            => "SIZARDEV-VOUCHER:BILL#{$cycle['bill_id']}:CYCLE#{$cycle['id']}:AMT#{$cycle['amount_paid']}:DUE#{$cycle['due_date']}:TOKEN#" . substr($qrToken, 0, 16)
        ];

        Response::json([
            'ok'          => true,
            'cycle'       => $cycle,
            'bill'        => $billData,
            'payments'    => $payments,
            'settlements' => $settlements,
            'payers'      => $unifiedPayers,
            'store'       => [
                'name'        => $storeName,
                'address'     => $storeAddress,
                'phone'       => $storePhone,
                'logo'        => $storeLogo,
                'description' => $storeDescription,
            ],
            'qr_payload'  => $qrPayload,
            'voucher'     => [
                'cycle'       => $cycle,
                'bill'        => $billData,
                'payments'    => $payments,
                'settlements' => $settlements,
                'store'       => [
                    'name'        => $storeName,
                    'address'     => $storeAddress,
                    'phone'       => $storePhone,
                    'logo'        => $storeLogo,
                    'description' => $storeDescription,
                ],
                'qr_payload'  => $qrPayload,
                'qr_data'     => $qrPayload['qr_data']
            ]
        ]);
    }

    /** POST /api/recurring-bills/cycles/{id}/pay - Settle a specific bill cycle */
    public function payCycle(string $cycleId, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);
        (new CashVaultController())->ensureTwoSafes($db);

        $db->beginTransaction();
        try {
            $cStmt = $db->prepare("SELECT c.*, b.name AS bill_name, b.frequency, b.interval_days, b.next_due_date 
                FROM recurring_bill_cycles c 
                JOIN recurring_bills b ON c.bill_id = b.id 
                WHERE c.id = :id FOR UPDATE");
            $cStmt->execute(['id' => $cycleId]);
            $cycle = $cStmt->fetch();
            if (!$cycle) {
                $db->rollBack();
                Response::json(['error' => 'Cycle not found'], 404);
                return;
            }

            if ($cycle['status'] === 'paid' || Decimal::comp((string)$cycle['amount_paid'], (string)$cycle['amount_expected']) >= 0) {
                $db->rollBack();
                Response::json(['error' => 'This bill cycle is already fully paid.', 'already_paid' => true], 400);
                return;
            }

            $sessionUserId = (int)($_SESSION['user_id'] ?? 1);

            // Authorization Guard 1: Single-Payer Period Bill Isolation
            // If the period bill is single-payer (split_status is 'none' or split_data is empty and no split_payers passed),
            // ONLY the user who created/initiated the period bill can record payment!
            $hasSplitData = (!empty($cycle['split_data']) && !in_array($cycle['split_status'] ?? 'none', ['none', 'single', ''], true));
            $hasInputSplits = (!empty($data['split_payers']) && is_array($data['split_payers']) && count($data['split_payers']) > 1);

            if (!$hasSplitData && !$hasInputSplits) {
                $authorizedCreator = !empty($cycle['bill_created_by']) ? (int)$cycle['bill_created_by'] : (int)($cycle['created_by'] ?? 0);
                if ($authorizedCreator > 0 && $sessionUserId !== $authorizedCreator) {
                    $db->rollBack();
                    SystemLog::write('recurring_bills', 'security_violation', (int)$cycleId, $cycle['bill_name'] ?? "Cycle #$cycleId", json_encode([
                        'violation'           => 'unauthorized_pay_cycle',
                        'error'               => 'Only the creator of this single-payer period bill can record payment.',
                        'cycle_id'            => (int)$cycleId,
                        'authorized_payer_id' => $authorizedCreator,
                        'attempted_by'        => $sessionUserId
                    ], JSON_UNESCAPED_UNICODE), $sessionUserId);
                    Response::json(['error' => 'Forbidden: Only the creator who created this single-payer bill can record payment.'], 403);
                    return;
                }
            } else {
                // Authorization Guard 2: Multi-Partner Split Isolation
                // If the bill is split, only participants listed in split_payers or split_data can pay!
                $splitData = $data['split_payers'] ?? (is_array($cycle['split_data']) ? $cycle['split_data'] : json_decode((string)($cycle['split_data'] ?? '[]'), true));
                if (is_array($splitData) && count($splitData) > 0) {
                    $allowedUserIds = array_map('intval', array_column($splitData, 'user_id'));
                    if (!in_array($sessionUserId, $allowedUserIds, true)) {
                        $db->rollBack();
                        SystemLog::write('recurring_bills', 'security_violation', (int)$cycleId, $cycle['bill_name'] ?? "Cycle #$cycleId", json_encode([
                            'violation'        => 'unmentioned_split_payer',
                            'error'            => 'User is not listed as an authorized participant in this split bill',
                            'cycle_id'         => (int)$cycleId,
                            'allowed_user_ids' => $allowedUserIds,
                            'attempted_by'     => $sessionUserId
                        ], JSON_UNESCAPED_UNICODE), $sessionUserId);
                        Response::json(['error' => 'Forbidden: You are not an assigned participant in this split bill.'], 403);
                        return;
                    }
                }
            }

            // Two-Phase Agreement Guard: In split bills, payments are strictly locked until 100% agreement (Phase 2)
            $isSplitCycle = $hasSplitData || $hasInputSplits || !in_array($cycle['split_status'] ?? 'none', ['none', 'single', ''], true);
            if ($isSplitCycle && ($cycle['agreement_status'] ?? '') !== 'all_accepted') {
                $db->rollBack();
                Response::json([
                    'error' => 'This period bill is in the Agreement Phase. All partners must accept their shares before payments are unlocked.',
                    'phase' => 'pending_acceptance'
                ], 422);
                return;
            }

            $remOwed = Decimal::sub((string)$cycle['amount_expected'], (string)$cycle['amount_paid']);
            $amountRaw = trim((string)($data['amount'] ?? $remOwed));
            if (!is_numeric($amountRaw) || Decimal::comp($amountRaw, '0') <= 0) {
                $db->rollBack();
                Response::json(['error' => 'Payment amount must be greater than zero'], 400);
                return;
            }
            $payAmount = Decimal::truncate($amountRaw, 16);
            if (Decimal::comp($payAmount, $remOwed) > 0) {
                $db->rollBack();
                Response::json(['error' => 'Payment amount (' . Decimal::format($payAmount, 2) . ' DZD) cannot exceed the remaining due (' . Decimal::format($remOwed, 2) . ' DZD).'], 422);
                return;
            }
            $paidFrom = in_array($data['paid_from'] ?? 'vault', ['vault', 'hand'], true) ? ($data['paid_from'] ?? 'vault') : 'vault';
            $paidBy = $sessionUserId;
            $paidAt = !empty($data['paid_at']) ? date('Y-m-d H:i:s', strtotime((string)$data['paid_at'])) : date('Y-m-d H:i:s');
            $receiptRef = trim((string)($data['receipt_ref'] ?? '')) ?: null;
            $note = !empty($data['note']) ? trim((string)$data['note']) : ($cycle['note'] ?? null);

            $newPaid = Decimal::add((string)$cycle['amount_paid'], $payAmount);
            $newStatus = Decimal::comp($newPaid, (string)$cycle['amount_expected']) >= 0 ? 'paid' : 'partial';

            $splitPayers = (!empty($data['split_payers']) && is_array($data['split_payers'])) ? $data['split_payers'] : null;

            if ($splitPayers && count($splitPayers) > 0) {
                $totalSplitAlloc = '0';
                foreach ($splitPayers as $sp) {
                    $spAmtRaw = trim((string)($sp['amount'] ?? '0'));
                    $spAmt = (is_numeric($spAmtRaw) && Decimal::comp($spAmtRaw, '0') > 0) ? Decimal::truncate($spAmtRaw, 16) : '0';
                    $totalSplitAlloc = Decimal::add($totalSplitAlloc, $spAmt);
                }
                if (Decimal::comp($totalSplitAlloc, $payAmount) > 0) {
                    $db->rollBack();
                    Response::json([
                        'error' => "Total split allocations (" . Decimal::format($totalSplitAlloc, 2) . " DZD) cannot exceed the payment amount (" . Decimal::format($payAmount, 2) . " DZD)."
                    ], 422);
                    return;
                }
            }

            $hasSplit = ($splitPayers && count($splitPayers) > 1);
            $agrStatus = $hasSplit ? 'pending_acceptance' : 'all_accepted';
            $spsStatus = $hasSplit ? 'pending_acceptance' : 'none';

            $upd = $db->prepare("UPDATE recurring_bill_cycles 
                SET amount_paid = :ap, status = :st, paid_from = :pf, paid_at = :pa, paid_by = :pb, 
                    receipt_ref = :ref, split_data = :sd, note = :note,
                    agreement_status = :agr, is_locked_for_edit = 0, split_status = :sps,
                    updated_at = NOW() 
                WHERE id = :id");
            $upd->execute([
                'ap'   => $newPaid,
                'st'   => $newStatus,
                'pf'   => $paidFrom,
                'pa'   => $paidAt,
                'pb'   => $paidBy,
                'ref'  => $receiptRef,
                'sd'   => $splitPayers ? json_encode($splitPayers) : null,
                'note' => $note ?: null,
                'agr'  => $agrStatus,
                'sps'  => $spsStatus,
                'id'   => $cycleId
            ]);

            if ($splitPayers && count($splitPayers) > 0) {
                // Multi-payer split payment: FRONTING CREDITOR MODEL
                // The lead cashier ($paidBy) fronts the entire external bill payment to the utility/vendor
                $leadSource = $paidFrom;
                foreach ($splitPayers as $p) {
                    if ((int)($p['user_id'] ?? 0) === $paidBy && !empty($p['paid_from'])) {
                        $leadSource = $p['paid_from'];
                        break;
                    }
                }
                if ($leadSource === 'vault' && Decimal::comp($payAmount, '0') > 0) {
                    CashVaultController::logFlow($db, 'bill_payment', 'out', $payAmount, 'recurring_bill_cycles', (int)$cycleId, "Bill Payment (Disbursed Full): {$cycle['bill_name']} ({$cycle['cycle_label']})", $paidBy);
                }

                $leadPayerName = $db->query("SELECT username FROM users WHERE id = " . (int)$paidBy)->fetchColumn() ?: 'Staff';

                foreach ($splitPayers as $payer) {
                    $pUid = (int)($payer['user_id'] ?? $paidBy);
                    $pAmtRaw = trim((string)($payer['amount'] ?? '0'));
                    $pAmt = (is_numeric($pAmtRaw) && Decimal::comp($pAmtRaw, '0') > 0) ? Decimal::truncate($pAmtRaw, 16) : '0';
                    $pFrom = in_array($payer['paid_from'] ?? 'vault', ['vault', 'hand'], true) ? ($payer['paid_from'] ?? 'vault') : 'vault';
                    if (Decimal::comp($pAmt, '0') <= 0) continue;

                    $settlementId = null;

                    // If debtor partner owes the fronting partner ($paidBy), generate a pending debt ticket in Phase 1
                    if ($pUid !== $paidBy) {
                        $settleUid = 'SET-SPLIT-' . date('Ymd') . '-' . strtoupper(substr(uniqid(), -6));
                        $sIns = $db->prepare("INSERT INTO partner_settlements 
                            (uid, payer_user_id, payee_user_id, amount, original_amount, settlement_type, status, acceptance_status, release_status, target_source, related_entity_type, related_entity_id, bill_id, cycle_id, description, details, created_by, created_at)
                            VALUES (:uid, :payer, :payee, :amt, :amt, 'bill_split', 'pending', 'pending', 'released', :src, 'recurring_bill_cycle', :cid, :bid, :cid2, :desc, :det, :cb, NOW())");
                        $sIns->execute([
                            'uid'   => $settleUid,
                            'payer' => $pUid,
                            'payee' => $paidBy,
                            'amt'   => $pAmt,
                            'src'   => $pFrom,
                            'cid'   => (int)$cycleId,
                            'bid'   => (int)$cycle['bill_id'],
                            'cid2'  => (int)$cycleId,
                            'desc'  => "Bill Share: {$cycle['bill_name']} ({$cycle['cycle_label']})",
                            'det'   => json_encode([
                                'bill_id'        => (int)$cycle['bill_id'],
                                'cycle_id'       => (int)$cycleId,
                                'cycle_label'    => $cycle['cycle_label'],
                                'total_bill'     => $payAmount,
                                'share'          => $pAmt,
                                'target_source'  => $pFrom,
                                'is_cycle_split' => 1
                            ]),
                            'cb'    => $paidBy
                        ]);
                        $settlementId = (int)$db->lastInsertId();

                        // Dispatch Phase 1 review & acceptance notification (actor never notified)
                        $sessionUser = (int)($_SESSION['user_id'] ?? 1);
                        if ($pUid !== $sessionUser) {
                            $notifTitle = "New Partner Settlement Demand: {$leadPayerName} split bill '{$cycle['bill_name']}'";
                            $notifBody  = "New Partner Settlement Demand: {$leadPayerName} split bill '{$cycle['bill_name']}' ({$cycle['cycle_label']}) for " . number_format((float)$payAmount, 2) . " DZD. Your share: " . number_format((float)$pAmt, 2) . " DZD. Please review and accept your share.";

                            $db->prepare("INSERT INTO notifications 
                                (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at)
                                VALUES (:uid, 'due_payable', :t, :b, '#page-bills?tab=settlements', 'partner_settlement', :eid, :stage, 0, NOW())")
                               ->execute([
                                'uid'   => $pUid,
                                't'     => $notifTitle,
                                'b'     => $notifBody,
                                'eid'   => $settlementId,
                                'stage' => "demand_cycle_{$cycleId}"
                            ]);
                        }
                    }

                    // Record granular payment entry
                    $cpIns = $db->prepare("INSERT INTO recurring_bill_cycle_payments 
                        (cycle_id, bill_id, user_id, amount, paid_from, paid_at, receipt_ref, settlement_id, note, created_by, created_at)
                        VALUES (:cid, :bid, :uid, :amt, :pf, :pa, :ref, :sid, :note, :cb, NOW())");
                    $cpIns->execute([
                        'cid'  => (int)$cycleId,
                        'bid'  => (int)$cycle['bill_id'],
                        'uid'  => $pUid,
                        'amt'  => $pAmt,
                        'pf'   => $pFrom,
                        'pa'   => $paidAt,
                        'ref'  => $receiptRef,
                        'sid'  => $settlementId,
                        'note' => $note ?: "Split share for {$cycle['bill_name']}",
                        'cb'   => $_SESSION['user_id'] ?? null
                    ]);
                }
            } else {
                // Single payer
                if ($paidFrom === 'vault') {
                    CashVaultController::logFlow($db, 'bill_payment', 'out', $payAmount, 'recurring_bill_cycles', (int)$cycleId, "Bill: {$cycle['bill_name']} ({$cycle['cycle_label']})", $paidBy);
                }

                $singleSetStmt = $db->prepare("SELECT id, target_source FROM partner_settlements WHERE cycle_id = :cid AND settlement_type = 'bill_single' ORDER BY id DESC LIMIT 1");
                $singleSetStmt->execute(['cid' => (int)$cycleId]);
                $singleSet = $singleSetStmt->fetch();
                $settleId = $singleSet ? (int)$singleSet['id'] : null;

                $cpIns = $db->prepare("INSERT INTO recurring_bill_cycle_payments 
                    (cycle_id, bill_id, user_id, amount, paid_from, paid_at, receipt_ref, settlement_id, note, created_by, created_at)
                    VALUES (:cid, :bid, :uid, :amt, :pf, :pa, :ref, :sid, :note, :cb, NOW())");
                $cpIns->execute([
                    'cid'  => (int)$cycleId,
                    'bid'  => (int)$cycle['bill_id'],
                    'uid'  => $paidBy,
                    'amt'  => $payAmount,
                    'pf'   => $paidFrom,
                    'pa'   => $paidAt,
                    'ref'  => $receiptRef,
                    'sid'  => $settleId,
                    'note' => $note ?: null,
                    'cb'   => $_SESSION['user_id'] ?? null
                ]);

                // Synchronize single-payer partner_settlements if present
                $updSet = $db->prepare("UPDATE partner_settlements 
                    SET status = 'settled', settled_at = NOW(), settled_by = :sb, settled_source = :src 
                    WHERE cycle_id = :cid AND settlement_type = 'bill_single' AND status != 'settled'");
                $updSet->execute([
                    'sb'  => $sessionUserId,
                    'src' => $paidFrom,
                    'cid' => (int)$cycleId
                ]);
            }

            // Note: Paying a period bill does NOT mutate the parent circle's autonomous cadence schedule.
            // Cadence timeline advances purely via calendar in ensureCyclesUpToDate.


            // History with split details
            $hist = $db->prepare("INSERT INTO expense_history (bill_id, cycle_id, edited_by, action, changes, created_at) VALUES (:bid, :cid, :by, 'paid', :ch, NOW())");
            $hist->execute([
                'bid' => $cycle['bill_id'],
                'cid' => (int)$cycleId,
                'by'  => $_SESSION['user_id'] ?? 1,
                'ch'  => json_encode([
                    'amount'       => $payAmount,
                    'paid_from'    => $paidFrom,
                    'paid_by'      => $paidBy,
                    'split_payers' => $splitPayers,
                    'cycle'        => $cycle['cycle_label'],
                    'status'       => $newStatus
                ])
            ]);

            $db->commit();

            try {
                $bStmt = $db->prepare("SELECT * FROM recurring_bills WHERE id = :bid");
                $bStmt->execute(['bid' => $cycle['bill_id']]);
                $freshBill = $bStmt->fetch();
                if ($freshBill && empty($freshBill['is_archived'])) {
                    $this->ensureCyclesUpToDate($db, $freshBill);
                }
            } catch (\Throwable $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }

            $actorUserId = (int)($_SESSION['user_id'] ?? $paidBy);

            SystemLog::write('recurring_bill_cycles', 'cycle_paid', (int)$cycleId, $cycle['bill_name'] . ' ' . $cycle['cycle_label'], json_encode([
                'bill_id'        => (int)$cycle['bill_id'],
                'cycle_id'       => (int)$cycleId,
                'cycle_label'    => $cycle['cycle_label'],
                'amount'         => (string)$payAmount,
                'amount_paid'    => (string)$newPaid,
                'paid_at'        => $paidAt,
                'payment_source' => $paidFrom,
                'paid_from'      => $paidFrom,
                'paid_by'        => $paidBy,
                'receipt_ref'    => $receiptRef,
                'status'         => $newStatus
            ]), $actorUserId);

            if ($hasSplit && !empty($splitPayers)) {
                $enrichedSplits = array_map(function($sp) use ($db, $payAmount) {
                    $uId = (int)($sp['user_id'] ?? 0);
                    $uStmt = $db->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
                    $uStmt->execute(['id' => $uId]);
                    $uName = $uStmt->fetchColumn() ?: 'Partner';
                    $src = (($sp['paid_from'] ?? 'vault') === 'vault') ? 'Cash Safe' : 'Hand (Pocket)';
                    $spAmt = (string)($sp['amount'] ?? ($sp['share_amount'] ?? '0'));
                    $pct = !empty($sp['percent']) ? $sp['percent'] : ((Decimal::comp($payAmount, '0') > 0) ? Decimal::truncate(Decimal::mul(Decimal::div($spAmt, $payAmount, 6), '100', 4), 2) : '0.00');
                    return "{$uName}: " . Decimal::format($spAmt, 2) . " DZD ({$pct}%) from {$src}";
                }, $splitPayers);

                SystemLog::write('recurring_bill_cycles', 'cycle_split', (int)$cycleId, "{$cycle['bill_name']} ({$cycle['cycle_label']})", json_encode([
                    'cycle_id'     => (int)$cycleId,
                    'bill_id'      => (int)$cycle['bill_id'],
                    'cycle_label'  => $cycle['cycle_label'],
                    'amount'       => Decimal::format($payAmount, 2) . ' DZD',
                    'split_payers' => $enrichedSplits
                ]), $actorUserId);
            }

            Response::json(['ok' => true, 'status' => $newStatus, 'amount_paid' => $newPaid]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                try { $db->rollBack(); } catch (\Throwable $ignored) {
                    error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
                }
            }
            error_log("SEC-40 Defensive exception in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to record cycle payment due to a system error'], 500);
        }
    }

    /** PUT /api/recurring-bills/{id}/cycle-anchor - Update billing start / cycle anchor date without resetting payments or agreement */
    public function updateBillCycleAnchor(string $id, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $stmt = $db->prepare("SELECT * FROM recurring_bills WHERE id = :id AND deleted_at IS NULL");
        $stmt->execute(['id' => (int)$id]);
        $bill = $stmt->fetch();
        if (!$bill) {
            Response::json(['error' => 'Bill not found'], 404);
            return;
        }

        if (!empty($bill['is_archived'])) {
            Response::json(['error' => 'Archived bills do not have rolling cycle anchors.'], 400);
            return;
        }

        // ─── PAYMENT / COMPLETED PHASE EDIT LOCK GUARD ─────────────────────────
        if (!empty($bill['is_locked_for_edit']) || ($bill['agreement_status'] ?? '') === 'all_accepted' || ($bill['settlement_status'] ?? '') === 'settled') {
            Response::json([
                'error'  => 'Cycle anchor date is locked from editing because the bill is in payment phase or already settled.',
                'locked' => true
            ], 422);
            return;
        }
        // ──────────────────────────────────────────────────────────────────────

        $newAnchor = !empty($data['cycle_anchor_date']) 
            ? date('Y-m-d', strtotime((string)$data['cycle_anchor_date'])) 
            : (!empty($data['first_due_date']) ? date('Y-m-d', strtotime((string)$data['first_due_date'])) : null);

        if (!$newAnchor) {
            Response::json(['error' => 'Valid cycle anchor date is required.'], 400);
            return;
        }

        $oldAnchor = $bill['cycle_anchor_date'] ?? $bill['first_due_date'];
        $anchorDay = (int)date('d', strtotime($newAnchor));
        $freq = $bill['frequency'] ?? 'monthly';
        if (in_array($freq, ['monthly', 'quarterly', 'semi_annual', 'yearly'], true)) {
            $newDueDay = (!empty($data['due_day']) && is_numeric($data['due_day']))
                ? max(1, min(31, (int)$data['due_day']))
                : (!empty($bill['due_day']) ? (int)$bill['due_day'] : $anchorDay);
            $anchorYear = (int)date('Y', strtotime($newAnchor));
            $anchorMonth = (int)date('m', strtotime($newAnchor));
            $daysInAnchorMonth = (int)date('t', strtotime(sprintf('%04d-%02d-01', $anchorYear, $anchorMonth)));
            $actualAnchorDay = min($newDueDay, $daysInAnchorMonth);
            $newAnchor = sprintf('%04d-%02d-%02d', $anchorYear, $anchorMonth, $actualAnchorDay);
        } else {
            $newDueDay = $anchorDay;
        }

        $sessionUser = (int)($_SESSION['user_id'] ?? 1);
        $uStmt = $db->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
        $uStmt->execute(['id' => $sessionUser]);
        $editorUsername = $uStmt->fetchColumn() ?: 'Staff';

        $db->beginTransaction();
        try {
            $newFirstDue = $this->computeNextDueDate($newAnchor, $bill['frequency'] ?? 'monthly', $newDueDay, (int)($bill['interval_days'] ?? 0));
            // Update bill anchor date and due day
            $db->prepare("UPDATE recurring_bills 
                SET cycle_anchor_date = :cad, first_due_date = :fdd, next_due_date = :ndd, due_day = :dday, 
                    last_edited_by = :leb, last_edited_by_name = :lebn, updated_at = NOW() 
                WHERE id = :id")
               ->execute([
                   'cad'  => $newAnchor,
                   'fdd'  => $newFirstDue,
                   'ndd'  => $newFirstDue,
                   'dday' => $newDueDay,
                   'leb'  => $sessionUser,
                   'lebn' => $editorUsername,
                   'id'   => (int)$id
               ]);

            // Prune virgin unbilled cycles that belong to the old anchor / cadence
            $db->prepare("DELETE FROM recurring_bill_cycles 
                WHERE bill_id = :bid 
                  AND (bill_created = 0 OR bill_created IS NULL)
                  AND (amount_paid = 0 OR amount_paid IS NULL)
                  AND (reset_count = 0 OR reset_count IS NULL)
                  AND id NOT IN (SELECT DISTINCT cycle_id FROM partner_settlements WHERE cycle_id IS NOT NULL)
                  AND id NOT IN (SELECT DISTINCT cycle_id FROM recurring_bill_cycle_payments WHERE cycle_id IS NOT NULL)
                  AND id NOT IN (SELECT DISTINCT cycle_id FROM recurring_bill_cycle_resets WHERE cycle_id IS NOT NULL)
                  AND id NOT IN (SELECT DISTINCT cycle_id FROM expense_history WHERE cycle_id IS NOT NULL)")
               ->execute(['bid' => (int)$id]);

            // Regenerate cadence sequence cleanly under the new anchor date
            $freshBillStmt = $db->prepare("SELECT * FROM recurring_bills WHERE id = :bid");
            $freshBillStmt->execute(['bid' => (int)$id]);
            $freshBill = $freshBillStmt->fetch(PDO::FETCH_ASSOC);
            if ($freshBill) {
                $this->ensureCyclesUpToDate($db, $freshBill);
            }

            // Find current active cycle for history logging
            $cStmt = $db->prepare("SELECT id, due_date FROM recurring_bill_cycles WHERE bill_id = :bid ORDER BY due_date ASC LIMIT 1");
            $cStmt->execute(['bid' => (int)$id]);
            $cycle = $cStmt->fetch();
            $oldCycleDue = null;

            // Log history
            $hist = $db->prepare("INSERT INTO expense_history 
                (bill_id, cycle_id, edited_by, action, changes, reason, created_at) 
                VALUES (:bid, :cid, :by, 'cycle_anchor_updated', :ch, :r, NOW())");
            $hist->execute([
                'bid' => (int)$id,
                'cid' => $cycle ? (int)$cycle['id'] : null,
                'by'  => $sessionUser,
                'ch'  => json_encode([
                    'old_anchor'    => $oldAnchor,
                    'new_anchor'    => $newAnchor,
                    'old_due_day'   => $bill['due_day'],
                    'new_due_day'   => $newDueDay,
                    'old_cycle_due' => $oldCycleDue,
                    'new_cycle_due' => $newAnchor
                ]),
                'r'   => "Circle start date updated: {$oldAnchor} → {$newAnchor} (Day {$newDueDay})"
            ]);

            $db->commit();

            SystemLog::write('recurring_bills', 'cycle_anchor_updated', (int)$id, $bill['name'], json_encode([
                'old_anchor' => $oldAnchor,
                'new_anchor' => $newAnchor,
                'due_day'    => $newDueDay
            ]), $sessionUser);

            Response::json([
                'ok'                => true,
                'cycle_anchor_date' => $newAnchor,
                'due_day'           => $newDueDay,
                'message'           => 'Cycle start date updated successfully.'
            ]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                try { $db->rollBack(); } catch (\Throwable $t) {
                    error_log("Suppressed exception in " . __METHOD__ . ": " . $t->getMessage());
                }
            }
            error_log("SEC-40 Defensive exception in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to update cycle start date due to a system error'], 500);
        }
    }

    /** POST /api/recurring-bills/{id}/pay - Settle the current cycle of a recurring bill by Bill ID */
    public function payBill(string $billId, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $stmt = $db->prepare("SELECT * FROM recurring_bills WHERE id = :id");
        $stmt->execute(['id' => $billId]);
        $bill = $stmt->fetch();
        if (!$bill) {
            Response::json(['error' => 'Bill not found'], 404);
            return;
        }

        $this->ensureCyclesUpToDate($db, $bill);

        // Find the current unpaid/partial cycle, or the latest cycle
        $cStmt = $db->prepare("SELECT id FROM recurring_bill_cycles WHERE bill_id = :bid AND status != 'paid' ORDER BY due_date ASC LIMIT 1");
        $cStmt->execute(['bid' => $billId]);
        $cycleId = $cStmt->fetchColumn();

        if (!$cycleId) {
            $latestStmt = $db->prepare("SELECT id FROM recurring_bill_cycles WHERE bill_id = :bid ORDER BY due_date DESC LIMIT 1");
            $latestStmt->execute(['bid' => $billId]);
            $cycleId = $latestStmt->fetchColumn();
        }

        if (!$cycleId) {
            Response::json(['error' => 'No cycle available to settle for this bill'], 400);
            return;
        }

        $this->payCycle((string)$cycleId, $data);
    }

    /** GET /api/expenses/summary - High-speed summary for dashboard and header deck */
    public function getSummary(): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $monthStart = date('Y-m-01 00:00:00');
        $monthEnd = date('Y-m-t 23:59:59');
        $today = date('Y-m-d');

        // Total operating expenses this month across all sources (Vault + Hand)
        $stmtAllOpex = $db->prepare("SELECT COALESCE(SUM(amount), 0) FROM operating_expenses WHERE deleted_at IS NULL AND paid_at BETWEEN :s AND :e");
        $stmtAllOpex->execute(['s' => $monthStart, 'e' => $monthEnd]);
        $monthOperatingExpensesTotal = (string)$stmtAllOpex->fetchColumn();

        // This month's one-off operating expenses (Vault / System Outflows)
        $stmtOpex = $db->prepare("SELECT COALESCE(SUM(amount), 0) FROM operating_expenses WHERE deleted_at IS NULL AND (paid_from = 'vault' OR paid_from IS NULL OR paid_from = '') AND paid_at BETWEEN :s AND :e");
        $stmtOpex->execute(['s' => $monthStart, 'e' => $monthEnd]);
        $monthOpex = (string)$stmtOpex->fetchColumn();

        // This month's hand / out-of-pocket expenses (Tracked only, not deducted from system cash/profit)
        $stmtHand = $db->prepare("SELECT COALESCE(SUM(amount), 0) FROM operating_expenses WHERE deleted_at IS NULL AND (paid_from = 'hand' OR paid_from_type = 'hand') AND paid_at BETWEEN :s AND :e");
        $stmtHand->execute(['s' => $monthStart, 'e' => $monthEnd]);
        $monthHand = (string)$stmtHand->fetchColumn();

        // This month's recurring bills paid (Vault / System Outflows)
        $stmtBills = $db->prepare("SELECT COALESCE(SUM(amount_paid), 0) FROM recurring_bill_cycles WHERE paid_at BETWEEN :s AND :e AND (paid_from = 'vault' OR paid_from IS NULL OR paid_from = '')");
        $stmtBills->execute(['s' => $monthStart, 'e' => $monthEnd]);
        $monthBillsPaid = (string)$stmtBills->fetchColumn();

        // Total upcoming/unpaid bills
        $stmtDue = $db->query("SELECT COALESCE(SUM(amount_expected - amount_paid), 0) FROM recurring_bill_cycles WHERE status != 'paid'");
        $totalUpcomingDue = (string)$stmtDue->fetchColumn();

        // Today's total cash outflow from vault across all expenses (Finding V-009: SARGable range query)
        $todayStart = $today . ' 00:00:00';
        $todayEnd = date('Y-m-d', strtotime($today . ' +1 day')) . ' 00:00:00';
        $stmtToday = $db->prepare("SELECT COALESCE(SUM(amount), 0) FROM cash_transactions WHERE direction = 'out' AND type IN ('operating_expense', 'bill_payment', 'purchase_expense') AND created_at >= :ts AND created_at < :te");
        $stmtToday->execute(['ts' => $todayStart, 'te' => $todayEnd]);
        $todayOutflow = (string)$stmtToday->fetchColumn();

        // Categorical breakdown of operating expenses this month
        $stmtCats = $db->prepare("SELECT category, COALESCE(SUM(amount), 0) as total FROM operating_expenses WHERE deleted_at IS NULL AND paid_at BETWEEN :s AND :e GROUP BY category ORDER BY total DESC");
        $stmtCats->execute(['s' => $monthStart, 'e' => $monthEnd]);
        $categories = $stmtCats->fetchAll();

        Response::json([
            'month_operating_expenses'       => $monthOperatingExpensesTotal,
            'month_vault_operating_expenses' => $monthOpex,
            'month_bills_paid'               => $monthBillsPaid,
            'month_hand_expenses'            => $monthHand,
            'month_total_expenses'           => Decimal::add($monthOperatingExpensesTotal, $monthBillsPaid),
            'upcoming_bills_due'             => $totalUpcomingDue,
            'today_outflow'                  => $todayOutflow,
            'categories'                     => $categories
        ]);
    }

    /**
     * Advance a date by N months with End-of-Month (EOM) Clamping.
     * Guarantees that targetDay (e.g. 31) clamps to shorter months (Feb 28, Apr 30)
     * and snaps back to 31 when returning to 31-day months, preventing month-overflow drift.
     */
    private function advanceCalendarDate(string $baseDate, int $targetDay, int $monthsToAdd): string
    {
        $baseYear = (int)date('Y', strtotime($baseDate));
        $baseMonth = (int)date('m', strtotime($baseDate));
        $totalMonths = ($baseYear * 12 + ($baseMonth - 1)) + $monthsToAdd;
        $targetYear = intdiv($totalMonths, 12);
        $targetMonth = ($totalMonths % 12) + 1;
        $daysInMonth = (int)date('t', strtotime(sprintf('%04d-%02d-01', $targetYear, $targetMonth)));
        $actualDay = min(max(1, $targetDay), $daysInMonth);
        return sprintf('%04d-%02d-%02d', $targetYear, $targetMonth, $actualDay);
    }

    /**
     * Compute the next due date from a base date advancing by one cadence step.
     * Respects End-of-Month (EOM) clamping and recovery for calendar cadences.
     */
    public function computeNextDueDate(string $baseDate, string $frequency, ?int $dueDay = null, ?int $intervalDays = null): string
    {
        $isCalendar = in_array($frequency, ['monthly', 'quarterly', 'semi_annual', 'yearly'], true);
        if ($isCalendar) {
            $targetDay = ($dueDay !== null && $dueDay >= 1 && $dueDay <= 31) ? $dueDay : (int)date('d', strtotime($baseDate));
            $monthsPerStep = ($frequency === 'quarterly') ? 3 : (($frequency === 'semi_annual') ? 6 : (($frequency === 'yearly') ? 12 : 1));
            return $this->advanceCalendarDate($baseDate, $targetDay, $monthsPerStep);
        }
        if ($frequency === 'weekly') {
            return date('Y-m-d', strtotime($baseDate . ' +7 days'));
        }
        if ($frequency === 'fixed_30') {
            return date('Y-m-d', strtotime($baseDate . ' +30 days'));
        }
        if ($frequency === 'fixed_90') {
            return date('Y-m-d', strtotime($baseDate . ' +90 days'));
        }
        if ($frequency === 'fixed_180') {
            return date('Y-m-d', strtotime($baseDate . ' +180 days'));
        }
        if ($frequency === 'custom' && !empty($intervalDays) && $intervalDays > 0) {
            return date('Y-m-d', strtotime($baseDate . " +{$intervalDays} days"));
        }
        return date('Y-m-d', strtotime($baseDate . ' +1 month'));
    }

    /** Ensure all monthly cycle rows up to the current date exist for an active recurring bill */
    private function ensureCyclesUpToDate(PDO $db, array $bill): void
    {
        if (empty($bill['active']) || !empty($bill['deleted_at']) || !empty($bill['is_paused'])) {
            return;
        }

        $startDate = $bill['first_due_date'];
        if (!$startDate) return;

        $freq = $bill['frequency'] ?? 'monthly';
        $isCalendar = in_array($freq, ['monthly', 'quarterly', 'semi_annual', 'yearly'], true);
        $targetDay = (!empty($bill['due_day']) && is_numeric($bill['due_day'])) ? max(1, min(31, (int)$bill['due_day'])) : (int)date('d', strtotime($startDate));
        $monthsPerStep = ($freq === 'quarterly') ? 3 : (($freq === 'semi_annual') ? 6 : (($freq === 'yearly') ? 12 : 1));

        // Self-heal: If an active recurring circle has first_due_date equal to cycle_anchor_date,
        // it erroneously treated the start date as the first due date. Re-anchor to first cadence interval.
        if (!empty($bill['cycle_anchor_date']) && $bill['first_due_date'] === $bill['cycle_anchor_date'] && empty($bill['is_archived'])) {
            $correctFirstDue = $this->computeNextDueDate($bill['cycle_anchor_date'], $freq, (int)($bill['due_day'] ?? 0), (int)($bill['interval_days'] ?? 0));
            $db->prepare("UPDATE recurring_bills SET first_due_date = :fdd, next_due_date = :ndd WHERE id = :bid")
               ->execute(['fdd' => $correctFirstDue, 'ndd' => $correctFirstDue, 'bid' => $bill['id']]);
            $bill['first_due_date'] = $correctFirstDue;
            $bill['next_due_date'] = $correctFirstDue;
            $startDate = $correctFirstDue;

            // Self-heal the unbilled cycle
            $newLabel = ($freq === 'weekly') ? date('Y-\WW', strtotime($correctFirstDue)) : (in_array($freq, ['fixed_30', 'fixed_90', 'fixed_180', 'custom'], true) ? date('Y-m-d', strtotime($correctFirstDue)) : date('Y-m', strtotime($correctFirstDue)));
            try {
                $existsCheck = $db->prepare("SELECT id FROM recurring_bill_cycles WHERE bill_id = :bid AND (cycle_label = :cl OR due_date = :nd) LIMIT 1");
                $existsCheck->execute(['bid' => $bill['id'], 'cl' => $newLabel, 'nd' => $correctFirstDue]);
                $existingTargetCycleId = $existsCheck->fetchColumn();

                if ($existingTargetCycleId) {
                    $db->prepare("DELETE FROM recurring_bill_cycles 
                        WHERE bill_id = :bid AND due_date = :oldDue AND bill_created = 0 AND amount_paid = 0 AND (reset_count = 0 OR reset_count IS NULL) AND id != :existingId")
                       ->execute([
                           'bid'        => $bill['id'],
                           'oldDue'     => $bill['cycle_anchor_date'],
                           'existingId' => $existingTargetCycleId
                       ]);
                } else {
                    $db->prepare("UPDATE recurring_bill_cycles 
                        SET due_date = :newDue, cycle_label = :newLabel, status = IF(STR_TO_DATE(:newDue2, '%Y-%m-%d') > CURDATE(), 'upcoming', 'due') 
                        WHERE bill_id = :bid AND due_date = :oldDue AND bill_created = 0 AND amount_paid = 0 AND (reset_count = 0 OR reset_count IS NULL)")
                       ->execute([
                           'newDue'   => $correctFirstDue,
                           'newLabel' => $newLabel,
                           'newDue2'  => $correctFirstDue,
                           'bid'      => $bill['id'],
                           'oldDue'   => $bill['cycle_anchor_date']
                       ]);
                }
            } catch (\Throwable $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }
        }

        // Self-heal: Prune orphan downstream virgin unbilled cycles (horizon bloat cleanup)
        // If an earlier unbilled cycle exists at or after CURDATE, any future virgin cycle
        // (bill_created = 0, reset_count = 0, amount_paid = 0, no settlements/expenses) is an orphan and is pruned.
        try {
            $orphanStmt = $db->prepare("SELECT c.id 
                FROM recurring_bill_cycles c
                WHERE c.bill_id = :bid
                  AND (c.bill_created = 0 OR c.bill_created IS NULL)
                  AND (c.reset_count = 0 OR c.reset_count IS NULL)
                  AND (c.amount_paid = 0 OR c.amount_paid IS NULL)
                  AND c.due_date >= CURDATE()
                  AND EXISTS (
                      SELECT 1 FROM recurring_bill_cycles c_prev
                      WHERE c_prev.bill_id = c.bill_id
                        AND (c_prev.bill_created = 0 OR c_prev.bill_created IS NULL)
                        AND c_prev.due_date < c.due_date
                        AND c_prev.due_date >= CURDATE()
                  )
                  AND c.id NOT IN (SELECT DISTINCT cycle_id FROM partner_settlements WHERE cycle_id IS NOT NULL)
                  AND c.id NOT IN (SELECT DISTINCT cycle_id FROM recurring_bill_cycle_payments WHERE cycle_id IS NOT NULL)
                  AND c.id NOT IN (SELECT DISTINCT cycle_id FROM recurring_bill_cycle_resets WHERE cycle_id IS NOT NULL)
                  AND c.id NOT IN (SELECT DISTINCT cycle_id FROM expense_history WHERE cycle_id IS NOT NULL)");
            $orphanStmt->execute(['bid' => $bill['id']]);
            $orphanIds = $orphanStmt->fetchAll(PDO::FETCH_COLUMN);
            if (!empty($orphanIds)) {
                $inOrphans = implode(',', array_map('intval', $orphanIds));
                $db->exec("DELETE FROM recurring_bill_cycles WHERE id IN ($inOrphans)");
            }
        } catch (\Throwable $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }

        // Fast-path performance bypass: if historical cycles up to today already exist AND an unbilled upcoming cycle exists, bypass loop
        try {
            $maxDueStmt = $db->prepare("SELECT MAX(due_date) FROM recurring_bill_cycles WHERE bill_id = :bid");
            $maxDueStmt->execute(['bid' => $bill['id']]);
            $maxDue = $maxDueStmt->fetchColumn();
            if ($maxDue && strtotime($maxDue) >= strtotime('today')) {
                // Must have at least one unbilled upcoming cycle ahead on the timeline
                $unbilledCount = (int)$db->query("SELECT COUNT(*) FROM recurring_bill_cycles WHERE bill_id = " . (int)$bill['id'] . " AND due_date >= CURDATE() AND bill_created = 0 AND status != 'paid'")->fetchColumn();
                if ($unbilledCount > 0) {
                    return; // All historical and upcoming unbilled cycles already generated; instant return in < 1ms!
                }
            }
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

        $currentDate = new DateTime($startDate);
        $today = new DateTime('today');

        $ins = $db->prepare("INSERT IGNORE INTO recurring_bill_cycles (bill_id, cycle_label, due_date, amount_expected, amount_paid, status, created_at, updated_at) 
            VALUES (:bid, :cl, :dd, :exp, 0, :st, NOW(), NOW())");

        $guard = 0;
        $expAmount = Decimal::comp((string)$bill['amount'], '0') > 0 ? (string)$bill['amount'] : ($bill['estimated_amount'] ?? '0.0000000000000000');
        while ($currentDate <= $today && $guard < 36) {
            $label = ($freq === 'weekly') ? $currentDate->format('Y-\WW') : (in_array($freq, ['fixed_30', 'fixed_90', 'fixed_180', 'custom'], true) ? $currentDate->format('Y-m-d') : $currentDate->format('Y-m'));
            $due = $currentDate->format('Y-m-d');
            $cycStatus = (strtotime($due) > strtotime(date('Y-m-d'))) ? 'upcoming' : 'due';
            $ins->execute([
                'bid' => $bill['id'],
                'cl'  => $label,
                'dd'  => $due,
                'exp' => $expAmount,
                'st'  => $cycStatus
            ]);
            $cId = (int)$db->lastInsertId();
            if ($cId > 0) {
                $cuid = Uid::forCycle($cId, $due);
                $db->prepare("UPDATE recurring_bill_cycles SET uid = :uid WHERE id = :id")->execute(['uid' => $cuid, 'id' => $cId]);
            }

            $guard++;
            if ($isCalendar) {
                $nextDue = $this->advanceCalendarDate($startDate, $targetDay, $guard * $monthsPerStep);
                $currentDate = new DateTime($nextDue);
            } elseif ($freq === 'weekly') {
                $currentDate->modify('+7 days');
            } elseif ($freq === 'fixed_30') {
                $currentDate->modify('+30 days');
            } elseif ($freq === 'fixed_90') {
                $currentDate->modify('+90 days');
            } elseif ($freq === 'fixed_180') {
                $currentDate->modify('+180 days');
            } elseif ($freq === 'custom' && !empty($bill['interval_days'])) {
                $days = (int)$bill['interval_days'];
                $currentDate->modify("+{$days} days");
            } else {
                $currentDate->modify('+1 month');
            }
        }

        // Guarantee that at least one UNBILLED upcoming / future cycle exists (due_date >= CURDATE() AND bill_created = 0 AND status != 'paid')
        // so the user always has continuous visibility into the next horizon and can plan/pay early!
        $unbilledCheck = $db->prepare("SELECT COUNT(*) FROM recurring_bill_cycles WHERE bill_id = :bid AND due_date >= CURDATE() AND bill_created = 0 AND status != 'paid'");
        $unbilledCheck->execute(['bid' => $bill['id']]);
        if ((int)$unbilledCheck->fetchColumn() === 0) {
            $latestStmt = $db->prepare("SELECT due_date, cycle_label FROM recurring_bill_cycles WHERE bill_id = :bid ORDER BY due_date DESC LIMIT 1");
            $latestStmt->execute(['bid' => $bill['id']]);
            $latestCycle = $latestStmt->fetch();

            if ($latestCycle) {
                if ($isCalendar) {
                    $due = $this->advanceCalendarDate($latestCycle['due_date'], $targetDay, $monthsPerStep);
                    $nextDate = new DateTime($due);
                } else {
                    $nextDate = new DateTime($latestCycle['due_date']);
                    if ($freq === 'weekly') $nextDate->modify('+7 days');
                    elseif ($freq === 'fixed_30') $nextDate->modify('+30 days');
                    elseif ($freq === 'fixed_90') $nextDate->modify('+90 days');
                    elseif ($freq === 'fixed_180') $nextDate->modify('+180 days');
                    elseif ($freq === 'custom' && !empty($bill['interval_days'])) $nextDate->modify("+{$bill['interval_days']} days");
                    else $nextDate->modify('+1 month');
                    $due = $nextDate->format('Y-m-d');
                }
            } else {
                $due = $startDate;
                $nextDate = new DateTime($startDate);
            }
            $label = ($freq === 'weekly') ? $nextDate->format('Y-\WW') : (in_array($freq, ['fixed_30', 'fixed_90', 'fixed_180', 'custom'], true) ? $nextDate->format('Y-m-d') : $nextDate->format('Y-m'));
            $exp = Decimal::comp((string)$bill['amount'], '0') > 0 ? (string)$bill['amount'] : ($bill['estimated_amount'] ?? '0');
            $cycStatus2 = (strtotime($due) > strtotime(date('Y-m-d'))) ? 'upcoming' : 'due';

            $ins->execute([
                'bid' => $bill['id'],
                'cl'  => $label,
                'dd'  => $due,
                'exp' => $exp,
                'st'  => $cycStatus2
            ]);
            $cId2 = (int)$db->lastInsertId();
            if ($cId2 > 0) {
                $cuid2 = Uid::forCycle($cId2, $due);
                $db->prepare("UPDATE recurring_bill_cycles SET uid = :uid WHERE id = :id")->execute(['uid' => $cuid2, 'id' => $cId2]);
            }
        }
    }

    /** POST /api/recurring-bills/cycles/{id}/void - Void a paid cycle with safe cash refund engine */
    public function voidCycle(string $cycleId, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $reason = trim((string)($data['void_reason'] ?? ($data['reason'] ?? 'Cycle payment voided by user')));
        $actorUserId = (int)($_SESSION['user_id'] ?? 1);

        $db->beginTransaction();
        try {
            $stmt = $db->prepare("SELECT c.*, b.name AS bill_name, b.created_by AS bill_created_by FROM recurring_bill_cycles c JOIN recurring_bills b ON c.bill_id = b.id WHERE c.id = :id FOR UPDATE");
            $stmt->execute(['id' => $cycleId]);
            $cycle = $stmt->fetch();
            if (!$cycle) {
                if ($db->inTransaction()) {
                    try { $db->rollBack(); } catch (\Throwable $t) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $t->getMessage());
        }
                }
                Response::json(['error' => 'Cycle not found'], 404);
                return;
            }

            // RBAC Check: Only admin or the bill creator can void cycle payments
            $isAdmin = !empty($_SESSION['is_admin']);
            $isCreator = ($actorUserId === (int)($cycle['bill_created_by'] ?? 0));
            if (!$isAdmin && !$isCreator) {
                if ($db->inTransaction()) {
                    try { $db->rollBack(); } catch (\Throwable $t) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $t->getMessage());
        }
                }
                Response::json(['error' => 'Forbidden: Only admin or the bill creator can void cycle payments.'], 403);
                return;
            }

            if ($cycle['status'] !== 'paid' && Decimal::comp((string)$cycle['amount_paid'], '0') <= 0) {
                if ($db->inTransaction()) {
                    try { $db->rollBack(); } catch (\Throwable $t) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $t->getMessage());
        }
                }
                Response::json(['error' => 'Cycle is not paid, cannot void'], 400);
                return;
            }

            $bill = [
                'id'         => (int)$cycle['bill_id'],
                'name'       => $cycle['bill_name'],
                'created_by' => (int)($cycle['bill_created_by'] ?? $actorUserId)
            ];

            // Execute safe financial refund engine for this specific cycle
            $refundSummary = $this->executeBillRefundEngine($db, $bill, (int)$cycleId, $reason, $actorUserId);

            // History
            $hist = $db->prepare("INSERT INTO expense_history (bill_id, cycle_id, edited_by, action, reason, changes, created_at) VALUES (:bid, :cid, :by, 'voided', :r, :ch, NOW())");
            $hist->execute([
                'bid' => $cycle['bill_id'],
                'cid' => (int)$cycleId,
                'by'  => $actorUserId,
                'r'   => $reason,
                'ch'  => json_encode(['refunds' => $refundSummary])
            ]);

            $db->commit();

            SystemLog::write('recurring_bill_cycles', 'cycle_voided', (int)$cycleId, "{$cycle['bill_name']} ({$cycle['cycle_label']})", json_encode([
                'cycle_id' => (int)$cycleId,
                'bill_id'  => (int)$cycle['bill_id'],
                'reason'   => $reason,
                'refunds'  => $refundSummary
            ]), $actorUserId);

            Response::json(['ok' => true, 'refunds' => $refundSummary]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                try { $db->rollBack(); } catch (\Throwable $t) {
                    error_log("Suppressed exception in " . __METHOD__ . ": " . $t->getMessage());
                }
            }
            error_log("SEC-40 Defensive exception in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to void cycle due to a system error'], 500);
        }
    }

    /** POST /api/recurring-bills/cycles/{id}/reset - Reset an active period bill back to virgin unbilled state with full financial reversal */
    public function resetPeriodBill(string $cycleId, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $actorUserId = (int)($_SESSION['user_id'] ?? 1);
        $reason = trim((string)($data['reason'] ?? ($data['reset_reason'] ?? 'Period bill reset')));

        $db->beginTransaction();
        try {
            $stmt = $db->prepare("SELECT c.*, b.name AS bill_name, b.amount AS template_amount, b.estimated_amount, b.created_by AS bill_creator_id, b.is_archived 
                FROM recurring_bill_cycles c 
                JOIN recurring_bills b ON c.bill_id = b.id 
                WHERE c.id = :id FOR UPDATE");
            $stmt->execute(['id' => (int)$cycleId]);
            $cycle = $stmt->fetch();

            if (!$cycle) {
                $db->rollBack();
                Response::json(['error' => 'Period cycle not found'], 404);
                return;
            }

            if ((int)$cycle['bill_created'] === 0) {
                $db->rollBack();
                Response::json(['error' => 'This period is already unbilled. Only active bills can be reset.'], 400);
                return;
            }

            $isAdmin = !empty($_SESSION['is_admin']) || ($_SESSION['role'] ?? '') === 'admin' || ($_SESSION['role'] ?? '') === 'superadmin';
            $isCreator = ($actorUserId === (int)($cycle['bill_created_by'] ?? 0) || $actorUserId === (int)($cycle['bill_creator_id'] ?? 0));
            if (!$isAdmin && !$isCreator) {
                $db->rollBack();
                Response::json(['error' => 'Unauthorized: Only an administrator or the bill creator can reset an active period bill.'], 403);
                return;
            }

            (new CashVaultController())->ensureTwoSafes($db);
            $billId = (int)$cycle['bill_id'];
            $billName = $cycle['bill_name'];
            $cycleLabel = $cycle['cycle_label'];
            $cId = (int)$cycle['id'];
            $refundSummary = [];

            // 1. Check payments in recurring_bill_cycle_payments
            $pStmt = $db->prepare("SELECT * FROM recurring_bill_cycle_payments WHERE cycle_id = :cid AND voided_at IS NULL FOR UPDATE");
            $pStmt->execute(['cid' => $cId]);
            $payments = $pStmt->fetchAll();

            if (!empty($payments)) {
                foreach ($payments as $pay) {
                    $pAmt = (string)$pay['amount'];
                    $pUser = (int)$pay['user_id'];
                    $pSource = $pay['paid_from'];
                    $settlementId = !empty($pay['settlement_id']) ? (int)$pay['settlement_id'] : null;

                    if ($settlementId) {
                        $sStmt = $db->prepare("SELECT * FROM partner_settlements WHERE id = :sid FOR UPDATE");
                        $sStmt->execute(['sid' => $settlementId]);
                        $settle = $sStmt->fetch();

                        if ($settle) {
                            $settledAmt = (string)($settle['settled_amount'] ?? ($settle['status'] === 'settled' ? $settle['amount'] : '0'));
                            $uncollectedAmt = Decimal::sub((string)$settle['amount'], $settledAmt);

                            if (Decimal::comp($settledAmt, '0') > 0) {
                                $sSource = $settle['settled_source'] ?? $settle['target_source'] ?? 'vault';
                                if ($sSource === 'vault') {
                                    $debtorId = (int)$settle['payer_user_id'];
                                    $payeeId = (int)$settle['payee_user_id'];
                                    if ($debtorId === $payeeId) {
                                        CashVaultController::logFlow($db, 'bill_refund', 'in', $settledAmt, 'recurring_bill_cycles', $cId, "Active Bill Reset Refund: {$billName} ({$cycleLabel})", $debtorId);
                                    } else {
                                        CashVaultController::logFlow($db, 'bill_refund', 'in', $settledAmt, 'recurring_bill_cycles', $cId, "Active Bill Reset Refund: {$billName} ({$cycleLabel})", $debtorId);
                                        CashVaultController::logFlow($db, 'bill_refund', 'out', $settledAmt, 'recurring_bill_cycles', $cId, "Active Bill Reset Reversal: {$billName} ({$cycleLabel})", $payeeId);
                                    }
                                    $refundSummary[] = ['user_id' => $debtorId, 'amount' => $settledAmt, 'source' => 'vault', 'type' => 'settled_split_refund'];
                                } else {
                                    // Hand payment reversal
                                    $debtorId = (int)$settle['payer_user_id'];
                                    try {
                                        $db->prepare("INSERT INTO user_history (user_id, edited_by, action, changes, reason, created_at) VALUES (:uid, :by, 'hand_reversal', :ch, :r, NOW())")
                                           ->execute([
                                               'uid' => $debtorId,
                                               'by'  => $actorUserId,
                                               'ch'  => json_encode(['cycle_id' => $cId, 'bill_name' => $billName, 'cycle_label' => $cycleLabel, 'amount' => '-' . $settledAmt, 'source' => 'hand']),
                                               'r'   => "Active bill reset: {$billName} ({$cycleLabel}) - Reversed hand payment of {$settledAmt} DZD"
                                           ]);
                                    } catch (\Throwable $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }
                                    $refundSummary[] = ['user_id' => $debtorId, 'amount' => $settledAmt, 'source' => 'hand', 'type' => 'settled_split_hand_reversal'];
                                }
                            }

                            // If there is an uncollected share and the lead payer fronted from vault, refund uncollected share to lead payer's vault!
                            if (Decimal::comp($uncollectedAmt, '0') > 0) {
                                $leadPayerId = (int)$settle['payee_user_id'];
                                $cyclePaidFrom = $cycle['paid_from'] ?? 'vault';
                                if ($cyclePaidFrom === 'vault' && $leadPayerId > 0) {
                                    CashVaultController::logFlow($db, 'bill_refund', 'in', $uncollectedAmt, 'recurring_bill_cycles', $cId, "Active Bill Reset Refund (Uncollected Fronted Share): {$billName} ({$cycleLabel})", $leadPayerId);
                                    $refundSummary[] = ['user_id' => $leadPayerId, 'amount' => $uncollectedAmt, 'source' => 'vault', 'type' => 'uncollected_fronted_share_refund'];
                                }
                            }

                            $db->prepare("UPDATE partner_settlements SET status = 'cancelled', cancelled_at = NOW(), cancelled_by = :cb, cancel_reason = :cr WHERE id = :sid")
                               ->execute(['cb' => $actorUserId, 'cr' => "Active bill reset: {$reason}", 'sid' => $settlementId]);
                        }
                    } else {
                        // Direct payment
                        if (!empty($pay['paid_at']) && Decimal::comp($pAmt, '0') > 0) {
                            $formattedAmt = Decimal::format($pAmt, 2) . ' DZD';
                            $pUsername = null;
                            if (!empty($pUser)) {
                                $uStmt = $db->prepare("SELECT username FROM users WHERE id = :id");
                                $uStmt->execute(['id' => $pUser]);
                                $pUsername = $uStmt->fetchColumn() ?: null;
                            }
                            $pUsername = $pUsername ?: ($actorUsername ?? 'admin');

                            if ($pSource === 'vault') {
                                CashVaultController::logFlow($db, 'bill_refund', 'in', $pAmt, 'recurring_bill_cycles', $cId, "Active Bill Reset Refund: {$billName} ({$cycleLabel})", $pUser);
                                $refundSummary[] = [
                                    'user_id'  => $pUser,
                                    'username' => $pUsername,
                                    'amount'   => $formattedAmt,
                                    'source'   => 'vault',
                                    'type'     => 'direct_payment_refund'
                                ];
                            } else {
                                try {
                                    $db->prepare("INSERT INTO user_history (user_id, edited_by, action, changes, reason, created_at) VALUES (:uid, :by, 'hand_reversal', :ch, :r, NOW())")
                                       ->execute([
                                           'uid' => $pUser,
                                           'by'  => $actorUserId,
                                           'ch'  => json_encode(['cycle_id' => $cId, 'bill_name' => $billName, 'cycle_label' => $cycleLabel, 'amount' => '-' . $formattedAmt, 'source' => 'hand']),
                                           'r'   => "Active bill reset: {$billName} ({$cycleLabel}) - Reversed hand payment of {$formattedAmt}"
                                       ]);
                                } catch (\Throwable $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }
                                $refundSummary[] = [
                                    'user_id'  => $pUser,
                                    'username' => $pUsername,
                                    'amount'   => $formattedAmt,
                                    'source'   => 'hand',
                                    'type'     => 'direct_payment_hand_reversal'
                                ];
                            }
                        }
                    }

                    $db->prepare("UPDATE recurring_bill_cycle_payments SET voided_at = NOW(), voided_by = :vb, void_reason = :vr WHERE id = :pid")
                       ->execute(['vb' => $actorUserId, 'vr' => "Active bill reset: {$reason}", 'pid' => $pay['id']]);
                }
            } else {
                // Fallback for cycles without granular payments rows
                $paidAmt = (string)$cycle['amount_paid'];
                $paidFrom = $cycle['paid_from'] ?? 'vault';
                $paidBy = (int)($cycle['paid_by'] ?: ($cycle['bill_created_by'] ?? $actorUserId));

                $formattedPaidAmt = Decimal::format($paidAmt, 2) . ' DZD';
                $paidByUsername = null;
                if (!empty($paidBy)) {
                    $uStmt = $db->prepare("SELECT username FROM users WHERE id = :id");
                    $uStmt->execute(['id' => $paidBy]);
                    $paidByUsername = $uStmt->fetchColumn() ?: null;
                }
                $paidByUsername = $paidByUsername ?: ($actorUsername ?? 'admin');

                if (Decimal::comp($paidAmt, '0') > 0 && $paidFrom === 'vault') {
                    CashVaultController::logFlow($db, 'bill_refund', 'in', $paidAmt, 'recurring_bill_cycles', $cId, "Active Bill Reset Refund: {$billName} ({$cycleLabel})", $paidBy);
                    $refundSummary[] = [
                        'user_id'  => $paidBy,
                        'username' => $paidByUsername,
                        'amount'   => $formattedPaidAmt,
                        'source'   => 'vault',
                        'type'     => 'cycle_direct_refund'
                    ];
                } elseif (Decimal::comp($paidAmt, '0') > 0 && $paidFrom === 'hand') {
                    try {
                        $db->prepare("INSERT INTO user_history (user_id, edited_by, action, changes, reason, created_at) VALUES (:uid, :by, 'hand_reversal', :ch, :r, NOW())")
                           ->execute([
                               'uid' => $paidBy,
                               'by'  => $actorUserId,
                               'ch'  => json_encode(['cycle_id' => $cId, 'bill_name' => $billName, 'cycle_label' => $cycleLabel, 'amount' => '-' . $formattedPaidAmt, 'source' => 'hand']),
                               'r'   => "Active bill reset: {$billName} ({$cycleLabel}) - Reversed hand payment of {$formattedPaidAmt}"
                           ]);
                    } catch (\Throwable $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }
                    $refundSummary[] = [
                        'user_id'  => $paidBy,
                        'username' => $paidByUsername,
                        'amount'   => $formattedPaidAmt,
                        'source'   => 'hand',
                        'type'     => 'cycle_hand_reversal'
                    ];
                }
            }

            // 2. Cancel ALL active partner settlements for this cycle (financial reversal has refunded all safe/hand payments)
            $db->prepare("UPDATE partner_settlements 
                SET status = 'cancelled', cancelled_at = NOW(), cancelled_by = :cb, cancel_reason = :cr 
                WHERE (cycle_id = :cid OR (related_entity_type = 'recurring_bill_cycle' AND related_entity_id = :cid2))
                  AND status != 'cancelled'")
               ->execute(['cb' => $actorUserId, 'cr' => "Active bill reset: {$reason}", 'cid' => $cId, 'cid2' => $cId]);

            // 3. Soft-void ALL cycle payments for this cycle (preserves hand ledger cash reversal and audit trail)
            $db->prepare("UPDATE recurring_bill_cycle_payments 
                SET voided_at = NOW(), voided_by = :vb, void_reason = :vr 
                WHERE cycle_id = :cid AND voided_at IS NULL")
               ->execute(['vb' => $actorUserId, 'vr' => "Active bill reset: {$reason}", 'cid' => $cId]);

            // 4. Dismiss and suppress notifications for this cycle (Rule 12 Permanent Suppression)
            $db->prepare("UPDATE notifications SET is_read = 1 
                WHERE stage_tag LIKE :tag 
                   OR (entity_type = 'partner_settlement' AND entity_id IN (SELECT id FROM partner_settlements WHERE cycle_id = :cid))")
               ->execute(['tag' => "%_{$cId}%", 'cid' => $cId]);

            try {
                $affUsersStmt = $db->prepare("SELECT DISTINCT user_id FROM recurring_bill_cycle_payments WHERE cycle_id = :cid");
                $affUsersStmt->execute(['cid' => $cId]);
                $affUsers = $affUsersStmt->fetchAll(PDO::FETCH_COLUMN);
                foreach ($affUsers as $auid) {
                    $db->prepare("INSERT IGNORE INTO notification_suppressions (user_id, entity_type, entity_id, stage_tag, suppressed_at)
                        VALUES (:uid, 'recurring_bill_cycle', :cid, :stag, NOW())")
                       ->execute([
                           'uid'  => (int)$auid,
                           'cid'  => $cId,
                           'stag' => "period_bill_{$cId}"
                       ]);
                }
            } catch (\Throwable $ignoredSup) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignoredSup->getMessage());
        }

            // Capture authentic snapshot of cycle state before reset (Preserves last information for re-creation pre-fill)
            // Per user directive: Attachments are permanently deleted on reset and never pre-filled
            $snapshotBefore = [
                'amount_expected'    => (string)$cycle['amount_expected'],
                'split_status'       => (string)($cycle['split_status'] ?? 'none'),
                'split_data'         => !empty($cycle['split_data']) ? (is_string($cycle['split_data']) ? json_decode($cycle['split_data'], true) : $cycle['split_data']) : null,
                'paid_from'          => $cycle['paid_from'] ?? 'vault',
                'invoice_date'       => $cycle['invoice_date'] ?? null,
                'received_date'      => $cycle['received_date'] ?? null,
                'declared_paid_at'   => $cycle['declared_paid_at'] ?? null,
                'note'               => $cycle['note'] ?? null,
                'receipt_ref'        => null,
                'receipt_image'      => null,
                'receipt_image_name' => null,
            ];

            // 5. Reset cycle to virgin unbilled state
            $templateExp = Decimal::comp((string)$cycle['template_amount'], '0') > 0 
                ? (string)$cycle['template_amount'] 
                : ($cycle['estimated_amount'] ?? '0.0000000000000000');

            $db->prepare("UPDATE recurring_bill_cycles SET
                bill_created = 0,
                bill_created_at = NULL,
                bill_created_by = NULL,
                amount_expected = :exp,
                amount_paid = 0,
                status = IF(due_date <= CURDATE(), 'due', 'upcoming'),
                agreement_status = 'pending_acceptance',
                is_locked_for_edit = 0,
                has_refusal = 0,
                split_status = 'none',
                split_data = NULL,
                paid_from = NULL,
                paid_from_type = NULL,
                paid_at = NULL,
                declared_paid_at = NULL,
                invoice_date = NULL,
                received_date = NULL,
                paid_by = NULL,
                receipt_ref = NULL,
                receipt_image = NULL,
                receipt_image_name = NULL,
                note = NULL,
                voided_at = NULL,
                voided_by = NULL,
                void_reason = NULL,
                last_edited_by = NULL,
                last_edited_by_name = NULL,
                updated_at = NOW()
            WHERE id = :cid")
            ->execute([
                'exp' => $templateExp,
                'cid' => $cId
            ]);

            // Clear receipt attachments on parent recurring_bills template symmetrically
            $db->prepare("UPDATE recurring_bills SET receipt_ref = NULL, receipt_image = NULL, receipt_image_name = NULL WHERE id = :bid")
               ->execute(['bid' => $billId]);

            // 6. Increment reset_count and record into recurring_bill_cycle_resets table
            $db->prepare("UPDATE recurring_bill_cycles SET reset_count = reset_count + 1 WHERE id = :cid")
               ->execute(['cid' => $cId]);

            $rstStmt = $db->prepare('SELECT reset_count FROM recurring_bill_cycles WHERE id = :id LIMIT 1');
            $rstStmt->execute(['id' => (int)$cId]);
            $newResetCount = (int)$rstStmt->fetchColumn();
            $actorUsername = $_SESSION['username'] ?? null;
            if (!$actorUsername && !empty($actorUserId)) {
                $uStmt = $db->prepare("SELECT username FROM users WHERE id = :id");
                $uStmt->execute(['id' => $actorUserId]);
                $actorUsername = $uStmt->fetchColumn() ?: null;
            }
            if (!$actorUsername) {
                $actorUsername = 'admin';
            }

            $db->prepare("INSERT INTO recurring_bill_cycle_resets 
                (cycle_id, bill_id, reset_number, reason, snapshot_before, refunds_summary, reset_by, reset_by_username, created_at)
                VALUES (:cid, :bid, :rnum, :reason, :snap, :ref, :by, :uname, NOW())")
               ->execute([
                   'cid'    => $cId,
                   'bid'    => $billId,
                   'rnum'   => $newResetCount,
                   'reason' => $reason,
                   'snap'   => json_encode($snapshotBefore),
                   'ref'    => json_encode($refundSummary),
                   'by'     => $actorUserId,
                   'uname'  => $actorUsername
               ]);

            // 7. Audit logs
            $hist = $db->prepare("INSERT INTO expense_history (bill_id, cycle_id, edited_by, action, reason, changes, created_at) VALUES (:bid, :cid, :by, 'period_bill_reset', :r, :ch, NOW())");
            $hist->execute([
                'bid' => $billId,
                'cid' => $cId,
                'by'  => $actorUserId,
                'r'   => $reason,
                'ch'  => json_encode(['refunds' => $refundSummary, 'reset_number' => $newResetCount])
            ]);

            // 8. Prune downstream virgin unbilled cycles spawned ahead of this reset cycle
            try {
                $virginCyclesStmt = $db->prepare("SELECT id FROM recurring_bill_cycles 
                    WHERE bill_id = :bid 
                      AND due_date > :target_due 
                      AND (bill_created = 0 OR bill_created IS NULL)
                      AND (reset_count = 0 OR reset_count IS NULL)
                      AND (amount_paid = 0 OR amount_paid IS NULL)
                      AND id NOT IN (SELECT DISTINCT cycle_id FROM partner_settlements WHERE cycle_id IS NOT NULL)
                      AND id NOT IN (SELECT DISTINCT cycle_id FROM recurring_bill_cycle_payments WHERE cycle_id IS NOT NULL)
                      AND id NOT IN (SELECT DISTINCT cycle_id FROM recurring_bill_cycle_resets WHERE cycle_id IS NOT NULL)
                      AND id NOT IN (SELECT DISTINCT cycle_id FROM expense_history WHERE cycle_id IS NOT NULL)");
                $virginCyclesStmt->execute(['bid' => $billId, 'target_due' => $cycle['due_date']]);
                $virginIds = $virginCyclesStmt->fetchAll(PDO::FETCH_COLUMN);

                if (!empty($virginIds)) {
                    $inVirgins = implode(',', array_map('intval', $virginIds));
                    $db->exec("DELETE FROM recurring_bill_cycles WHERE id IN ($inVirgins)");
                }
            } catch (\Throwable $ignoredPrune) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignoredPrune->getMessage());
        }

            $db->commit();

            try {
                $bStmt = $db->prepare("SELECT * FROM recurring_bills WHERE id = :bid");
                $bStmt->execute(['bid' => $billId]);
                $freshBill = $bStmt->fetch();
                if ($freshBill && empty($freshBill['is_archived'])) {
                    $this->ensureCyclesUpToDate($db, $freshBill);
                }
            } catch (\Throwable $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }

            SystemLog::write('recurring_bill_cycles', 'period_bill_reset', $cId, "Reset Period Bill: {$billName} ({$cycleLabel})", json_encode([
                'bill_id'      => $billId,
                'cycle_label'  => $cycleLabel,
                'reset_number' => $newResetCount,
                'reason'       => $reason,
                'refunds'      => $refundSummary
            ]), $actorUserId);

            Response::json([
                'ok'          => true,
                'message'     => 'Period bill reset successfully. Period returned to unbilled state.',
                'refunds'     => $refundSummary,
                'reset_count' => $newResetCount
            ]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                try { $db->rollBack(); } catch (\Throwable $t) {
                    error_log("Suppressed exception in " . __METHOD__ . ": " . $t->getMessage());
                }
            }
            error_log("SEC-40 Defensive exception in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to reset period bill due to a system error'], 500);
        }
    }

    /** GET /api/recurring-bills/resets - Retrieve all period bills that have been resetted with full audit chain & live lifecycle status */
    public function getResetBills(): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $billId = !empty($_GET['bill_id']) ? (int)$_GET['bill_id'] : null;
        $statusFilter = !empty($_GET['status']) ? trim($_GET['status']) : null;
        $minResets = !empty($_GET['min_resets']) ? (int)$_GET['min_resets'] : 1;
        $search = !empty($_GET['search']) ? trim($_GET['search']) : null;

        $where = ["c.reset_count >= :min_resets"];
        $params = [':min_resets' => $minResets];

        if ($billId) {
            $where[] = "c.bill_id = :bid";
            $params[':bid'] = $billId;
        }
        if ($search) {
            $where[] = "(b.name LIKE :q OR c.uid LIKE :q OR c.cycle_label LIKE :q OR EXISTS (SELECT 1 FROM recurring_bill_cycle_resets r WHERE r.cycle_id = c.id AND (r.reason LIKE :q OR r.reset_by_username LIKE :q)))";
            $params[':q'] = "%{$search}%";
        }

        $whereSql = implode(' AND ', $where);

        $sql = "SELECT c.id, c.uid, c.bill_id, c.cycle_label, c.due_date, c.amount_expected,
                       c.amount_paid, c.bill_created, c.bill_created_at, c.bill_created_by,
                       c.status, c.has_refusal, c.split_status, c.agreement_status,
                       c.is_locked_for_edit, c.paid_from, c.paid_from_type, c.paid_at,
                       c.declared_paid_at, c.invoice_date, c.received_date, c.paid_by,
                       c.receipt_ref, c.receipt_image_name,
                       IF(c.receipt_image IS NOT NULL AND c.receipt_image != '', 1, 0) AS has_receipt,
                       OCTET_LENGTH(c.receipt_image) AS receipt_size,
                       c.split_data, c.voided_at, c.voided_by, c.void_reason,
                       c.last_edited_by, c.last_edited_by_name, c.version, c.reset_count,
                       c.note, c.created_at, c.updated_at,
                       b.name AS bill_name, 
                       b.uid AS bill_uid, 
                       b.frequency AS bill_frequency, 
                       b.category AS bill_category, 
                       b.is_archived AS bill_is_archived,
                       b.active AS bill_active,
                       b.deleted_at AS bill_deleted_at
                FROM recurring_bill_cycles c
                JOIN recurring_bills b ON c.bill_id = b.id
                WHERE {$whereSql}
                ORDER BY c.updated_at DESC, c.id DESC";

        $stmt = $db->prepare($sql);
        $stmt->execute($params);
        $cycles = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Fetch all reset events for these cycles
        $cycleIds = array_column($cycles, 'id');
        $resetsByCycle = [];
        if (!empty($cycleIds)) {
            $inSql = implode(',', array_map('intval', $cycleIds));
            $rStmt = $db->query("SELECT r.*, COALESCE(NULLIF(r.reset_by_username, 'Staff'), u.username, 'admin') AS reset_by_username 
                                 FROM recurring_bill_cycle_resets r 
                                 LEFT JOIN users u ON r.reset_by = u.id 
                                 WHERE r.cycle_id IN ({$inSql}) 
                                 ORDER BY r.reset_number DESC, r.id DESC");
            $allResets = $rStmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($allResets as $r) {
                $cid = (int)$r['cycle_id'];
                $r['refunds_summary'] = !empty($r['refunds_summary']) ? json_decode($r['refunds_summary'], true) : [];
                $r['snapshot_before'] = !empty($r['snapshot_before']) ? (is_string($r['snapshot_before']) ? json_decode($r['snapshot_before'], true) : $r['snapshot_before']) : null;
                $resetsByCycle[$cid][] = $r;
            }
        }

        $items = [];
        foreach ($cycles as $c) {
            $cid = (int)$c['id'];
            $cResets = $resetsByCycle[$cid] ?? [];
            $c['last_reset_snapshot'] = (!empty($cResets) && !empty($cResets[0]['snapshot_before'])) ? $cResets[0]['snapshot_before'] : null;

            // Compute live lifecycle status
            $isArchived = !empty($c['bill_is_archived']) || !empty($c['bill_deleted_at']);
            $liveStatus = 'not_created';
            $liveStatusLabel = "Didn't Get Created Yet";

            if ($isArchived) {
                $liveStatus = 'archived';
                $liveStatusLabel = 'Archived / Deleted';
            } elseif ((int)$c['bill_created'] === 0) {
                $liveStatus = 'not_created';
                $liveStatusLabel = "Didn't Get Created Yet";
            } elseif ($c['status'] === 'paid') {
                $liveStatus = 'completely_paid';
                $liveStatusLabel = 'Completely Paid';
            } elseif ($c['split_status'] === 'split') {
                if ($c['agreement_status'] !== 'all_accepted') {
                    $liveStatus = 'phasing_accepting';
                    $liveStatusLabel = 'Phasing & Accepting (Split Agreement)';
                } else {
                    $liveStatus = 'paying';
                    $liveStatusLabel = 'Paying (Partners Settling)';
                }
            } elseif (Decimal::comp((string)$c['amount_paid'], '0') > 0 && Decimal::comp((string)$c['amount_paid'], (string)$c['amount_expected']) < 0) {
                $liveStatus = 'paying';
                $liveStatusLabel = 'Paying (Partial Outflow)';
            } else {
                $liveStatus = 'created';
                $liveStatusLabel = 'Created (Due for Payment)';
            }

            if ($statusFilter && $liveStatus !== $statusFilter) {
                continue;
            }

            $c['live_status'] = $liveStatus;
            $c['live_status_label'] = $liveStatusLabel;
            $c['resets'] = $cResets;
            $items[] = $c;
        }

        $totalResetBills = count($items);
        $totalResetEvents = (int)$db->query("SELECT COUNT(*) FROM recurring_bill_cycle_resets")->fetchColumn();

        Response::json([
            'ok'                 => true,
            'total_reset_bills'  => $totalResetBills,
            'total_reset_events' => $totalResetEvents,
            'reset_bills'        => $items
        ]);
    }

    /** POST /api/recurring-bills/{id}/cancel-edit - Cancel pending agreement edit and restore previous active revision */
    public function cancelBillEdit(string $id): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $billId = (int)$id;
        $userId = (int)($_SESSION['user_id'] ?? 1);

        $billStmt = $db->prepare("SELECT * FROM recurring_bills WHERE id = :id AND deleted_at IS NULL");
        $billStmt->execute(['id' => $billId]);
        $bill = $billStmt->fetch();

        if (!$bill) {
            Response::json(['error' => 'Bill not found'], 404);
            return;
        }

        if (empty($bill['is_archived'])) {
            Response::json(['error' => 'Only archived bills can cancel edits.'], 400);
            return;
        }

        $currentVersion = (int)($bill['version'] ?? 1);
        if ($currentVersion <= 1) {
            Response::json(['error' => 'Bill is at version 1; there is no previous revision to restore.'], 400);
            return;
        }

        if (!empty($bill['is_locked_for_edit']) || ($bill['agreement_status'] ?? '') === 'all_accepted') {
            Response::json(['error' => 'Cannot cancel edit: bill agreement has already been finalized or locked.'], 422);
            return;
        }

        $db->beginTransaction();
        try {
            // Find the revision snapshot
            $revStmt = $db->prepare("SELECT * FROM recurring_bill_revisions 
                WHERE bill_id = :bid AND cancelled_at IS NULL 
                ORDER BY version DESC LIMIT 1 FOR UPDATE");
            $revStmt->execute(['bid' => $billId]);
            $revision = $revStmt->fetch();

            if (!$revision) {
                $db->rollBack();
                Response::json(['error' => 'No previous revision snapshot found to restore'], 404);
                return;
            }

            $billSnapshot = json_decode($revision['bill_snapshot'], true);
            $cycleSnapshot = !empty($revision['cycle_snapshot']) ? json_decode($revision['cycle_snapshot'], true) : null;
            $prevSettlementIds = !empty($revision['settlement_ids']) ? json_decode($revision['settlement_ids'], true) : [];

            // 1. Cancel newly created settlements from this edit and restore previous version's settlements
            if (!empty($prevSettlementIds) && is_array($prevSettlementIds)) {
                $cleanIds = array_map('intval', $prevSettlementIds);
                $inClause = implode(',', $cleanIds);
                $db->prepare("UPDATE partner_settlements 
                    SET status = 'cancelled', cancelled_at = NOW(), cancelled_by = :cb, cancel_reason = 'Edit cancelled by user' 
                    WHERE bill_id = :bid AND id NOT IN ($inClause) AND status IN ('pending', 'refused', 'disputed')")
                   ->execute(['cb' => $userId, 'bid' => $billId]);

                // Restore previous version's settlements to active pending
                $db->exec("UPDATE partner_settlements 
                    SET status = 'pending', cancelled_at = NULL, cancelled_by = NULL, cancel_reason = NULL 
                    WHERE id IN ($inClause) AND status = 'cancelled'");
            } else {
                $db->prepare("UPDATE partner_settlements 
                    SET status = 'cancelled', cancelled_at = NOW(), cancelled_by = :cb, cancel_reason = 'Edit cancelled by user' 
                    WHERE bill_id = :bid AND status IN ('pending', 'refused', 'disputed')")
                   ->execute(['cb' => $userId, 'bid' => $billId]);
            }

            // Void any orphan payments in recurring_bill_cycle_payments created after revision snapshot was taken
            $revCreatedAt = $revision['created_at'] ?? date('Y-m-d H:i:s');
            $db->prepare("UPDATE recurring_bill_cycle_payments 
                SET voided_at = NOW(), voided_by = :cb, void_reason = 'Revision cancelled' 
                WHERE bill_id = :bid AND created_at >= :rca AND voided_at IS NULL")
               ->execute(['cb' => $userId, 'bid' => $billId, 'rca' => $revCreatedAt]);

            // 2. Tombstone notifications for this bill so Accept buttons disappear and zero resurrection
            $pendingNotifs = $db->prepare("SELECT id, entity_id, user_id FROM notifications WHERE entity_type = 'partner_settlement' AND entity_id IN (SELECT id FROM partner_settlements WHERE bill_id = :bid)");
            $pendingNotifs->execute(['bid' => $billId]);
            $notifRows = $pendingNotifs->fetchAll();

            foreach ($notifRows as $nRow) {
                try {
                    $db->prepare("INSERT IGNORE INTO notification_suppressions (user_id, entity_type, entity_id, stage_tag, suppressed_at) 
                        VALUES (:uid, 'partner_settlement', :eid, 'demand_revised', NOW())")
                       ->execute(['uid' => $nRow['user_id'], 'eid' => $nRow['entity_id']]);
                } catch (\Exception $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }
            }

            // Delete pending settlement notifications
            $db->prepare("DELETE FROM notifications WHERE entity_type = 'partner_settlement' AND entity_id IN (SELECT id FROM partner_settlements WHERE bill_id = :bid)")
               ->execute(['bid' => $billId]);

            // 3. Revert bill row from snapshot
            $revertBillStmt = $db->prepare("UPDATE recurring_bills 
                SET name = :name, category = :cat, provider_name = :prov, amount = :amt, estimated_amount = :est,
                    frequency = :freq, interval_days = :intv, due_day = :dday, cycle_anchor_date = :cad,
                    default_cash_source = :cs, receipt_ref = :ref, receipt_image = :img, receipt_image_name = :img_name,
                    has_refusal = :hr, settlement_status = :ss, agreement_status = :as, is_locked_for_edit = :lck,
                    version = :ver, note = :note, last_edited_by = :leb, last_edited_by_name = :lebn, updated_at = NOW() 
                WHERE id = :bid");
            $revertBillStmt->execute([
                'name'     => $billSnapshot['name'],
                'cat'      => $billSnapshot['category'],
                'prov'     => $billSnapshot['provider_name'] ?? null,
                'amt'      => $billSnapshot['amount'],
                'est'      => $billSnapshot['estimated_amount'] ?? '0',
                'freq'     => $billSnapshot['frequency'] ?? 'monthly',
                'intv'     => $billSnapshot['interval_days'] ?? null,
                'dday'     => $billSnapshot['due_day'] ?? null,
                'cad'      => $billSnapshot['cycle_anchor_date'] ?? null,
                'cs'       => $billSnapshot['default_cash_source'] ?? 'vault',
                'ref'      => $billSnapshot['receipt_ref'] ?? null,
                'img'      => $billSnapshot['receipt_image'] ?? null,
                'img_name' => $billSnapshot['receipt_image_name'] ?? null,
                'hr'       => (int)($billSnapshot['has_refusal'] ?? 0),
                'ss'       => $billSnapshot['settlement_status'] ?? 'none',
                'as'       => $billSnapshot['agreement_status'] ?? 'pending_acceptance',
                'lck'      => (int)($billSnapshot['is_locked_for_edit'] ?? 0),
                'ver'      => (int)($revision['version']),
                'note'     => $billSnapshot['note'] ?? null,
                'leb'      => $userId,
                'lebn'     => $_SESSION['username'] ?? 'Staff',
                'bid'      => $billId
            ]);

            // 4. Revert cycle row if exists
            if ($cycleSnapshot && !empty($cycleSnapshot['id'])) {
                $revertCycleStmt = $db->prepare("UPDATE recurring_bill_cycles 
                    SET amount_expected = :exp, amount_paid = :paid, split_data = :sd, has_refusal = :hr,
                        split_status = :ss, agreement_status = :as, is_locked_for_edit = :lck,
                        last_edited_by = :leb, last_edited_by_name = :lebn, updated_at = NOW() 
                    WHERE id = :cid");
                $revertCycleStmt->execute([
                    'exp'  => $cycleSnapshot['amount_expected'],
                    'paid' => $cycleSnapshot['amount_paid'],
                    'sd'   => $cycleSnapshot['split_data'],
                    'hr'   => (int)($cycleSnapshot['has_refusal'] ?? 0),
                    'ss'   => $cycleSnapshot['split_status'] ?? 'none',
                    'as'   => $cycleSnapshot['agreement_status'] ?? 'pending_acceptance',
                    'lck'  => (int)($cycleSnapshot['is_locked_for_edit'] ?? 0),
                    'leb'  => $userId,
                    'lebn' => $_SESSION['username'] ?? 'Staff',
                    'cid'  => (int)$cycleSnapshot['id']
                ]);
            }

            // 5. Mark revision row cancelled
            $db->prepare("UPDATE recurring_bill_revisions SET cancelled_at = NOW(), cancelled_by = :cb WHERE id = :rid")
               ->execute(['cb' => $userId, 'rid' => $revision['id']]);

            // 6. Audit logs
            $hist = $db->prepare("INSERT INTO expense_history (bill_id, edited_by, action, changes, reason, created_at) VALUES (:bid, :by, 'cancel_edit', :ch, :reason, NOW())");
            $hist->execute([
                'bid'    => $billId,
                'by'     => $userId,
                'ch'     => json_encode(['reverted_from_version' => $currentVersion, 'reverted_to_version' => $revision['version']]),
                'reason' => 'Archived bill edit cancelled; reverted to previous revision snapshot'
            ]);

            $db->commit();

            SystemLog::write('recurring_bills', 'cancel_edit', $billId, $bill['name'], json_encode([
                'uid'                   => $bill['uid'] ?? null,
                'bill_uid'              => $bill['uid'] ?? null,
                'bill_id'               => $billId,
                'reverted_from_version' => $currentVersion,
                'reverted_to_version'   => $revision['version'],
                'reason'                => 'Archived bill edit cancelled; reverted to previous revision snapshot'
            ]), $userId);

            Response::json([
                'ok' => true,
                'message' => 'Edit cancelled successfully. Bill reverted to previous revision.',
                'bill_id' => $billId,
                'restored_version' => (int)$revision['version']
            ]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("SEC-40 Defensive exception in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to cancel edit due to a system error'], 500);
        }
    }

    /** GET /api/recurring-bills/groups - List active or deleted bill groups with aggregated counts */
    public function getGroups(): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $filter = $_GET['filter'] ?? 'active';
        if ($filter === 'deleted') {
            $where = "WHERE g.deleted_at IS NOT NULL";
        } elseif ($filter === 'all') {
            $where = "";
        } else {
            $where = "WHERE g.deleted_at IS NULL";
        }

        $sql = "SELECT g.*, 
                       COUNT(b.id) AS bills_count,
                       COALESCE(SUM(b.amount), 0) AS total_amount,
                       sc.name AS source_circle_name,
                       uc.username AS creator_username,
                       ud.username AS deleted_by_username
                FROM bill_groups g
                LEFT JOIN recurring_bills b ON b.group_id = g.id AND b.deleted_at IS NULL
                LEFT JOIN recurring_bills sc ON g.source_circle_id = sc.id
                LEFT JOIN users uc ON g.created_by = uc.id
                LEFT JOIN users ud ON g.deleted_by = ud.id
                {$where}
                GROUP BY g.id
                ORDER BY g.is_from_circle DESC, g.name ASC";
        $groups = $db->query($sql)->fetchAll();
        foreach ($groups as &$grp) {
            $grp['total_amount'] = Decimal::truncate((string)$grp['total_amount'], 16);
            $grp['bills_count'] = (int)$grp['bills_count'];
        }
        unset($grp);

        Response::json(['groups' => $groups]);
    }

    /** POST /api/recurring-bills/groups - Create a new bill group */
    public function storeGroup(array $data): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $name = trim((string)($data['name'] ?? ''));
        if ($name === '') {
            Response::json(['error' => 'Group name is required'], 400);
            return;
        }

        // Check name uniqueness among active groups
        $chk = $db->prepare("SELECT id FROM bill_groups WHERE name = :name AND deleted_at IS NULL");
        $chk->execute(['name' => $name]);
        if ($chk->fetch()) {
            Response::json(['error' => 'A group with this name already exists'], 422);
            return;
        }

        $userId = (int)($_SESSION['user_id'] ?? 1);
        $uid = 'GRP-' . date('Ymd') . '-' . strtoupper(substr(uniqid(), -6));
        $desc = trim((string)($data['description'] ?? ''));
        $color = trim((string)($data['color'] ?? ''));
        $icon = trim((string)($data['icon'] ?? '📁'));
        $category = trim((string)($data['category'] ?? ''));

        $stmt = $db->prepare("INSERT INTO bill_groups (uid, name, description, color, icon, category, is_from_circle, source_circle_id, created_by, created_at)
            VALUES (:uid, :name, :desc, :color, :icon, :cat, 0, NULL, :cb, NOW())");
        $stmt->execute([
            'uid'   => $uid,
            'name'  => $name,
            'desc'  => $desc ?: null,
            'color' => $color ?: null,
            'icon'  => $icon ?: '📁',
            'cat'   => $category ?: null,
            'cb'    => $userId
        ]);
        $id = (int)$db->lastInsertId();

        SystemLog::write('bill_groups', 'group_created', $id, $name, json_encode([
            'uid'            => $uid,
            'name'           => $name,
            'description'    => $desc ?: null,
            'color'          => $color ?: null,
            'icon'           => $icon ?: '📁',
            'category'       => $category ?: null,
            'is_from_circle' => 0,
            'bills_count'    => 0,
            'user_id'        => $userId
        ]), $userId);
        Response::json(['ok' => true, 'group' => ['id' => $id, 'uid' => $uid, 'name' => $name]], 201);
    }

    /** PUT /api/recurring-bills/groups/{id} - Update a bill group */
    public function updateGroup(string $id, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $stmt = $db->prepare("SELECT * FROM bill_groups WHERE id = :id AND deleted_at IS NULL");
        $stmt->execute(['id' => (int)$id]);
        $group = $stmt->fetch();
        if (!$group) {
            Response::json(['error' => 'Group not found'], 404);
            return;
        }

        $name = trim((string)($data['name'] ?? $group['name']));
        if ($name === '') {
            Response::json(['error' => 'Group name cannot be empty'], 400);
            return;
        }

        // Check name uniqueness if changed
        if ($name !== $group['name']) {
            $chk = $db->prepare("SELECT id FROM bill_groups WHERE name = :name AND id != :id AND deleted_at IS NULL");
            $chk->execute(['name' => $name, 'id' => (int)$id]);
            if ($chk->fetch()) {
                Response::json(['error' => 'Another group with this name already exists'], 422);
                return;
            }
        }

        $desc = isset($data['description']) ? trim((string)$data['description']) : $group['description'];
        $color = isset($data['color']) ? trim((string)$data['color']) : $group['color'];
        $icon = isset($data['icon']) ? trim((string)$data['icon']) : $group['icon'];
        $category = isset($data['category']) ? trim((string)$data['category']) : $group['category'];

        $upd = $db->prepare("UPDATE bill_groups SET name = :name, description = :desc, color = :color, icon = :icon, category = :cat, updated_at = NOW() WHERE id = :id");
        $upd->execute([
            'name'  => $name,
            'desc'  => $desc ?: null,
            'color' => $color ?: null,
            'icon'  => $icon ?: '📁',
            'cat'   => $category ?: null,
            'id'    => (int)$id
        ]);

        $changes = [];
        if ($group['name'] !== $name) $changes['name'] = ['from' => $group['name'], 'to' => $name];
        if (($group['description'] ?? '') !== ($desc ?: '')) $changes['description'] = ['from' => $group['description'], 'to' => $desc ?: null];
        if (($group['color'] ?? '') !== ($color ?: '')) $changes['color'] = ['from' => $group['color'], 'to' => $color ?: null];
        if (($group['icon'] ?? '📁') !== ($icon ?: '📁')) $changes['icon'] = ['from' => $group['icon'], 'to' => $icon ?: '📁'];
        if (($group['category'] ?? '') !== ($category ?: '')) $changes['category'] = ['from' => $group['category'], 'to' => $category ?: null];

        $userId = (int)($_SESSION['user_id'] ?? 1);
        SystemLog::write('bill_groups', 'group_updated', (int)$id, $name, json_encode([
            'uid'         => $group['uid'],
            'name'        => $name,
            'old_name'    => $group['name'],
            'new_name'    => $name,
            'changes'     => $changes,
            'color'       => $color ?: null,
            'icon'        => $icon ?: '📁',
            'category'    => $category ?: null,
            'user_id'     => $userId
        ]), $userId);
        Response::json(['ok' => true]);
    }

    /** DELETE /api/recurring-bills/groups/{id} - Soft-delete group and safely unlink bills to standalone */
    public function deleteGroup(string $id, array $data = []): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $stmt = $db->prepare("SELECT * FROM bill_groups WHERE id = :id AND deleted_at IS NULL");
        $stmt->execute(['id' => (int)$id]);
        $group = $stmt->fetch();
        if (!$group) {
            Response::json(['error' => 'Group not found'], 404);
            return;
        }

        $userId = (int)($_SESSION['user_id'] ?? 1);
        $reason = trim((string)($data['delete_reason'] ?? ($data['reason'] ?? 'User deleted group')));

        $db->beginTransaction();
        try {
            // Capture unlinked bills before unlinking to standalone
            $unlinkedStmt = $db->prepare("SELECT id, uid, name FROM recurring_bills WHERE group_id = :gid AND deleted_at IS NULL");
            $unlinkedStmt->execute(['gid' => (int)$id]);
            $unlinkedBills = $unlinkedStmt->fetchAll(PDO::FETCH_ASSOC);

            // Unlink all bills in this group to standalone (0 loss)
            $db->prepare("UPDATE recurring_bills SET group_id = NULL, updated_at = NOW() WHERE group_id = :gid")
               ->execute(['gid' => (int)$id]);

            // Soft delete the group
            $db->prepare("UPDATE bill_groups SET deleted_at = NOW(), deleted_by = :uid, delete_reason = :reason, updated_at = NOW() WHERE id = :id")
               ->execute(['uid' => $userId, 'reason' => $reason ?: null, 'id' => (int)$id]);

            $db->commit();
            SystemLog::write('bill_groups', 'group_deleted', (int)$id, $group['name'], json_encode([
                'uid'                  => $group['uid'],
                'name'                 => $group['name'],
                'reason'               => $reason,
                'color'                => $group['color'],
                'icon'                 => $group['icon'],
                'category'             => $group['category'],
                'unlinked_bills_count' => count($unlinkedBills),
                'unlinked_bills'       => array_map(fn($b) => ['id' => (int)$b['id'], 'uid' => $b['uid'], 'name' => $b['name']], $unlinkedBills),
                'user_id'              => $userId
            ]), $userId);
            Response::json(['ok' => true]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("SEC-40 Defensive exception in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to delete group due to a system error'], 500);
        }
    }

    /** POST /api/recurring-bills/groups/{id}/restore - Restore a soft-deleted bill group */
    public function restoreGroup(string $id): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $stmt = $db->prepare("SELECT * FROM bill_groups WHERE id = :id AND deleted_at IS NOT NULL");
        $stmt->execute(['id' => (int)$id]);
        $group = $stmt->fetch();
        if (!$group) {
            Response::json(['error' => 'Deleted group not found'], 404);
            return;
        }

        // Check if an active group with the same name already exists
        $chk = $db->prepare("SELECT id FROM bill_groups WHERE name = :name AND deleted_at IS NULL");
        $chk->execute(['name' => $group['name']]);
        if ($chk->fetch()) {
            Response::json(['error' => 'An active group with this name already exists. Please rename or delete it before restoring.'], 422);
            return;
        }

        $userId = (int)($_SESSION['user_id'] ?? 1);
        $db->prepare("UPDATE bill_groups SET deleted_at = NULL, deleted_by = NULL, delete_reason = NULL, updated_at = NOW() WHERE id = :id")
           ->execute(['id' => (int)$id]);

        SystemLog::write('bill_groups', 'group_restored', (int)$id, $group['name'], json_encode([
            'uid'            => $group['uid'],
            'name'           => $group['name'],
            'color'          => $group['color'],
            'icon'           => $group['icon'],
            'category'       => $group['category'],
            'is_from_circle' => (int)($group['is_from_circle'] ?? 0),
            'bills_count'    => 0,
            'restored_by'    => $userId
        ]), $userId);
        Response::json(['ok' => true]);
    }

    /** GET /api/recurring-bills/groups/{id}/info - Get detailed intelligence for a bill group (source circle blueprint, unbilled/unpaid/paid cycles, member bills) */
    public function getGroupInfo(string $id): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $stmt = $db->prepare("SELECT g.*, 
                                     uc.username AS creator_username,
                                     ud.username AS deleted_by_username,
                                     sc.name AS source_circle_name
                              FROM bill_groups g
                              LEFT JOIN users uc ON g.created_by = uc.id
                              LEFT JOIN users ud ON g.deleted_by = ud.id
                              LEFT JOIN recurring_bills sc ON g.source_circle_id = sc.id
                              WHERE g.id = :id");
        $stmt->execute(['id' => (int)$id]);
        $group = $stmt->fetch();
        if (!$group) {
            Response::json(['error' => 'Group not found'], 404);
            return;
        }

        // Fetch member bills currently in this group
        $bStmt = $db->prepare("SELECT b.*, u.username AS creator_username 
                               FROM recurring_bills b
                               LEFT JOIN users u ON b.created_by = u.id
                               WHERE b.group_id = :gid AND b.deleted_at IS NULL
                               ORDER BY b.is_from_circle DESC, b.name ASC, b.id ASC");
        $bStmt->execute(['gid' => (int)$id]);
        $memberBills = $bStmt->fetchAll();

        $portedBills = [];
        $manualBills = [];
        $totalGroupAmount = '0';

        foreach ($memberBills as $mb) {
            $mb['amount'] = Decimal::truncate((string)$mb['amount'], 16);
            $totalGroupAmount = Decimal::add($totalGroupAmount, $mb['amount'], 16);
            if (!empty($mb['is_from_circle'])) {
                $portedBills[] = $mb;
            } else {
                $manualBills[] = $mb;
            }
        }

        $sourceCircle = null;
        $unbilledCycles = [];
        $unpaidCycles = [];
        $paidCycles = [];

        if (!empty($group['is_from_circle']) && !empty($group['source_circle_id'])) {
            $scStmt = $db->prepare("SELECT sc.*, 
                                           uc.username AS creator_username,
                                           ud.username AS deleted_by_username
                                    FROM recurring_bills sc
                                    LEFT JOIN users uc ON sc.created_by = uc.id
                                    LEFT JOIN users ud ON sc.deleted_by = ud.id
                                    WHERE sc.id = :cid");
            $scStmt->execute(['cid' => (int)$group['source_circle_id']]);
            $sourceCircle = $scStmt->fetch();

            if ($sourceCircle) {
                $cStmt = $db->prepare("SELECT c.*,
                                              u.username AS paid_by_name,
                                              ubc.username AS created_by_name
                                       FROM recurring_bill_cycles c
                                       LEFT JOIN users u ON c.paid_by = u.id
                                       LEFT JOIN users ubc ON c.bill_created_by = ubc.id
                                       WHERE c.bill_id = :cid
                                       ORDER BY c.due_date ASC");
                $cStmt->execute(['cid' => (int)$group['source_circle_id']]);
                $allCycles = $cStmt->fetchAll();

                foreach ($allCycles as $c) {
                    $c['amount_expected'] = Decimal::truncate((string)($c['amount_expected'] ?? '0'), 16);
                    $c['amount_paid'] = Decimal::truncate((string)($c['amount_paid'] ?? '0'), 16);

                    if (empty($c['bill_created'])) {
                        $unbilledCycles[] = $c;
                    } elseif (empty($c['paid_at'])) {
                        $unpaidCycles[] = $c;
                    } else {
                        $paidCycles[] = $c;
                    }
                }
            }
        }

        Response::json([
            'group' => [
                'id' => (int)$group['id'],
                'uid' => $group['uid'],
                'name' => $group['name'],
                'description' => $group['description'],
                'color' => $group['color'],
                'icon' => $group['icon'],
                'category' => $group['category'],
                'is_from_circle' => (int)$group['is_from_circle'],
                'source_circle_id' => $group['source_circle_id'] ? (int)$group['source_circle_id'] : null,
                'source_circle_name' => $group['source_circle_name'],
                'created_by' => $group['created_by'] ? (int)$group['created_by'] : null,
                'creator_username' => $group['creator_username'],
                'created_at' => $group['created_at'],
                'deleted_at' => $group['deleted_at'],
                'deleted_by_username' => $group['deleted_by_username'],
                'delete_reason' => $group['delete_reason'],
                'total_amount' => $totalGroupAmount,
                'bills_count' => count($memberBills)
            ],
            'source_circle' => $sourceCircle,
            'ported_bills' => $portedBills,
            'manual_bills' => $manualBills,
            'unbilled_cycles' => $unbilledCycles,
            'unpaid_cycles' => $unpaidCycles,
            'paid_cycles' => $paidCycles
        ]);
    }

    /** POST /api/recurring-bills/{id}/group - Assign an archived bill to a group */
    public function assignBillToGroup(string $id, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $billStmt = $db->prepare("SELECT * FROM recurring_bills WHERE id = :id AND deleted_at IS NULL");
        $billStmt->execute(['id' => (int)$id]);
        $bill = $billStmt->fetch();
        if (!$bill) {
            Response::json(['error' => 'Bill not found'], 404);
            return;
        }

        // Ported circle bills are permanent members of their circle group
        if (!empty($bill['is_from_circle'])) {
            Response::json(['error' => 'Bills ported from an active circle are permanent and cannot be reassigned or unlinked from their circle group.'], 422);
            return;
        }

        $userId = (int)($_SESSION['user_id'] ?? 1);
        $groupId = !empty($data['group_id']) ? (int)$data['group_id'] : null;
        $targetGroupName = null;
        $targetGroupUid  = null;
        if ($groupId !== null) {
            $grpStmt = $db->prepare("SELECT id, uid, name FROM bill_groups WHERE id = :gid AND deleted_at IS NULL");
            $grpStmt->execute(['gid' => $groupId]);
            $grp = $grpStmt->fetch(PDO::FETCH_ASSOC);
            if (!$grp) {
                Response::json(['error' => 'Target group not found or deleted'], 404);
                return;
            }
            $targetGroupName = $grp['name'];
            $targetGroupUid  = $grp['uid'];
        }

        $prevGroupId = $bill['group_id'] ? (int)$bill['group_id'] : null;
        $prevGroupName = null;
        $prevGroupUid  = null;
        if ($prevGroupId) {
            $prevGStmt = $db->prepare("SELECT id, uid, name FROM bill_groups WHERE id = :gid");
            $prevGStmt->execute(['gid' => $prevGroupId]);
            $prevGrp = $prevGStmt->fetch(PDO::FETCH_ASSOC);
            if ($prevGrp) {
                $prevGroupName = $prevGrp['name'];
                $prevGroupUid  = $prevGrp['uid'];
            }
        }

        $db->prepare("UPDATE recurring_bills SET group_id = :gid, updated_at = NOW() WHERE id = :id")
           ->execute(['gid' => $groupId, 'id' => (int)$id]);

        SystemLog::write('recurring_bills', 'bill_assigned_to_group', (int)$id, $bill['name'], json_encode([
            'uid'                 => $bill['uid'],
            'bill_id'             => (int)$id,
            'bill_uid'            => $bill['uid'],
            'bill_name'           => $bill['name'],
            'amount'              => $bill['amount'],
            'category'            => $bill['category'],
            'previous_group_id'   => $prevGroupId,
            'previous_group_name' => $prevGroupName,
            'previous_group_uid'  => $prevGroupUid,
            'target_group_id'     => $groupId,
            'target_group_name'   => $targetGroupName,
            'target_group_uid'    => $targetGroupUid,
            'user_id'             => $userId
        ]), $userId);
        Response::json(['ok' => true, 'group_id' => $groupId]);
    }

    /** DELETE /api/recurring-bills/{id}/group - Remove an archived bill from its group (returns to standalone) */
    public function removeBillFromGroup(string $id): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $billStmt = $db->prepare("SELECT * FROM recurring_bills WHERE id = :id AND deleted_at IS NULL");
        $billStmt->execute(['id' => (int)$id]);
        $bill = $billStmt->fetch();
        if (!$bill) {
            Response::json(['error' => 'Bill not found'], 404);
            return;
        }

        // Ported circle bills are permanent members of their circle group
        if (!empty($bill['is_from_circle'])) {
            Response::json(['error' => 'Bills ported from an active circle are permanent and cannot be unlinked from their circle group.'], 422);
            return;
        }

        $userId = (int)($_SESSION['user_id'] ?? 1);
        $prevGrp = null;
        if (!empty($bill['group_id'])) {
            $gStmt = $db->prepare("SELECT id, uid, name FROM bill_groups WHERE id = :gid");
            $gStmt->execute(['gid' => (int)$bill['group_id']]);
            $prevGrp = $gStmt->fetch(PDO::FETCH_ASSOC);
        }

        $db->prepare("UPDATE recurring_bills SET group_id = NULL, updated_at = NOW() WHERE id = :id")
           ->execute(['id' => (int)$id]);

        SystemLog::write('recurring_bills', 'bill_removed_from_group', (int)$id, $bill['name'], json_encode([
            'uid'                 => $bill['uid'],
            'bill_id'             => (int)$id,
            'bill_uid'            => $bill['uid'],
            'bill_name'           => $bill['name'],
            'amount'              => $bill['amount'],
            'category'            => $bill['category'],
            'previous_group_id'   => $bill['group_id'] ? (int)$bill['group_id'] : null,
            'previous_group_name' => $prevGrp['name'] ?? null,
            'previous_group_uid'  => $prevGrp['uid'] ?? null,
            'user_id'             => $userId
        ]), $userId);
        Response::json(['ok' => true]);
    }

    /** POST /api/recurring-bills/groups/{id}/assign-bills - Bulk assign archived bills to a group */
    public function bulkAssignBillsToGroup(string $groupId, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $grpStmt = $db->prepare("SELECT * FROM bill_groups WHERE id = :gid AND deleted_at IS NULL");
        $grpStmt->execute(['gid' => (int)$groupId]);
        $grp = $grpStmt->fetch(PDO::FETCH_ASSOC);
        if (!$grp) {
            Response::json(['error' => 'Target group not found or deleted'], 404);
            return;
        }

        $billIds = $data['bill_ids'] ?? [];
        if (!is_array($billIds) || empty($billIds)) {
            Response::json(['error' => 'No bills provided for assignment'], 422);
            return;
        }

        $userId = (int)($_SESSION['user_id'] ?? 1);
        $cleanIds = array_values(array_unique(array_filter(array_map('intval', $billIds), fn($id) => $id > 0)));
        if (empty($cleanIds)) {
            Response::json(['error' => 'Invalid bill IDs provided'], 422);
            return;
        }

        $placeholders = implode(',', array_fill(0, count($cleanIds), '?'));
        $candStmt = $db->prepare("SELECT id, uid, name, amount, category, group_id FROM recurring_bills WHERE id IN ($placeholders) AND deleted_at IS NULL AND (is_from_circle IS NULL OR is_from_circle = 0)");
        $candStmt->execute($cleanIds);
        $candidates = $candStmt->fetchAll(PDO::FETCH_ASSOC);

        if (empty($candidates)) {
            Response::json(['error' => 'None of the specified bills are eligible for assignment'], 422);
            return;
        }

        $assignedIds = array_map('intval', array_column($candidates, 'id'));

        $db->beginTransaction();
        try {
            $updPlaceholders = implode(',', array_fill(0, count($assignedIds), '?'));
            $updStmt = $db->prepare("UPDATE recurring_bills SET group_id = ?, updated_at = NOW() WHERE id IN ($updPlaceholders)");
            $updStmt->execute(array_merge([(int)$groupId], $assignedIds));
            $db->commit();

            SystemLog::write('bill_groups', 'bills_assigned_to_group_bulk', (int)$groupId, $grp['name'], json_encode([
                'group_id'       => (int)$groupId,
                'group_uid'      => $grp['uid'],
                'group_name'     => $grp['name'],
                'assigned_count' => count($candidates),
                'assigned_bills' => array_map(fn($b) => ['id' => (int)$b['id'], 'uid' => $b['uid'], 'name' => $b['name']], $candidates),
                'user_id'        => $userId
            ]), $userId);

            Response::json(['ok' => true, 'group_id' => (int)$groupId, 'assigned_count' => count($candidates)]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("SEC-40 Defensive exception in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to assign bills due to a system error'], 500);
        }
    }

    /** POST /api/recurring-bills/groups/{id}/remove-bills - Bulk remove bills from a group (returns to standalone) */
    public function bulkRemoveBillsFromGroup(string $groupId, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureTables($db);

        $grpStmt = $db->prepare("SELECT * FROM bill_groups WHERE id = :gid");
        $grpStmt->execute(['gid' => (int)$groupId]);
        $grp = $grpStmt->fetch(PDO::FETCH_ASSOC);
        if (!$grp) {
            Response::json(['error' => 'Group not found'], 404);
            return;
        }

        $billIds = $data['bill_ids'] ?? [];
        if (!is_array($billIds) || empty($billIds)) {
            Response::json(['error' => 'No bills provided for removal'], 422);
            return;
        }

        $userId = (int)($_SESSION['user_id'] ?? 1);
        $cleanIds = array_values(array_unique(array_filter(array_map('intval', $billIds), fn($id) => $id > 0)));
        if (empty($cleanIds)) {
            Response::json(['error' => 'Invalid bill IDs provided'], 422);
            return;
        }

        $placeholders = implode(',', array_fill(0, count($cleanIds), '?'));
        $candStmt = $db->prepare("SELECT id, uid, name, amount, category, group_id FROM recurring_bills WHERE id IN ($placeholders) AND group_id = ? AND deleted_at IS NULL AND (is_from_circle IS NULL OR is_from_circle = 0)");
        $candStmt->execute(array_merge($cleanIds, [(int)$groupId]));
        $candidates = $candStmt->fetchAll(PDO::FETCH_ASSOC);

        if (empty($candidates)) {
            Response::json(['error' => 'None of the specified bills are in this group or eligible for removal'], 422);
            return;
        }

        $removedIds = array_map('intval', array_column($candidates, 'id'));

        $db->beginTransaction();
        try {
            $updPlaceholders = implode(',', array_fill(0, count($removedIds), '?'));
            $updStmt = $db->prepare("UPDATE recurring_bills SET group_id = NULL, updated_at = NOW() WHERE id IN ($updPlaceholders)");
            $updStmt->execute($removedIds);
            $db->commit();

            SystemLog::write('bill_groups', 'bills_removed_from_group_bulk', (int)$groupId, $grp['name'], json_encode([
                'group_id'      => (int)$groupId,
                'group_uid'     => $grp['uid'],
                'group_name'    => $grp['name'],
                'removed_count' => count($candidates),
                'removed_bills' => array_map(fn($b) => ['id' => (int)$b['id'], 'uid' => $b['uid'], 'name' => $b['name']], $candidates),
                'user_id'       => $userId
            ]), $userId);

            Response::json(['ok' => true, 'group_id' => (int)$groupId, 'removed_count' => count($candidates)]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("SEC-40 Defensive exception in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Failed to remove bills due to a system error'], 500);
        }
    }

}

/* [END_OF_MODULE_SECURITY_SEAL] ‍﻿​‌​‌‌​‌‌​‌​​​​‌‌​‌​‌​​‌​​‌​‌‌​​‌​‌​‌​​​​​‌​‌​‌​​​‌​​‌‌‌‌​‌​​​‌‌‌​‌​‌​​‌​​‌​​​​​‌​‌​‌​​​​​‌​​‌​​​​‌​​‌​​‌​‌​​​​‌‌​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​‌‌​​‌​​​‌​‌​‌​​‌‌‌​​‌​​​​​‌​‌​​‌‌‌​​‌​​​​‌‌​‌​​​‌​‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​​‌‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​‌​‌​‌​‌​​​​​‌​‌​​‌‌​​​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​‌​​​‌​‌‌​​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​‌​​‌​​‌​​​‌​​​‌​‌‌‌​‌​​​​‌​‌​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​​‌​​​‌‌‌​‌​‌​‌‌​​​‌‌​‌‌‌​‌​​​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​​‌​​​​​​​‌​‌​​​​‌​​‌​​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​​‌​‌‌​‌​‌​‌​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​​​​​‌​​​​​​‌​​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​‌​​‌‌​‌‌‌​‌​‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​‌​‌​​‌​‌​​‌​​​​‌​‌​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​‌​‌​​‌​​​​​​‌​​​​‌‌​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌‌​​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​‌‌‌​‌​​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​​‌‌‌​‌​​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​​​‌​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​​​‌​‌​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​​‌‌‌​‌​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​​‌‌‌​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​​‌​​​​‌​‌​​‌​​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​​​​​​‌​​​‌​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌​‌‌​​​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​​​​‌​‌​​​​​‌​‌​​‌​‌‌​‌‌​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌‌​​‌​​‌​​‌​‌​​‌‌‌‌​‌​​‌‌​​​‌​​​​​‌​‌​​​​‌​​‌​​‌‌​​​‌​​​‌​‌​​‌​​​​​​‌​​​‌​​​‌​​‌​​‌​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​​‌​​‌​‌​‌​‌‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​‌​​​‌​​‌‌‌‌​​‌​​​​​​‌​​​​​‌​‌​​‌‌​​​‌​​‌‌​​​​‌​​​​​​‌​​​​​‌​‌​​‌​​‌​​‌​​​​​​‌​​​​​‌​‌​‌​​‌‌​‌​‌​​‌‌​‌​​‌​​‌​‌​‌​​‌‌​‌​‌​‌​​​‌​​​​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌​​​‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​​‌‌​‌​‌​‌​​​​​‌​​‌​​‌​‌​​‌‌​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​​​‌​‌​‌​‌​‌​‌​‌​‌​​​‌​​‌‌‌‌​‌​​‌‌​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​​​​‌​‌​​​‌‌‌​‌​​​‌​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​‌​‌‌‌​‌​​‌‌‌​‌​​​​​‌​‌​​‌​‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌​​‌​‌​‌‌‌‌​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​‌​​​​​​​‌​‌​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​‌​​‌​​‌​‌‌‌​​​​​‌​‌​​‌​‌‌​​‌​‌‌​‌‌‌‌​‌‌‌​‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌‌​‌​​​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​‌‌​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​​‌​​‌‌​‌​​‌​‌‌​​‌​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​‌‌​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​‌​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​​​‌​‌‌​‌‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌​​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​​​​‌​‌‌​‌‌​​​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​​​‌​‌​​‌‌​‌‌‌‌​‌‌​​‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌​​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌‌​​‌‌​​‌​‌‌‌​​​​​‌​‌​​‌​​​​​‌​‌‌​‌‌‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌‌​​​‌​‌‌‌​‌​‌​‌‌​​‌​‌​‌‌‌​​‌‌​‌‌‌​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌​‌​​‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​‌‌​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​​​​​‌​‌‌​​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​‌​‌​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌​​​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​‌‌​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​‌‌‌​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌​​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​​​‌​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​‌​‌‌​‌‌‌​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌‌​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌​​‌‌​‌​‌​‌​‌​‌​‌​‌​​‌‌​‌​‌​‌​​​​‌​​​​​​‌​​​​‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​‌‌​​‌​‌​‌​‌​‌​‌​​‌‌​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌​‌​‌​​‌‌​‌​‌​​​‌​‌​‌​​​‌​​​‌​​‌​​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​‌‌​​‌​​‌​‌‌‌​﻿‍ */
