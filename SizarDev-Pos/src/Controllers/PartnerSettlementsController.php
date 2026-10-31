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

require_once __DIR__ . '/../Response.php';
require_once __DIR__ . '/../SystemLog.php';
require_once __DIR__ . '/../Utils/Decimal.php';
require_once __DIR__ . '/../Utils/EntityVersion.php';
require_once __DIR__ . '/CashVaultController.php';
require_once __DIR__ . '/OrdersController.php';

use App\Utils\EntityVersion;

class PartnerSettlementsController
{
    private static bool $tableEnsured = false;

    /**
     * Calculate aggregate consignment escrow status and amounts for an order.
     */
    public static function calculateOrderConsignmentEscrow(int $orderId): array
    {
        $db = Database::getConnection();
        $stmt = $db->prepare("
            SELECT s.*, u.username as payee_username
            FROM partner_settlements s
            LEFT JOIN users u ON u.id = s.payee_user_id
            WHERE (s.related_entity_type = 'orders' OR s.related_entity_type = 'order')
              AND s.related_entity_id = :order_id
              AND s.status != 'cancelled'
        ");
        $stmt->execute(['order_id' => $orderId]);
        $settlements = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $consignmentTotal = '0';
        $consignmentReleased = '0';
        $consignmentSettled = '0';
        $hasPendingAcceptance = false;
        $hasRefused = false;

        foreach ($settlements as $st) {
            $amt = (string)($st['amount'] ?? '0');
            $consignmentTotal = Decimal::add($consignmentTotal, $amt);

            $rel = (string)($st['released_amount'] ?? '0');
            if (($st['release_status'] ?? '') === 'released' && Decimal::comp($rel, '0') <= 0) {
                $rel = $amt;
            }
            $consignmentReleased = Decimal::add($consignmentReleased, $rel);

            $set = (string)($st['settled_amount'] ?? '0');
            $consignmentSettled = Decimal::add($consignmentSettled, $set);

            $acc = $st['acceptance_status'] ?? 'pending';
            if ($acc === 'refused') {
                $hasRefused = true;
            } elseif ($acc === 'pending') {
                $hasPendingAcceptance = true;
            }
        }

        $unreleased = Decimal::comp($consignmentTotal, $consignmentReleased) > 0 ? Decimal::sub($consignmentTotal, $consignmentReleased) : '0';
        $uncollected = Decimal::comp($consignmentReleased, $consignmentSettled) > 0 ? Decimal::sub($consignmentReleased, $consignmentSettled) : '0';

        if (empty($settlements)) {
            $status = 'none';
        } elseif ($hasRefused) {
            $status = 'refused';
        } elseif ($hasPendingAcceptance) {
            $status = 'pending_acceptance';
        } elseif (Decimal::comp($uncollected, '0') > 0 && Decimal::comp($unreleased, '0') > 0) {
            $status = 'waiting_release_and_claim';
        } elseif (Decimal::comp($uncollected, '0') > 0) {
            $status = 'waiting_claim';
        } elseif (Decimal::comp($unreleased, '0') > 0) {
            $status = 'waiting_release';
        } elseif (Decimal::comp($consignmentTotal, '0') > 0 && Decimal::comp($consignmentSettled, $consignmentTotal) >= 0) {
            $status = 'settled';
        } else {
            $status = 'none';
        }

        return [
            'status'             => $status,
            'total_amount'       => $consignmentTotal,
            'released_amount'    => $consignmentReleased,
            'settled_amount'     => $consignmentSettled,
            'unreleased_amount'  => $unreleased,
            'uncollected_amount' => $uncollected,
            'settlements'        => $settlements,
        ];
    }

    /**
     * List all settlements for the current user (as payer or payee).
     * Supports filters: status, type, partner_id, date_from, date_to.
     */
    public function index(): void
    {
        $db = Database::getConnection();
        $this->ensureTable($db);

        $userId = (int)($_SESSION['user_id'] ?? 0);
        if ($userId <= 0) {
            Response::json(['error' => 'Unauthorized: Please log in.'], 401);
            return;
        }
        $isAdmin = !empty($_SESSION['is_admin']) || (isset($_SESSION['role']) && $_SESSION['role'] === 'admin');
        if (session_status() === PHP_SESSION_ACTIVE) {
            session_write_close();
        }

        $status = $_GET['status'] ?? null;  // 'pending', 'settled', 'cancelled', or null for all
        $type = $_GET['type'] ?? null;
        $partnerId = $_GET['partner_id'] ?? null;

        $billIdFilter = !empty($_GET['bill_id']) ? (int)$_GET['bill_id'] : null;
        $orderIdFilter = !empty($_GET['order_id']) ? (int)$_GET['order_id'] : null;
        $settlementIdFilter = !empty($_GET['id']) ? (int)$_GET['id'] : null;

        if ($isAdmin || $billIdFilter || $orderIdFilter || $settlementIdFilter) {
            $orderStatusExclusion = ($orderIdFilter || $settlementIdFilter) ? '' : ' AND (ps.settlement_type = \'order_return_clawback\' OR ord.status NOT IN (\'deleted\', \'returned\', \'cancelled\'))';
            $where = 'WHERE (oe.id IS NULL OR oe.deleted_at IS NULL) AND (rb.id IS NULL OR rb.deleted_at IS NULL) AND (rbc.id IS NULL OR (rbc.voided_at IS NULL AND rbc.bill_created = 1)) AND (pur.id IS NULL OR pur.deleted_at IS NULL) AND ((ps.related_entity_type NOT IN (\'orders\', \'order\') OR ps.related_entity_type IS NULL) OR (ord.id IS NOT NULL AND ord.deleted_at IS NULL' . $orderStatusExclusion . '))';
            $params = [];
            if ($settlementIdFilter) {
                $where .= ' AND ps.id = :filter_sid';
                $params['filter_sid'] = $settlementIdFilter;
            }
            if ($billIdFilter) {
                $where .= ' AND (ps.bill_id = :filter_bid OR (ps.related_entity_type = \'recurring_bills\' AND ps.related_entity_id = :filter_bid2))';
                $params['filter_bid'] = $billIdFilter;
                $params['filter_bid2'] = $billIdFilter;
                if (!$isAdmin) {
                    $where .= ' AND (ps.payer_user_id = :cur_b_uid OR ps.payee_user_id = :cur_b_uid2 OR ps.created_by = :cur_b_uid3)';
                    $params['cur_b_uid'] = $userId;
                    $params['cur_b_uid2'] = $userId;
                    $params['cur_b_uid3'] = $userId;
                }
            }
            if ($orderIdFilter) {
                $where .= ' AND ps.related_entity_type = \'orders\' AND ps.related_entity_id = :filter_oid';
                $params['filter_oid'] = $orderIdFilter;
                if (!$isAdmin) {
                    $where .= ' AND (ps.payer_user_id = :cur_uid OR ps.payee_user_id = :cur_uid2 OR ps.created_by = :cur_uid3)';
                    $params['cur_uid'] = $userId;
                    $params['cur_uid2'] = $userId;
                    $params['cur_uid3'] = $userId;
                }
            }
        } else {
            $where = 'WHERE (
                (ps.payer_user_id = :uid1 OR ps.payee_user_id = :uid2 OR ps.created_by = :uid_cb OR rb.created_by = :uid_rbcb)
                OR (ps.related_entity_type IN (\'operating_expense\', \'operating_expenses\', \'expense\', \'expenses\') AND ps.related_entity_id IN (
                    SELECT sub_oe.related_entity_id FROM partner_settlements sub_oe 
                    WHERE (sub_oe.payer_user_id = :uid3 OR sub_oe.payee_user_id = :uid4 OR sub_oe.created_by = :uid_sub_cb) 
                      AND sub_oe.related_entity_type IN (\'operating_expense\', \'operating_expenses\', \'expense\', \'expenses\')
                      AND sub_oe.related_entity_id IS NOT NULL
                ))
                OR (ps.bill_id IS NOT NULL AND ps.bill_id IN (
                    SELECT sub_b.bill_id FROM partner_settlements sub_b 
                    WHERE (sub_b.payer_user_id = :uid5 OR sub_b.payee_user_id = :uid6 OR sub_b.created_by = :uid_sub_b_cb) 
                      AND sub_b.bill_id IS NOT NULL
                ))
                OR (ps.cycle_id IS NOT NULL AND ps.cycle_id IN (
                    SELECT sub_c.cycle_id FROM partner_settlements sub_c 
                    WHERE (sub_c.payer_user_id = :uid7 OR sub_c.payee_user_id = :uid8 OR sub_c.created_by = :uid_sub_c_cb) 
                      AND sub_c.cycle_id IS NOT NULL
                ))
                OR (ps.related_entity_type IN (\'orders\', \'order_stock\') AND ps.related_entity_id IN (
                    SELECT sub_o.related_entity_id FROM partner_settlements sub_o 
                    WHERE (sub_o.payer_user_id = :uid9 OR sub_o.payee_user_id = :uid10 OR sub_o.created_by = :uid_sub_o_cb) 
                      AND sub_o.related_entity_type IN (\'orders\', \'order_stock\')
                      AND sub_o.related_entity_id IS NOT NULL
                ))
                OR (ps.related_entity_type IN (\'orders\', \'order_stock\') AND ps.related_entity_id IN (
                    SELECT o.id FROM orders o 
                    WHERE (o.owner_user_id = :uid_ord_u OR o.created_by = :uid_ord_c)
                ))
                OR (ps.related_entity_type = \'purchases\' AND ps.related_entity_id IN (
                    SELECT pur_sub.id FROM purchases pur_sub 
                    WHERE (pur_sub.owner_user_id = :uid_pur_u OR pur_sub.created_by = :uid_pur_c OR pur_sub.transfer_to_user_id = :uid_pur_t)
                ))
            ) AND (oe.id IS NULL OR oe.deleted_at IS NULL) AND (rb.id IS NULL OR rb.deleted_at IS NULL) AND (rbc.id IS NULL OR (rbc.voided_at IS NULL AND rbc.bill_created = 1)) AND (pur.id IS NULL OR pur.deleted_at IS NULL) AND ((ps.related_entity_type NOT IN (\'orders\', \'order\') OR ps.related_entity_type IS NULL) OR (ord.id IS NOT NULL AND ord.deleted_at IS NULL AND (ps.settlement_type = \'order_return_clawback\' OR ord.status NOT IN (\'deleted\', \'returned\', \'cancelled\'))))';
            $params = [
                'uid1' => $userId, 'uid2' => $userId, 'uid_cb' => $userId, 'uid_rbcb' => $userId,
                'uid3' => $userId, 'uid4' => $userId, 'uid_sub_cb' => $userId,
                'uid5' => $userId, 'uid6' => $userId, 'uid_sub_b_cb' => $userId,
                'uid7' => $userId, 'uid8' => $userId, 'uid_sub_c_cb' => $userId,
                'uid9' => $userId, 'uid10' => $userId, 'uid_sub_o_cb' => $userId,
                'uid_ord_u' => $userId, 'uid_ord_c' => $userId,
                'uid_pur_u' => $userId, 'uid_pur_c' => $userId, 'uid_pur_t' => $userId
            ];
        }

        if ($status) {
            $where .= ' AND ps.status = :status';
            $params['status'] = $status;
        } else {
            $where .= " AND ps.status != 'cancelled'";
        }
        if ($type) {
            $where .= ' AND ps.settlement_type = :type';
            $params['type'] = $type;
        }
        if ($partnerId) {
            $where .= ' AND (ps.payer_user_id = :pid OR ps.payee_user_id = :pid2)';
            $params['pid'] = (int)$partnerId;
            $params['pid2'] = (int)$partnerId;
        }

        $stmt = $db->prepare("SELECT ps.*, 
            pu.username as payer_name, 
            py.username as payee_name,
            cu.username as creator_name,
            ru.username as releaser_name,
            su.username as settler_name,
            rb.uid as bill_uid,
            rb.name as bill_name,
            rb.amount as bill_total_amount,
            rb.default_cash_source as bill_default_cash_source,
            rb.agreement_status as bill_agreement_status,
            rb.is_locked_for_edit as bill_is_locked_for_edit,
            rb.is_archived as bill_is_archived,
            rb.last_edited_by_name as bill_last_edited_by_name,
            rbc.uid as cycle_uid,
            rbc.cycle_label as cycle_label,
            rbc.due_date as cycle_due_date,
            rbc.amount_expected as cycle_amount_expected,
            rbc.amount_paid as cycle_amount_paid,
            rbc.invoice_date as cycle_invoice_date,
            rbc.paid_at as cycle_paid_at,
            rbc.declared_paid_at as cycle_declared_paid_at,
            rbc.bill_created as cycle_bill_created,
            rbc.bill_created_at as cycle_bill_created_at,
            rbc.status as cycle_status,
            rbc.agreement_status as cycle_agreement_status,
            rbc.is_locked_for_edit as cycle_is_locked_for_edit,
            rbc.has_refusal as cycle_has_refusal,
            (SELECT COUNT(*) FROM recurring_bill_cycles rbc_sub 
             WHERE rbc_sub.bill_id = rbc.bill_id 
               AND (rbc_sub.due_date < rbc.due_date OR (rbc_sub.due_date = rbc.due_date AND rbc_sub.id <= rbc.id))
            ) AS cycle_number,
            oe.uid as expense_uid,
            oe.description as expense_title,
            oe.description as expense_description,
            oe.amount as expense_total_amount,
            oe.paid_from as expense_paid_from,
            oe.paid_from_type as expense_paid_from_type,
            oe.beneficiary as expense_beneficiary,
            oe.paid_at as expense_paid_at,
            oe.receipt_ref as expense_receipt_ref,
            oe.category as expense_category,
            oe.agreement_status as expense_agreement_status,
            oe.is_locked_for_edit as expense_is_locked_for_edit,
            oe.has_refusal as expense_has_refusal,
            oe.is_archived as expense_is_archived,
            ord.total as order_total_amount,
            ord.profit as order_total_profit,
            ord.status as order_status,
            ord.amount_paid as order_amount_paid,
            COALESCE(ord.uid, ps.related_entity_uid) as order_uid,
            ord.uid as order_uid_code,
            ordcust.name as order_customer_name,
            ordcust.phone as order_customer_phone,
            ord.service_name as order_service_name,
            ord.service_description as order_service_description,
            ord.custom_sale as order_custom_sale,
            ord.agreement_status as order_agreement_status,
            ord.has_refusal as order_has_refusal,
            ord.agreement_version as order_agreement_version,
            ord.is_locked_for_edit as order_is_locked_for_edit,
            pur.uid as purchase_uid_code,
            pur.id as purchase_batch_id,
            pur.name as purchase_product_name,
            pur.status as purchase_status,
            pursup.name as purchase_supplier_name
            FROM partner_settlements ps
            LEFT JOIN users pu ON ps.payer_user_id = pu.id
            LEFT JOIN users py ON ps.payee_user_id = py.id
            LEFT JOIN users cu ON ps.created_by = cu.id
            LEFT JOIN users ru ON ps.released_by = ru.id
            LEFT JOIN users su ON ps.settled_by = su.id
            LEFT JOIN recurring_bill_cycles rbc ON (ps.cycle_id = rbc.id OR (ps.related_entity_type = 'recurring_bill_cycle' AND ps.related_entity_id = rbc.id))
            LEFT JOIN recurring_bills rb ON (ps.bill_id = rb.id OR (ps.related_entity_type = 'recurring_bills' AND ps.related_entity_id = rb.id) OR (rbc.bill_id IS NOT NULL AND rbc.bill_id = rb.id))
            LEFT JOIN operating_expenses oe ON ((ps.related_entity_type IN ('operating_expense', 'operating_expenses', 'expense', 'expenses') AND ps.related_entity_id = oe.id))
            LEFT JOIN orders ord ON ((ps.related_entity_type = 'orders' OR ps.related_entity_type = 'order') AND ps.related_entity_id = ord.id)
            LEFT JOIN customers ordcust ON (ord.customer_id = ordcust.id)
            LEFT JOIN purchases pur ON (ps.related_entity_type = 'purchases' AND ps.related_entity_id = pur.id)
            LEFT JOIN suppliers pursup ON (pur.supplier_id = pursup.id)
            $where
            ORDER BY (ps.acceptance_status = 'pending') DESC, (ps.status = 'pending') DESC, ps.created_at DESC
            LIMIT 500");
        $stmt->execute($params);
        $settlements = $stmt->fetchAll();

        // ── In-Memory Sibling Mapping for Decoupled Waterfall Pairs ──
        $siblingMap = [];
        foreach ($settlements as $st) {
            $stId = (int)$st['id'];
            $linkedId = !empty($st['linked_settlement_id']) ? (int)$st['linked_settlement_id'] : 0;
            if ($linkedId > 0) {
                $siblingMap[$stId] = $linkedId;
                $siblingMap[$linkedId] = $stId;
            }
        }

        // ── Dynamic backward-compatibility hydration for historical order settlements & Privacy Redaction ──
        $filteredSettlements = [];
        foreach ($settlements as &$s) {
            // Privacy Guard: Lead service owner custodial statements contain private workshop margins.
            // Do not leak internal profit margins to collaborator technicians or external parts providers.
            if (($s['settlement_type'] ?? '') === 'service_owner_statement' && !$isAdmin && $userId !== (int)($s['payee_user_id'] ?? 0) && $userId !== (int)($s['payer_user_id'] ?? 0)) {
                continue;
            }
            self::hydrateOrderStockDetailsIfMissing($s, $db, $siblingMap);
            $filteredSettlements[] = $s;
        }
        unset($s);

        Response::json(['ok' => true, 'settlements' => $filteredSettlements]);
    }

    /**
     * Backward-compatibility self-healing hydration for historical order settlements.
     */
    public static function hydrateOrderStockDetailsIfMissing(array &$s, PDO $db, array &$siblingMap = []): bool
    {
        if ($s['related_entity_type'] !== 'orders' || empty($s['related_entity_id'])) {
            return false;
        }

        $details = !empty($s['details']) ? (is_array($s['details']) ? $s['details'] : json_decode($s['details'], true)) : [];
        if (!is_array($details)) {
            $details = [];
        }
        if ($s['settlement_type'] === 'order_return_clawback') {
            $updated = false;
            if (!empty($details['returned_items']) && is_array($details['returned_items'])) {
                foreach ($details['returned_items'] as &$retIt) {
                    if (!empty($retIt['return_supplier_id']) && empty($retIt['return_supplier_name'])) {
                        $supStmt = $db->prepare('SELECT name, is_walkby FROM suppliers WHERE id = :sid');
                        $supStmt->execute(['sid' => (int)$retIt['return_supplier_id']]);
                        if ($supRow = $supStmt->fetch(PDO::FETCH_ASSOC)) {
                            $retIt['return_supplier_name'] = $supRow['name'];
                            $retIt['return_supplier_is_walkby'] = !empty($supRow['is_walkby']);
                            $updated = true;
                        }
                    }
                }
                unset($retIt);
            }

            // Self-heal empty returned_items or missing breakdown for custom services or legacy clawbacks
            if (empty($details['returned_items']) && !empty($s['related_entity_id'])) {
                $oid = (int)$s['related_entity_id'];
                $oStmt = $db->prepare('SELECT id, uid, service_name, total, products_cost, manual_cost, profit, custom_sale, service_owners_data, manual_costs_data FROM orders WHERE id = :oid');
                $oStmt->execute(['oid' => $oid]);
                $ord = $oStmt->fetch(PDO::FETCH_ASSOC);

                if ($ord) {
                    $sUid = $s['payer_user_id'];
                    $psStmt = $db->prepare('SELECT settlement_type, amount, details FROM partner_settlements WHERE related_entity_type = "orders" AND related_entity_id = :oid AND settlement_type != "order_return_clawback" AND payee_user_id = :payee');
                    $psStmt->execute(['oid' => $oid, 'payee' => $sUid]);
                    $origSettlements = $psStmt->fetchAll(PDO::FETCH_ASSOC);

                    $synthItems = [];
                    $sumCost = '0';
                    $sumProfit = '0';

                    foreach ($origSettlements as $origS) {
                        $amt = (string)($origS['amount'] ?? '0');
                        $type = $origS['settlement_type'];
                        $detOrig = !empty($origS['details']) ? (is_array($origS['details']) ? $origS['details'] : json_decode($origS['details'], true)) : [];
                        if (!is_array($detOrig)) $detOrig = [];

                        if (in_array($type, ['parts_cost_recovery', 'manual_cost_recovery'], true)) {
                            $sumCost = Decimal::add($sumCost, $amt);
                            $name = $detOrig['description'] ?? ($detOrig['product_name'] ?? 'Cost Outlay');
                            $synthItems[] = [
                                'item_id' => 0,
                                'product_id' => 0,
                                'name' => $name,
                                'service_name' => $name,
                                'product_name' => $name,
                                'quantity' => '1',
                                'cost' => $amt,
                                'price' => $amt,
                                'line_cost_refund' => $amt,
                                'line_profit_refund' => '0',
                                'line_total_clawback' => $amt,
                                'return_destination' => 'expense',
                                'is_manual_outlay' => true
                            ];
                        } else {
                            $sumProfit = Decimal::add($sumProfit, $amt);
                            $name = $detOrig['service_name'] ?? ($detOrig['description'] ?? ($ord['service_name'] ?? 'Service Labor Share'));
                            $synthItems[] = [
                                'item_id' => 0,
                                'product_id' => 0,
                                'name' => $name,
                                'service_name' => $name,
                                'product_name' => $name,
                                'quantity' => '1',
                                'cost' => '0',
                                'price' => $amt,
                                'line_cost_refund' => '0',
                                'line_profit_refund' => $amt,
                                'line_total_clawback' => $amt,
                                'return_destination' => 'service',
                                'is_service' => true
                            ];
                        }
                    }

                    if (empty($synthItems)) {
                        // Fallback to order service name or description
                        $srvName = $ord['service_name'] ?: ($details['reason'] ?? 'Custom Service');
                        $clawAmt = (string)($s['amount'] ?? '0');
                        $sumProfit = $clawAmt;
                        $synthItems[] = [
                            'item_id' => 0,
                            'product_id' => 0,
                            'name' => $srvName,
                            'service_name' => $srvName,
                            'product_name' => $srvName,
                            'quantity' => '1',
                            'cost' => '0',
                            'price' => $clawAmt,
                            'line_cost_refund' => '0',
                            'line_profit_refund' => $clawAmt,
                            'line_total_clawback' => $clawAmt,
                            'return_destination' => 'service',
                            'is_service' => true
                        ];
                    }

                    $details['returned_items'] = $synthItems;
                    $details['wholesale_cost_refund'] = $sumCost;
                    $details['profit_share_refund'] = $sumProfit;
                    $updated = true;
                }
            }

            if ($updated) {
                $s['details'] = $details;
                $db->prepare('UPDATE partner_settlements SET details = :det WHERE id = :id')
                   ->execute(['det' => json_encode($details, JSON_UNESCAPED_UNICODE), 'id' => $s['id']]);
            }

            return $updated;
        }

        $isPartsSettlement = ($s['settlement_type'] === 'parts_cost_recovery' || $s['settlement_type'] === 'parts_profit_share' || ($details['layer'] ?? '') === 'parts');

        $needsHydration = $isPartsSettlement && (
            empty($details['product_uid']) ||
            empty($details['unit_price']) ||
            empty($details['unit_cost']) ||
            empty($details['total_revenue']) ||
            empty($details['expected_net_profit']) ||
            !isset($details['owner_profit_share']) ||
            !isset($details['seller_profit_share']) ||
            !isset($details['profit_split_type']) ||
            !isset($details['product_owner_share_pct']) ||
            !isset($details['owner_total_payout']) ||
            empty($details['sibling_settlement_id'])
        );

        if (!$needsHydration) {
            return false;
        }

        $orderId = (int)$s['related_entity_id'];
        $orderItemId = (int)($details['order_item_id'] ?? 0);
        $prodId = (int)($details['product_id'] ?? ($details['item_id'] ?? 0));

        $itemQuery = null;
        if ($orderItemId > 0) {
            $itemQuery = $db->prepare("SELECT oi.id AS oi_id, oi.price, oi.cost, oi.quantity, oi.profit_split_type, oi.product_owner_share_pct, oi.product_owner_profit, oi.service_owner_profit, p.id AS p_id, p.uid AS p_uid, COALESCE(p.name, oi.name) AS p_name 
                                      FROM order_items oi 
                                      LEFT JOIN products p ON oi.product_id = p.id 
                                      WHERE oi.order_id = :oid AND oi.id = :oiid LIMIT 1");
            $itemQuery->execute(['oid' => $orderId, 'oiid' => $orderItemId]);
        }

        if (!$itemQuery || !$itemQuery->rowCount()) {
            if ($prodId > 0) {
                $itemQuery = $db->prepare("SELECT oi.id AS oi_id, oi.price, oi.cost, oi.quantity, oi.profit_split_type, oi.product_owner_share_pct, oi.product_owner_profit, oi.service_owner_profit, p.id AS p_id, p.uid AS p_uid, COALESCE(p.name, oi.name) AS p_name 
                                          FROM order_items oi 
                                          LEFT JOIN products p ON oi.product_id = p.id 
                                          WHERE oi.order_id = :oid AND (oi.product_id = :pid OR oi.id = :pid2) LIMIT 1");
                $itemQuery->execute(['oid' => $orderId, 'pid' => $prodId, 'pid2' => $prodId]);
            }
        }

        if (!$itemQuery || !$itemQuery->rowCount()) {
            $itemQuery = $db->prepare("SELECT oi.id AS oi_id, oi.price, oi.cost, oi.quantity, oi.profit_split_type, oi.product_owner_share_pct, oi.product_owner_profit, oi.service_owner_profit, p.id AS p_id, p.uid AS p_uid, COALESCE(p.name, oi.name) AS p_name 
                                      FROM order_items oi 
                                      LEFT JOIN products p ON oi.product_id = p.id 
                                      WHERE oi.order_id = :oid LIMIT 1");
            $itemQuery->execute(['oid' => $orderId]);
        }

        if ($itemQuery) {
            $itemRow = $itemQuery->fetch();
            if ($itemRow) {
                $details['product_id'] = (int)($itemRow['p_id'] ?? ($details['product_id'] ?? 0));
                $details['product_uid'] = $itemRow['p_uid'] ?? ($details['product_uid'] ?? ($details['product_id'] ? ('PRD-' . $details['product_id']) : null));
                $details['product_name'] = $itemRow['p_name'] ?? ($details['product_name'] ?? ($details['item_name'] ?? 'Product'));
                $details['item_name'] = $details['product_name'];
                $details['order_item_id'] = (int)$itemRow['oi_id'];

                if (empty($details['unit_cost'])) {
                    $details['unit_cost'] = (string)$itemRow['cost'];
                }
                if (empty($details['unit_price'])) {
                    $details['unit_price'] = (string)$itemRow['price'];
                }
                $qty = (string)($details['quantity'] ?? $itemRow['quantity']);
                $details['quantity'] = $qty;
                $details['display_quantity'] = rtrim(rtrim($qty, '0'), '.') ?: '0';

                $uCost = (string)$details['unit_cost'];
                $uPrice = (string)$details['unit_price'];
                $totalCost = Decimal::mul($uCost, $qty);
                $totalRevenue = Decimal::mul($uPrice, $qty);
                $expectedNetProfit = Decimal::sub($totalRevenue, $totalCost);

                $details['total_cost'] = $totalCost;
                $details['total_revenue'] = $totalRevenue;
                $details['expected_net_profit'] = $expectedNetProfit;

                $splitType = (string)($itemRow['profit_split_type'] ?? ($details['profit_split_type'] ?? ($details['split_type'] ?? 'none')));
                $details['profit_split_type'] = $splitType;
                $details['split_type'] = $splitType;

                $ownerSharePct = (string)($itemRow['product_owner_share_pct'] ?? ($details['product_owner_share_pct'] ?? '0'));
                $details['product_owner_share_pct'] = $ownerSharePct;

                $ownerProfit = (string)($itemRow['product_owner_profit'] ?? ($details['owner_profit_share'] ?? '0'));
                $details['owner_profit_share'] = $ownerProfit;

                $serviceProfit = (string)($itemRow['service_owner_profit'] ?? ($details['seller_profit_share'] ?? ($details['service_profit_share'] ?? '0')));
                $details['seller_profit_share'] = $serviceProfit;
                $details['service_profit_share'] = $serviceProfit;

                $details['owner_total_payout'] = Decimal::add($totalCost, $ownerProfit);
                $details['seller_total_retention'] = $serviceProfit;

                // Sibling ticket resolution
                $siblingId = $siblingMap[(int)$s['id']] ?? 0;
                if (!$siblingId && !empty($s['linked_settlement_id'])) {
                    $siblingId = (int)$s['linked_settlement_id'];
                }
                if (!$siblingId) {
                    $sibStmt = $db->prepare("SELECT id FROM partner_settlements WHERE linked_settlement_id = :id AND status != 'cancelled' LIMIT 1");
                    $sibStmt->execute(['id' => (int)$s['id']]);
                    $found = $sibStmt->fetchColumn();
                    if ($found) {
                        $siblingId = (int)$found;
                        $siblingMap[(int)$s['id']] = $siblingId;
                        $siblingMap[$siblingId] = (int)$s['id'];
                    }
                }
                if ($siblingId > 0) {
                    $details['sibling_settlement_id'] = $siblingId;
                    if ($s['settlement_type'] === 'parts_profit_share' || ($details['role'] ?? '') === 'profit') {
                        $details['linked_cost_settlement_id'] = $siblingId;
                    } else {
                        $details['linked_profit_settlement_id'] = $siblingId;
                    }
                }

                $newJson = json_encode($details);
                if ($newJson !== ($s['details'] ?? '')) {
                    $s['details'] = $newJson;
                    try {
                        $upStmt = $db->prepare('UPDATE partner_settlements SET details = :d WHERE id = :id');
                        $upStmt->execute(['d' => $newJson, 'id' => (int)$s['id']]);
                    } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
                }
                return true;
            }
        }
        return false;
    }

    /**
     * Aggregated summary: total receivables and payables per partner.
     */
    public function summary(): void
    {
        $db = Database::getConnection();
        $this->ensureTable($db);

        $userId = (int)($_SESSION['user_id'] ?? 0);
        if ($userId <= 0) {
            Response::json(['error' => 'Unauthorized: Please log in.'], 401);
            return;
        }

        // Total I owe (I am the payer for my own share - count remaining unsettled liability, excluding delegated supplier purchases)
        $stmt2 = $db->prepare('SELECT ps.payee_user_id, SUM(GREATEST(0, ps.amount - ps.settled_amount)) as total_amount, COUNT(*) as count 
                               FROM partner_settlements ps
                               LEFT JOIN operating_expenses oe ON (ps.related_entity_type IN (\'operating_expense\', \'operating_expenses\', \'expense\', \'expenses\') AND ps.related_entity_id = oe.id)
                               LEFT JOIN recurring_bills rb ON (ps.bill_id = rb.id)
                               LEFT JOIN purchases pur ON (ps.related_entity_type = \'purchases\' AND ps.related_entity_id = pur.id)
                               LEFT JOIN orders ord ON ((ps.related_entity_type = \'orders\' OR ps.related_entity_type = \'order\') AND ps.related_entity_id = ord.id)
                               WHERE ps.payer_user_id = :uid AND ps.status = :s 
                                 AND NOT (ps.related_entity_type = \'purchases\' AND (ps.details LIKE \'%is_proxy_purchase%\' OR ps.details LIKE \'%is_delegated_purchase%\' OR ps.settlement_type = \'proxy_purchase\'))
                                 AND (oe.id IS NULL OR oe.deleted_at IS NULL)
                                 AND (rb.id IS NULL OR rb.deleted_at IS NULL)
                                 AND (pur.id IS NULL OR pur.deleted_at IS NULL)
                                 AND ((ps.related_entity_type NOT IN (\'orders\', \'order\') OR ps.related_entity_type IS NULL) OR (ord.id IS NOT NULL AND ord.deleted_at IS NULL AND ord.status NOT IN (\'deleted\', \'returned\', \'cancelled\')))
                               GROUP BY ps.payee_user_id');
        $stmt2->execute(['uid' => $userId, 's' => 'pending']);
        $payables = $stmt2->fetchAll();

        // Total Co-Partners\' pending split shares for shared expenses/bills (excluding delegated purchases where creator receives 0)
        $stmt = $db->prepare('SELECT ps.payer_user_id, SUM(GREATEST(0, ps.amount - ps.settled_amount)) as total_amount, COUNT(*) as count 
                              FROM partner_settlements ps
                              LEFT JOIN operating_expenses oe ON (ps.related_entity_type IN (\'operating_expense\', \'operating_expenses\', \'expense\', \'expenses\') AND ps.related_entity_id = oe.id)
                              LEFT JOIN recurring_bills rb ON (ps.bill_id = rb.id)
                              LEFT JOIN purchases pur ON (ps.related_entity_type = \'purchases\' AND ps.related_entity_id = pur.id)
                              LEFT JOIN orders ord ON ((ps.related_entity_type = \'orders\' OR ps.related_entity_type = \'order\') AND ps.related_entity_id = ord.id)
                              WHERE ps.payer_user_id != :uid AND ps.status = :s 
                                AND NOT (ps.related_entity_type = \'purchases\' AND (ps.details LIKE \'%is_proxy_purchase%\' OR ps.details LIKE \'%is_delegated_purchase%\' OR ps.settlement_type = \'proxy_purchase\'))
                                AND (
                                    ps.payee_user_id = :uid2 
                                    OR (ps.related_entity_type IN (\'operating_expense\', \'operating_expenses\', \'expense\', \'expenses\') AND oe.paid_by_user_id = :uid3)
                                    OR (
                                        (ps.cycle_id > 0 OR ps.bill_id > 0)
                                        AND EXISTS (
                                            SELECT 1 FROM recurring_bill_cycle_payments rbcp 
                                            WHERE (rbcp.cycle_id = ps.cycle_id OR (ps.cycle_id IS NULL AND rbcp.bill_id = ps.bill_id))
                                              AND rbcp.user_id = :uid4 
                                              AND rbcp.paid_from = \'hand\' 
                                              AND rbcp.voided_at IS NULL
                                        )
                                    )
                                )
                                AND (oe.id IS NULL OR oe.deleted_at IS NULL)
                                AND (rb.id IS NULL OR rb.deleted_at IS NULL)
                                AND (pur.id IS NULL OR pur.deleted_at IS NULL)
                                AND ((ps.related_entity_type NOT IN (\'orders\', \'order\') OR ps.related_entity_type IS NULL) OR (ord.id IS NOT NULL AND ord.deleted_at IS NULL AND ord.status NOT IN (\'deleted\', \'returned\', \'cancelled\')))
                              GROUP BY ps.payer_user_id');
        $stmt->execute([
            'uid'  => $userId, 
            's'    => 'pending',
            'uid2' => $userId,
            'uid3' => $userId,
            'uid4' => $userId
        ]);
        $receivables = $stmt->fetchAll();

        // Resolve usernames
        $resolve = function($uid) use ($db) {
            $s = $db->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
            $s->execute(['id' => $uid]);
            $r = $s->fetch();
            return $r ? $r['username'] : "User #$uid";
        };

        $totalReceivable = '0';
        $receivablesByPartner = [];
        foreach ($receivables as $r) {
            $totalReceivable = Decimal::add($totalReceivable, (string)$r['total_amount']);
            $receivablesByPartner[] = [
                'partner_id' => (int)$r['payer_user_id'],
                'partner_name' => $resolve($r['payer_user_id']),
                'amount' => (string)$r['total_amount'],
                'count' => (int)$r['count'],
            ];
        }

        $totalPayable = '0';
        $payablesByPartner = [];
        foreach ($payables as $p) {
            $totalPayable = Decimal::add($totalPayable, (string)$p['total_amount']);
            $payablesByPartner[] = [
                'partner_id' => (int)$p['payee_user_id'],
                'partner_name' => $resolve($p['payee_user_id']),
                'amount' => (string)$p['total_amount'],
                'count' => (int)$p['count'],
            ];
        }

        $netBalance = Decimal::sub($totalReceivable, $totalPayable);

        Response::json([
            'ok' => true,
            'total_receivable' => $totalReceivable,
            'total_payable' => $totalPayable,
            'net_balance' => $netBalance,
            'receivables' => $receivablesByPartner,
            'payables' => $payablesByPartner,
        ]);
    }

    /**
     * Settle a single settlement. Records cash vault transfer.
     */
    public function settle(string $id, array $data = []): void
    {
        $db = Database::getConnection();
        $this->ensureTable($db);
        $db->beginTransaction();
        try {
            $stmt = $db->prepare('SELECT * FROM partner_settlements WHERE id = :id FOR UPDATE');
            $stmt->execute(['id' => $id]);
            $settlement = $stmt->fetch();

            if (!$settlement) {
                $db->rollBack();
                Response::json(['error' => 'Settlement not found'], 404);
                return;
            }

        $isOrder = (($settlement['related_entity_type'] ?? '') === 'orders' || ($settlement['related_entity_type'] ?? '') === 'order');

        if (!$isOrder && $settlement['status'] !== 'pending') {
            $db->rollBack();
            Response::json(['error' => 'Only pending settlements can be settled'], 400);
            return;
        }

        $sessionUser = (int)($_SESSION['user_id'] ?? 0);

        // Payment demand gate for custom services: manual cost payers must pay before claiming
        if ($sessionUser === (int)$settlement['payee_user_id'] && ($settlement['related_entity_type'] ?? '') === 'orders' && !empty($settlement['related_entity_id'])) {
            $ordCheck = $db->prepare('SELECT custom_sale FROM orders WHERE id = :oid');
            $ordCheck->execute(['oid' => $settlement['related_entity_id']]);
            $ordRow = $ordCheck->fetch();
            if ($ordRow && !empty($ordRow['custom_sale'])) {
                $unpaidDemands = $db->prepare("
                    SELECT COUNT(*) as cnt FROM partner_settlements 
                    WHERE related_entity_type = 'orders' 
                      AND related_entity_id = :oid 
                      AND payee_user_id = :uid 
                      AND payment_demand_status = 'awaiting_payment' 
                      AND status != 'cancelled'
                ");
                $unpaidDemands->execute(['oid' => $settlement['related_entity_id'], 'uid' => $sessionUser]);
                $cnt = (int)$unpaidDemands->fetch()['cnt'];
                if ($cnt > 0) {
                    $db->rollBack();
                    Response::json([
                        'error' => 'You must pay your outstanding manual costs before claiming. You have ' . $cnt . ' unpaid payment demand(s).',
                        'unpaid_demands' => $cnt,
                        'payment_gate' => true
                    ], 422);
                    return;
                }
            }
        }


        $bId = (int)($settlement['bill_id'] ?? 0);
        $cId = (int)($settlement['cycle_id'] ?? 0);
        $oeId = 0;
        if (!$bId && ($settlement['related_entity_type'] ?? '') === 'recurring_bills') {
            $bId = (int)$settlement['related_entity_id'];
        }
        if (!$cId && ($settlement['related_entity_type'] ?? '') === 'recurring_bill_cycle') {
            $cId = (int)$settlement['related_entity_id'];
        }
        if (($settlement['related_entity_type'] ?? '') === 'operating_expense' || $settlement['settlement_type'] === 'expense_split') {
            $oeId = (int)($settlement['related_entity_id'] ?? 0);
        }

        // Parent deleted / voided guard
        if ($oeId > 0) {
            $oeCheck = $db->query("SELECT deleted_at FROM operating_expenses WHERE id = {$oeId}")->fetch();
            if ($oeCheck && $oeCheck['deleted_at'] !== null) {
                $db->rollBack();
                Response::json(['error' => 'Cannot settle a share for a deleted operating expense.'], 400);
                return;
            }
        }
        if ($cId > 0) {
            $cCheck = $db->query("SELECT voided_at, bill_created FROM recurring_bill_cycles WHERE id = {$cId}")->fetch();
            if ($cCheck && ($cCheck['voided_at'] !== null || (int)$cCheck['bill_created'] === 0)) {
                $db->rollBack();
                Response::json(['error' => 'Cannot settle a share for a voided or reset bill cycle.'], 400);
                return;
            }
        }
        if ($bId > 0) {
            $bCheck = $db->query("SELECT deleted_at FROM recurring_bills WHERE id = {$bId}")->fetch();
            if ($bCheck && $bCheck['deleted_at'] !== null) {
                $db->rollBack();
                Response::json(['error' => 'Cannot settle a share for a deleted bill.'], 400);
                return;
            }
        }

        if (($settlement['related_entity_type'] ?? '') === 'orders' && !empty($settlement['related_entity_id'])) {
            $oId = (int)$settlement['related_entity_id'];
            $oCheck = $db->query("SELECT status, deleted_at FROM orders WHERE id = {$oId}")->fetch();
            if ($oCheck && ($oCheck['status'] === 'deleted' || $oCheck['deleted_at'] !== null)) {
                $db->rollBack();
                Response::json(['error' => 'The order linked to this settlement has been deleted.', 'order_deleted' => true], 400);
                return;
            }
        }

        // ─── REFUSAL FREEZE LOCK GUARD ───────────────────────────────────────
        if (in_array($settlement['settlement_type'], ['bill_split', 'expense_split'], true)
            && (!empty($settlement['bill_id']) || !empty($settlement['cycle_id']) || !empty($settlement['related_entity_id']))) {

            // Check if ANY sibling settlement for this bill/cycle/expense has refusal or is disputed
            $checkLock = $db->prepare("
                SELECT ps.id, ps.status, u.username AS refuser_name, COALESCE(ps.refusal_reason, ps.dispute_reason) AS refusal_reason
                FROM partner_settlements ps
                LEFT JOIN users u ON COALESCE(ps.refused_by, ps.disputed_by, ps.payer_user_id) = u.id
                WHERE ((:bid > 0 AND (ps.bill_id = :bid1 OR (ps.related_entity_type = 'recurring_bills' AND ps.related_entity_id = :bid2)))
                    OR (:cid > 0 AND (ps.cycle_id = :cid1 OR (ps.related_entity_type = 'recurring_bill_cycle' AND ps.related_entity_id = :cid2)))
                    OR (:oeid > 0 AND (ps.related_entity_type = 'operating_expense' AND ps.related_entity_id = :oeid1)))
                  AND ps.status IN ('refused', 'disputed')
                LIMIT 1
            ");
            $checkLock->execute([
                'bid'   => $bId, 'bid1' => $bId, 'bid2' => $bId,
                'cid'   => $cId, 'cid1' => $cId, 'cid2' => $cId,
                'oeid'  => $oeId, 'oeid1' => $oeId
            ]);
            $refusalLock = $checkLock->fetch();

            if ($refusalLock) {
                $db->rollBack();
                $refuserName = $refusalLock['refuser_name'] ?: 'a partner';
                $refuseReason = $refusalLock['refusal_reason'] ?: 'Contested calculation';
                $entityKind = ($oeId > 0) ? 'Expense' : 'Bill';
                Response::json([
                    'error' => "{$entityKind} has been refused by {$refuserName} and is pending update. Cannot settle until a partner updates the {$entityKind}.",
                    'refused_by'     => $refuserName,
                    'refusal_reason' => $refuseReason,
                    'blocked_by_settlement_id' => (int)$refusalLock['id']
                ], 422);
                return;
            }
        }
        // ─────────────────────────────────────────────────────────────────────

        // ─── 2-PHASE AGREEMENT GUARD ─────────────────────────────────────────
        // In Phase 1 (Agreement Phase), payments are strictly disallowed until 100% of partners accept!
        if (in_array($settlement['settlement_type'], ['bill_split', 'expense_split'], true)) {
            if (($settlement['acceptance_status'] ?? 'pending') !== 'accepted') {
                $db->rollBack();
                Response::json([
                    'error' => 'This settlement is in the Agreement Phase. You must accept your share before making a payment.',
                    'phase' => 'pending_acceptance'
                ], 422);
                return;
            }

            $bId = (int)($settlement['bill_id'] ?? 0);
            $cId = (int)($settlement['cycle_id'] ?? 0);
            $oeId = 0;
            if (!$bId && ($settlement['related_entity_type'] ?? '') === 'recurring_bills') $bId = (int)$settlement['related_entity_id'];
            if (!$cId && ($settlement['related_entity_type'] ?? '') === 'recurring_bill_cycle') $cId = (int)$settlement['related_entity_id'];
            if (($settlement['related_entity_type'] ?? '') === 'operating_expense' || $settlement['settlement_type'] === 'expense_split') {
                $oeId = (int)($settlement['related_entity_id'] ?? 0);
            }

            if ($cId > 0 || $bId > 0 || $oeId > 0) {
                if ($oeId > 0) {
                    $unacceptedStmt = $db->prepare("
                        SELECT COUNT(*) FROM partner_settlements
                        WHERE (related_entity_type = 'operating_expense' AND related_entity_id = :oeid)
                          AND status != 'cancelled'
                          AND (acceptance_status != 'accepted' OR status = 'refused')
                    ");
                    $unacceptedStmt->execute(['oeid' => $oeId]);
                } elseif ($cId > 0) {
                    $unacceptedStmt = $db->prepare("
                        SELECT COUNT(*) FROM partner_settlements
                        WHERE (cycle_id = :cid OR (related_entity_type = 'recurring_bill_cycle' AND related_entity_id = :cid2))
                          AND status != 'cancelled'
                          AND (acceptance_status != 'accepted' OR status = 'refused')
                    ");
                    $unacceptedStmt->execute(['cid' => $cId, 'cid2' => $cId]);
                } else {
                    $unacceptedStmt = $db->prepare("
                        SELECT COUNT(*) FROM partner_settlements
                        WHERE (bill_id = :bid OR (related_entity_type = 'recurring_bills' AND related_entity_id = :bid2))
                          AND status != 'cancelled'
                          AND (acceptance_status != 'accepted' OR status = 'refused')
                    ");
                    $unacceptedStmt->execute(['bid' => $bId, 'bid2' => $bId]);
                }
                $unacceptedCount = (int)$unacceptedStmt->fetchColumn();

                if ($unacceptedCount > 0) {
                    $db->rollBack();
                    $entityKind = ($oeId > 0) ? 'expense' : 'bill';
                    Response::json([
                        'error' => "This {$entityKind} is in the Agreement Phase. All partners must accept their shares before payments are unlocked.",
                        'phase' => 'pending_acceptance',
                        'unaccepted_count' => $unacceptedCount
                    ], 422);
                    return;
                }
            }
        // Purchases Domain 2-Phase Guard (Rule 25 Isolated): Strictly require Phase 1 acceptance before settling
        } elseif (($settlement['related_entity_type'] ?? '') === 'purchases' || in_array($settlement['settlement_type'], ['delegated_purchase', 'stock_transfer'], true)) {
            if (($settlement['acceptance_status'] ?? 'pending_acceptance') !== 'accepted') {
                $db->rollBack();
                Response::json([
                    'error' => 'Phase 1 agreement required: You must accept ownership before settling payment.',
                    'phase' => 'pending_acceptance'
                ], 422);
                return;
            }
        }
        // ─────────────────────────────────────────────────────────────────────

        $sessionUser = (int)($_SESSION['user_id'] ?? 0);
        $isAdmin = !empty($_SESSION['is_admin']) || (isset($_SESSION['role']) && $_SESSION['role'] === 'admin');

        $isOrder = (($settlement['related_entity_type'] ?? '') === 'orders' || ($settlement['related_entity_type'] ?? '') === 'order');
        $isStockTransfer = ($settlement['settlement_type'] === 'stock_transfer' || ($settlement['related_entity_type'] ?? '') === 'purchases');

        if ($isOrder) {
            // Strictly ONLY the payee (stock owner / creditor) can claim funds for consignment orders.
            // The seller (payer_user_id) cannot claim their own payment back, nor can an administrator bypass this.
            if ($sessionUser === 0 || $sessionUser !== (int)$settlement['payee_user_id']) {
                $db->rollBack();
                SystemLog::write('partner_settlements', 'security_violation', (int)$id, $settlement['description'] ?? "Settlement #$id", json_encode([
                    'violation'    => 'unauthorized_order_claim_attempt',
                    'settlement_id'=> (int)$id,
                    'payer_id'     => (int)$settlement['payer_user_id'],
                    'payee_id'     => (int)$settlement['payee_user_id'],
                    'attempted_by' => $sessionUser
                ], JSON_UNESCAPED_UNICODE), $sessionUser);
                Response::json(['ok' => false, 'error' => 'Forbidden: Only the stock owner (payee) can claim these funds.'], 403);
                return;
            }

            // Consensus Gate: verify linked order has all terms accepted before any claim can be settled
            if (!empty($settlement['related_entity_id'])) {
                $orderCheck = $db->prepare("SELECT status, deleted_at, agreement_status, has_refusal FROM orders WHERE id = :oid");
                $orderCheck->execute(['oid' => $settlement['related_entity_id']]);
                $ord = $orderCheck->fetch();
                if ($ord && (in_array($ord['status'], ['deleted', 'returned', 'return_pending'], true) || $ord['deleted_at'] !== null)) {
                    $db->rollBack();
                    $statusMsg = ($ord['status'] === 'return_pending') ? 'A return is currently pending confirmation for this order.' : "The order linked to this settlement is {$ord['status']}.";
                    Response::json(['error' => "Cannot claim funds: {$statusMsg}", 'order_status' => $ord['status']], 400);
                    return;
                }
                if ($ord && ($ord['agreement_status'] ?? '') !== 'all_accepted') {
                    $db->rollBack();
                    Response::json([
                        'ok' => false,
                        'error' => 'Cannot claim payout: The order agreement is still pending acceptance or has been refused.',
                        'agreement_status' => $ord['agreement_status'] ?? 'pending'
                    ], 422);
                    return;
                }
            }
        } elseif ($isStockTransfer) {
            // Strictly ONLY the designated recipient (payer_user_id) can accept and settle a stock transfer.
            // The sender (payee_user_id) cannot accept on the recipient's behalf, nor can an administrator bypass this asset acquisition consent.
            if ($sessionUser === 0 || $sessionUser !== (int)$settlement['payer_user_id']) {
                $db->rollBack();
                SystemLog::write('partner_settlements', 'security_violation', (int)$id, $settlement['description'] ?? "Settlement #$id", json_encode([
                    'violation'    => 'unauthorized_stock_transfer_settle',
                    'settlement_id'=> (int)$id,
                    'payer_id'     => (int)$settlement['payer_user_id'],
                    'payee_id'     => (int)$settlement['payee_user_id'],
                    'attempted_by' => $sessionUser
                ], JSON_UNESCAPED_UNICODE), $sessionUser);
                Response::json(['ok' => false, 'error' => 'Forbidden: Only the designated recipient can accept and settle this stock transfer.'], 403);
                return;
            }
        } else {
            // Authorization Guard: Only the assigned debtor (paying), creditor (receiving), or administrator can settle this share
            if ($sessionUser === 0 || (!$isAdmin && $sessionUser !== (int)$settlement['payee_user_id'] && $sessionUser !== (int)$settlement['payer_user_id'])) {
                $db->rollBack();
                SystemLog::write('partner_settlements', 'security_violation', (int)$id, $settlement['description'] ?? "Settlement #$id", json_encode([
                    'violation'    => 'unauthorized_settlement_attempt',
                    'settlement_id'=> (int)$id,
                    'payer_id'     => (int)$settlement['payer_user_id'],
                    'payee_id'     => (int)$settlement['payee_user_id'],
                    'attempted_by' => $sessionUser
                ], JSON_UNESCAPED_UNICODE), $sessionUser);
                Response::json(['ok' => false, 'error' => 'Forbidden: Only the assigned debtor or creditor can settle this share.'], 403);
                return;
            }
        }

        $totalLiability = (string)$settlement['amount'];
        $alreadySettled = (string)($settlement['settled_amount'] ?? '0');

        $orderSiblingSettlements = [];
        if ($isOrder) {
            $orderId = (int)$settlement['related_entity_id'];
            $payeeId = (int)$settlement['payee_user_id'];
            $sibStmt = $db->prepare("
                SELECT * FROM partner_settlements
                WHERE (related_entity_type = 'orders' OR related_entity_type = 'order')
                  AND related_entity_id = :order_id
                  AND payee_user_id = :payee_id
                  AND status != 'cancelled'
                  AND settlement_type != 'order_return_clawback'
                  AND settlement_type != 'service_owner_statement'
                ORDER BY waterfall_priority ASC, id ASC
                FOR UPDATE
            ");
            $sibStmt->execute(['order_id' => $orderId, 'payee_id' => $payeeId]);
            $orderSiblingSettlements = $sibStmt->fetchAll(PDO::FETCH_ASSOC);

            // Compute total cumulative claimable available across all sibling tranches
            $totalCumulativeAvailable = '0';
            $totalOrderLiability = '0';
            $totalOrderSettled = '0';
            foreach ($orderSiblingSettlements as $sib) {
                $sibTotal = (string)$sib['amount'];
                $totalOrderLiability = Decimal::add($totalOrderLiability, $sibTotal);
                $sibRel = (string)($sib['released_amount'] ?? '0');
                if (($sib['release_status'] ?? '') === 'released' && Decimal::comp($sibRel, '0') <= 0) {
                    $sibRel = $sibTotal;
                }
                $sibSettled = (string)($sib['settled_amount'] ?? '0');
                $totalOrderSettled = Decimal::add($totalOrderSettled, $sibSettled);
                $sibAvail = Decimal::comp($sibRel, $sibSettled) > 0 ? Decimal::sub($sibRel, $sibSettled) : '0';
                $totalCumulativeAvailable = Decimal::add($totalCumulativeAvailable, $sibAvail);
            }

            if (Decimal::comp($totalOrderSettled, $totalOrderLiability) >= 0 && Decimal::comp($totalOrderLiability, '0') > 0) {
                $db->rollBack();
                Response::json(['error' => 'All consignment payouts for this order have already been fully claimed and settled.', 'already_settled' => true], 400);
                return;
            }

            $claimableAvailable = $totalCumulativeAvailable;
        } else {
            // For non-order liabilities (bills, cycles, expenses), escrow release does NOT apply.
            // All un-settled balance is claimable once accepted in the 2-phase agreement.
            $claimableAvailable = Decimal::comp($totalLiability, $alreadySettled) > 0 ? Decimal::sub($totalLiability, $alreadySettled) : '0';
        }

        if (Decimal::comp($claimableAvailable, '0') <= 0) {
            $db->rollBack();
            $statusMsg = ($isOrder && ($settlement['release_status'] ?? 'locked') === 'locked')
                ? 'This settlement is locked. Funds must be released by the payer (fund owner) before claiming.'
                : 'No uncollected released funds available to claim for this settlement.';
            Response::json(['error' => $statusMsg], 400);
            return;
        }

        // Determine claim amount:
        // For order consignment payouts, claiming ALWAYS claims 100% of all available released funds!
        if ($isOrder) {
            $claimAmount = $claimableAvailable;
        } else {
            $claimAmount = $claimableAvailable;
            if (isset($data['amount'])) {
                $reqAmt = trim((string)$data['amount']);
                if (!is_numeric($reqAmt) || Decimal::comp($reqAmt, '0') <= 0) {
                    $db->rollBack();
                    Response::json(['error' => 'Settlement amount must be a valid positive number.'], 400);
                    return;
                }
                if (Decimal::comp($reqAmt, $claimableAvailable) > 0) {
                    $db->rollBack();
                    $cleanAvailable = rtrim(rtrim(Decimal::format($claimableAvailable, 2), '0'), '.');
                    Response::json(['error' => "Claim amount cannot exceed available released funds ({$cleanAvailable} DZD)."], 400);
                    return;
                }
                $claimAmount = $reqAmt;
            }
        }

        $amount = $claimAmount;

        $isProxy = false;
        if (!empty($settlement['details'])) {
            $sDetails = is_array($settlement['details']) ? $settlement['details'] : json_decode($settlement['details'], true);
            if (!empty($sDetails['is_proxy_purchase']) || !empty($sDetails['is_delegated_purchase'])) {
                $isProxy = true;
            }
        }
        if ($settlement['settlement_type'] === 'proxy_purchase' || $settlement['settlement_type'] === 'stock_transfer' || $settlement['settlement_type'] === 'purchase_transfer' || ($settlement['related_entity_type'] ?? '') === 'purchases') {
            $isProxy = true;
        }

        $isInstallmentMode = ($isProxy && ($data['mode'] ?? '') === 'installment');
        $downpayment = '0';
        if ($isInstallmentMode) {
            $downpayment = isset($data['amount_paid_now']) ? (string)$data['amount_paid_now'] : '0';
            if (!is_numeric($downpayment) || Decimal::comp($downpayment, '0') < 0) {
                $db->rollBack();
                Response::json(['error' => 'Downpayment must be a valid non-negative number.'], 400);
                return;
            }
            if (Decimal::comp($downpayment, $claimableAvailable) > 0) {
                $db->rollBack();
                $cleanDown = rtrim(rtrim(Decimal::format($downpayment, 2), '0'), '.');
                $cleanAvailable = rtrim(rtrim(Decimal::format($claimableAvailable, 2), '0'), '.');
                Response::json(['error' => "Downpayment ({$cleanDown} DZD) cannot exceed the total invoice amount ({$cleanAvailable} DZD)."], 400);
                return;
            }
        }

        // Record cash vault transfers if amount > 0
        $initialSource = in_array($settlement['target_source'] ?? 'vault', ['vault', 'hand'], true)
            ? $settlement['target_source']
            : 'vault';
        $actualSource = in_array($data['settled_source'] ?? $data['source'] ?? $data['target_source'] ?? $data['paid_from'] ?? $data['payment_source'] ?? $initialSource, ['vault', 'hand'], true)
            ? ($data['settled_source'] ?? $data['source'] ?? $data['target_source'] ?? $data['paid_from'] ?? $data['payment_source'] ?? $initialSource)
            : $initialSource;

        $forceOverdraft = !empty($data['force_overdraft']);

        // For order claims, consignment payouts, delegated purchases and purchase settlements, Hand Pay is strictly prohibited — always settle via Cash Safe
        if ($isOrder || $isProxy || ($settlement['related_entity_type'] ?? '') === 'purchases' || in_array($settlement['settlement_type'], ['delegated_purchase', 'stock_transfer'], true)) {
            $actualSource = 'vault';
        }

        // Multi-Tranche Cumulative Waterfall Claim Engine for Orders
        if ($isOrder && !empty($orderSiblingSettlements)) {
            $remToClaim = $amount;
            $totalCostClaimed = '0';
            $totalProfitClaimed = '0';
            $affectedIds = [];
            $affectedUids = [];

            $batchEventId = 'CLM-' . uniqid();
            $batchTimestamp = date('Y-m-d H:i:s');

            foreach ($orderSiblingSettlements as $sib) {
                if (Decimal::comp($remToClaim, '0') <= 0) {
                    break;
                }
                $sibId = (int)$sib['id'];
                $sibTotal = (string)$sib['amount'];
                $sibRel = (string)($sib['released_amount'] ?? '0');
                if (($sib['release_status'] ?? '') === 'released' && Decimal::comp($sibRel, '0') <= 0) {
                    $sibRel = $sibTotal;
                }
                $sibSettled = (string)($sib['settled_amount'] ?? '0');
                $sibAvail = Decimal::comp($sibRel, $sibSettled) > 0 ? Decimal::sub($sibRel, $sibSettled) : '0';

                if (Decimal::comp($sibAvail, '0') <= 0) {
                    continue;
                }

                $claimThis = Decimal::min($remToClaim, $sibAvail);
                $remToClaim = Decimal::sub($remToClaim, $claimThis);

                $newSibSettled = Decimal::add($sibSettled, $claimThis);
                $isSibFullySettled = Decimal::comp($newSibSettled, $sibTotal) >= 0;
                $newSibStatus = $isSibFullySettled ? 'settled' : 'pending';

                $sibRole = $sib['waterfall_role'] ?? '';
                $sibType = $sib['settlement_type'] ?? '';
                if ($sibRole === 'cost' || in_array($sibType, ['parts_cost_recovery', 'manual_cost_recovery'], true)) {
                    $totalCostClaimed = Decimal::add($totalCostClaimed, $claimThis);
                } else {
                    $totalProfitClaimed = Decimal::add($totalProfitClaimed, $claimThis);
                }

                $rawSibDet = $sib['details'] ?? '{}';
                $sibDet = is_string($rawSibDet) ? json_decode($rawSibDet, true) : (is_array($rawSibDet) ? $rawSibDet : []);
                if (!is_array($sibDet)) $sibDet = [];
                $claimHistory = $sibDet['claim_history'] ?? [];
                $claimerStmt = $db->prepare("SELECT username FROM users WHERE id = :uid");
                $claimerStmt->execute(['uid' => $sessionUser]);
                $claimerUsername = $claimerStmt->fetchColumn() ?: 'Partner';
                $isCostTranche = ($sibRole === 'cost' || in_array($sibType, ['parts_cost_recovery', 'manual_cost_recovery', 'stock_cost_recovery'], true));
                $claimHistory[] = [
                    'event_id' => $batchEventId,
                    'timestamp' => $batchTimestamp,
                    'amount' => $claimThis,
                    'cost_claimed' => ($isCostTranche ? $claimThis : '0'),
                    'profit_claimed' => (!$isCostTranche ? $claimThis : '0'),
                    'claimed_by' => $sessionUser,
                    'claimed_by_name' => $claimerUsername,
                    'source' => $actualSource
                ];
                $sibDet['claim_history'] = $claimHistory;
                $sibDet['claim_count'] = count($claimHistory);
                $sibDet['paid_from'] = $actualSource;
                $sibDet['settled_source'] = $actualSource;
                $sibDet['settled_at'] = $batchTimestamp;
                $sibDet['settled_amount'] = $newSibSettled;
                $sibDet['remaining_unsettled'] = Decimal::sub($sibTotal, $newSibSettled);
                $sibDet['last_claim_amount'] = $claimThis;
                $sibDet['last_claim_at'] = $batchTimestamp;
                $sibDet['last_claim_by'] = $sessionUser;

                $db->prepare('UPDATE partner_settlements SET status = :s, settled_amount = :sa, settled_at = NOW(), settled_by = :sb, settled_source = :src, details = :det, updated_at = NOW() WHERE id = :id')
                   ->execute([
                       's'   => $newSibStatus,
                       'sa'  => $newSibSettled,
                       'sb'  => $sessionUser,
                       'src' => $actualSource,
                       'det' => json_encode($sibDet, JSON_UNESCAPED_UNICODE),
                       'id'  => $sibId
                   ]);

                $affectedIds[] = $sibId;
                $affectedUids[] = !empty($sib['uid']) ? $sib['uid'] : "#STL-$sibId";
            }

            // Record cash vault transfers for the total cumulative amount claimed
            if (Decimal::comp($amount, '0') > 0 && $actualSource === 'vault') {
                (new CashVaultController())->ensureTwoSafes($db);
                $cleanDesc = "Order #{$orderId} Consignment payout: " . implode(', ', $affectedUids);
                $tag = "";
                if (Decimal::comp($totalCostClaimed, '0') > 0 && Decimal::comp($totalProfitClaimed, '0') > 0) {
                    $tag = " [Cost Recovery: " . Decimal::format($totalCostClaimed, 2) . " DZD | Net Profit: " . Decimal::format($totalProfitClaimed, 2) . " DZD]";
                } elseif (Decimal::comp($totalCostClaimed, '0') > 0) {
                    $tag = " [Cost Recovery: " . Decimal::format($totalCostClaimed, 2) . " DZD]";
                } else {
                    $tag = " [Net Profit: " . Decimal::format($totalProfitClaimed, 2) . " DZD]";
                }

                CashVaultController::logFlow(
                    $db,
                    'partner_settlement',
                    'out',
                    $amount,
                    'orders',
                    $orderId,
                    $cleanDesc . $tag,
                    (int)$settlement['payer_user_id'],
                    true // Allow overdraft on payer safe for authorized consignment claims
                );
                CashVaultController::logFlow(
                    $db,
                    'partner_settlement',
                    'in',
                    $amount,
                    'orders',
                    $orderId,
                    $cleanDesc . $tag,
                    (int)$settlement['payee_user_id']
                );
            }

            SystemLog::write('partner_settlements', 'cumulative_claim', (int)$id, $settlement['description'] ?? "Order #{$orderId} Settlement", json_encode([
                'order_id' => $orderId,
                'claimed_amount' => $amount,
                'cost_claimed' => $totalCostClaimed,
                'profit_claimed' => $totalProfitClaimed,
                'settlement_ids' => $affectedIds,
                'claimed_by' => $sessionUser,
                'source' => $actualSource
            ], JSON_UNESCAPED_UNICODE), $sessionUser);

            // Stage 4 Notification: Notify seller that stock owner claimed their payout
            try {
                $payeeStmt = $db->prepare("SELECT username FROM users WHERE id = :id LIMIT 1");
                $payeeStmt->execute(['id' => (int)$settlement['payee_user_id']]);
                $payeeRow = $payeeStmt->fetch();
                $payeeName = $payeeRow ? $payeeRow['username'] : 'Stock Owner';

                $ordUidStmt = $db->prepare("SELECT uid FROM orders WHERE id = :id LIMIT 1");
                $ordUidStmt->execute(['id' => $orderId]);
                $ordUidRow = $ordUidStmt->fetch();
                $orderUidStr = ($ordUidRow && !empty($ordUidRow['uid'])) ? $ordUidRow['uid'] : ($settlement['related_entity_uid'] ?? "ORD-{$orderId}");

                $cleanClaimed = rtrim(rtrim(Decimal::format($amount, 2), '0'), '.');
                $notifTitle = "Consignment Payout Claimed: #{$orderUidStr}";
                $notifBody = "@{$payeeName} claimed {$cleanClaimed} DZD for Order #{$orderUidStr}.";
                $db->prepare('INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at) VALUES (:uid, "settlement", :t, :b, :aurl, "orders", :oid, :stag, 0, NOW())')
                   ->execute([
                       'uid'  => (int)$settlement['payer_user_id'],
                       't'    => $notifTitle,
                       'b'    => $notifBody,
                       'aurl' => "#order-details:{$orderId}?step=claimed",
                       'oid'  => $orderId,
                       'stag' => "order_claimed_{$orderId}_" . time(),
                   ]);
            } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

            if ($db->inTransaction()) {
                $db->commit();
            }

            EntityVersion::bump($db, 'partner_settlements', 'cash_vault', 'orders');
            Response::json([
                'ok' => true,
                'message' => 'Consignment funds claimed successfully across all released tranches.',
                'claimed_amount' => $amount,
                'cost_claimed' => $totalCostClaimed,
                'profit_claimed' => $totalProfitClaimed,
                'settlement_ids' => $affectedIds
            ]);
            return;
        }

        $vaultOutflow = $isInstallmentMode ? $downpayment : $amount;
        $forceOverdraft = !empty($data['force_overdraft']);

        if (Decimal::comp($vaultOutflow, '0') > 0 && $actualSource === 'vault') {
            (new CashVaultController())->ensureTwoSafes($db);

            if ($isProxy) {
                // Proxy Purchase Settle: Outflow from buyer B as supplier_payment (User A receives 0)
                CashVaultController::logFlow(
                    $db,
                    'supplier_payment',
                    'out',
                    $vaultOutflow,
                    'purchases',
                    (int)($settlement['related_entity_id'] ?? $id),
                    ($isInstallmentMode ? "Supplier downpayment for proxy purchase: " : "Supplier payment for proxy purchase: ") . ($settlement['description'] ?? "Settlement #{$settlement['uid']}"),
                    (int)$settlement['payer_user_id'],
                    $forceOverdraft
                );
            } elseif ($settlement['settlement_type'] === 'bill_split') {
                // Recurring / Archived Bill split settlement: Outflow from payer, and if fronted, Inflow to fronting payee
                $cleanDesc = str_replace(' (Lead)', '', ($settlement['description'] ?? "Settlement #{$settlement['uid']}"));
                $payerId = (int)$settlement['payer_user_id'];
                $payeeId = (int)($settlement['payee_user_id'] ?? 0);

                if ($payeeId > 0 && $payeeId !== $payerId) {
                    // Fronted Bill Reimbursement: Outflow from debtor partner, Inflow to fronting lead creditor
                    CashVaultController::logFlow(
                        $db,
                        'bill_payment',
                        'out',
                        $amount,
                        'recurring_bill_cycles',
                        (int)($settlement['cycle_id'] ?? $settlement['related_entity_id'] ?? $id),
                        "Reimbursement share: " . $cleanDesc,
                        $payerId,
                        $forceOverdraft
                    );
                    CashVaultController::logFlow(
                        $db,
                        'partner_settlement',
                        'in',
                        $amount,
                        'recurring_bill_cycles',
                        (int)($settlement['cycle_id'] ?? $settlement['related_entity_id'] ?? $id),
                        "Reimbursement received: " . $cleanDesc,
                        $payeeId
                    );
                } else {
                    // Direct bill outflow from payer's safe (self-liability)
                    CashVaultController::logFlow(
                        $db,
                        'bill_payment',
                        'out',
                        $amount,
                        'recurring_bill_cycles',
                        (int)($settlement['cycle_id'] ?? $settlement['related_entity_id'] ?? $id),
                        $cleanDesc,
                        $payerId,
                        $forceOverdraft
                    );
                }
            } elseif ($settlement['settlement_type'] === 'expense_split' || (int)$settlement['payer_user_id'] === (int)$settlement['payee_user_id']) {
                // Operating expense split settlement: Direct expense outflow from payer's safe
                $cleanDesc = str_replace(' (Lead)', '', ($settlement['description'] ?? "Settlement #{$settlement['uid']}"));
                CashVaultController::logFlow(
                    $db,
                    'operating_expense',
                    'out',
                    $amount,
                    'operating_expenses',
                    (int)($settlement['related_entity_id'] ?? $id),
                    $cleanDesc,
                    (int)$settlement['payer_user_id'],
                    $forceOverdraft
                );
            } else {
                // Waterfall Attribution Tagging
                $tag = "";
                $claimCost = '0';
                $claimProfit = '0';

                $waterfallRole = $settlement['waterfall_role'] ?? '';
                $settleType = $settlement['settlement_type'] ?? '';

                if ($waterfallRole === 'cost' || in_array($settleType, ['parts_cost_recovery', 'manual_cost_recovery', 'custom_service_part_cost', 'custom_service_outlay_cost'], true)) {
                    $claimCost = $amount;
                    $tag = " [Cost Recovery: " . Decimal::format($amount, 2) . " DZD]";
                } elseif ($waterfallRole === 'profit' || in_array($settleType, ['parts_profit_share', 'manual_cost_markup', 'service_profit_share', 'collab_labor_share', 'custom_service_part_profit', 'custom_service_outlay_markup', 'custom_service_labor'], true)) {
                    $claimProfit = $amount;
                    $tag = " [Net Profit: " . Decimal::format($amount, 2) . " DZD]";
                } else {
                    // Mixed or Legacy
                    $rawDet = $settlement['details'] ?? '{}';
                    $d = is_string($rawDet) ? json_decode($rawDet, true) : (is_array($rawDet) ? $rawDet : []);
                    $costTotal = (string)($d['total_cost'] ?? $d['cost_recovery'] ?? '0');
                    if (Decimal::comp($costTotal, '0') > 0) {
                        $costAlreadySettled = (string)($settlement['settled_amount'] ?? '0');
                        $costRemaining = Decimal::comp($costTotal, $costAlreadySettled) > 0 ? Decimal::sub($costTotal, $costAlreadySettled) : '0';
                        $claimCost = Decimal::min($amount, $costRemaining);
                        $claimProfit = Decimal::sub($amount, $claimCost);
                        if (Decimal::comp($claimCost, '0') > 0 && Decimal::comp($claimProfit, '0') > 0) {
                            $tag = " [Cost Recovery: " . Decimal::format($claimCost, 2) . " DZD | Net Profit: " . Decimal::format($claimProfit, 2) . " DZD]";
                        } elseif (Decimal::comp($claimCost, '0') > 0) {
                            $tag = " [Cost Recovery: " . Decimal::format($claimCost, 2) . " DZD]";
                        } else {
                            $tag = " [Net Profit: " . Decimal::format($claimProfit, 2) . " DZD]";
                        }
                    }
                }

                // Standard Partner Transfer: Outflow from payer, Inflow to payee
                CashVaultController::logFlow(
                    $db,
                    'partner_settlement',
                    'out',
                    $amount,
                    'partner_settlements',
                    (int)$id,
                    "Settlement payment: " . ($settlement['description'] ?? "Settlement #{$settlement['uid']}") . $tag,
                    (int)$settlement['payer_user_id'],
                    $isOrder ? true : $forceOverdraft
                );
                CashVaultController::logFlow(
                    $db,
                    'partner_settlement',
                    'in',
                    $amount,
                    'partner_settlements',
                    (int)$id,
                    "Settlement received: " . ($settlement['description'] ?? "Settlement #{$settlement['uid']}") . $tag,
                    (int)$settlement['payee_user_id']
                );
            }
        }

        // Synchronize details JSON so that paid_from and settled_source reflect actual settlement source
        $rawDetails = $settlement['details'] ?? '{}';
        $det = is_string($rawDetails) ? json_decode($rawDetails, true) : (is_array($rawDetails) ? $rawDetails : []);
        if (is_array($det)) {
            $det['paid_from'] = $actualSource;
            $det['settled_source'] = $actualSource;
            $det['settled_at'] = date('Y-m-d H:i:s');
            if (isset($det['share'])) {
                $det['share'] = rtrim(rtrim((string)$det['share'], '0'), '.');
                if (strpos($det['share'], '.') === false) $det['share'] .= '.00';
            }
            if (isset($det['total'])) {
                $det['total'] = rtrim(rtrim((string)$det['total'], '0'), '.');
                if (strpos($det['total'], '.') === false) $det['total'] .= '.00';
            }
        }
        if ($isInstallmentMode) {
            $newSettledTotal = $totalLiability;
            $isFullySettled = true;
            $newSettlementStatus = 'settled';
        } else {
            $newSettledTotal = Decimal::add($alreadySettled, $amount);
            $isFullySettled = Decimal::comp($newSettledTotal, $totalLiability) >= 0;
            $newSettlementStatus = $isFullySettled ? 'settled' : 'pending';
        }

        if (is_array($det)) {
            $det['settled_amount'] = $newSettledTotal;
            $det['remaining_unsettled'] = Decimal::sub($totalLiability, $newSettledTotal);
            $det['claim_amount_now'] = $amount;
            if ($isInstallmentMode) {
                $det['installment_mode'] = true;
                $det['initial_downpayment'] = $downpayment;
                $det['remaining_debt'] = Decimal::sub($totalLiability, $downpayment);
            }
            $det['last_claim_breakdown'] = [
                'amount' => $amount,
                'cost_recovery' => $claimCost ?? '0',
                'net_profit' => $claimProfit ?? '0',
                'tag' => trim($tag ?? ''),
                'settled_at' => date('Y-m-d H:i:s'),
                'settled_by' => $sessionUser,
            ];
        }
        $updatedDetailsJson = json_encode($det);

        // Mark as settled (if fully settled) or update partial settlement progress
        $db->prepare('UPDATE partner_settlements SET status = :s, settled_amount = :sa, settled_at = NOW(), settled_by = :sb, settled_source = :src, details = :det WHERE id = :id')
           ->execute(['s' => $newSettlementStatus, 'sa' => $newSettledTotal, 'sb' => $sessionUser, 'src' => $actualSource, 'det' => $updatedDetailsJson, 'id' => $id]);

        // Synchronize recurring_bill_cycle_payments if linked
        $db->prepare("UPDATE recurring_bill_cycle_payments SET paid_at = NOW(), paid_from = :pf WHERE settlement_id = :sid AND voided_at IS NULL")
           ->execute(['pf' => $actualSource, 'sid' => (int)$id]);

        // If this settlement is a stock transfer or delegated purchase, complete the purchase ownership transfer with Lot Splitting
        if (($settlement['settlement_type'] === 'stock_transfer' || $settlement['settlement_type'] === 'proxy_purchase' || $isProxy) && !empty($settlement['related_entity_id'])) {
            $pid = (int)$settlement['related_entity_id'];
            $pStmt = $db->prepare('SELECT * FROM purchases WHERE id = :pid FOR UPDATE');
            $pStmt->execute(['pid' => $pid]);
            $purchase = $pStmt->fetch();

            if ($purchase) {
                $soldQty      = (string)($purchase['quantity_sold'] ?? '0');
                $remainingQty = (string)($purchase['quantity_remaining'] ?? '0');
                $newOwnerId   = (int)$settlement['payer_user_id'];
                $valuation    = (string)$settlement['amount'];

                // ── Lot Splitting Architecture ──────────────────────────────
                if (Decimal::comp($soldQty, '0') > 0 && Decimal::comp($remainingQty, '0') > 0) {
                    $unitCost  = (string)($purchase['price'] ?? '0');
                    $soldTotal = Decimal::mul($unitCost, $soldQty);

                    // A. Fork & Close Parent Lot under Old Owner
                    $db->prepare('UPDATE purchases SET
                        quantity = :soldQty,
                        quantity_remaining = 0,
                        total = :soldTotal,
                        amount_paid = :soldTotal,
                        transfer_status = NULL,
                        transfer_to_user_id = NULL,
                        transfer_valuation = NULL,
                        transfer_settlement_id = NULL,
                        transfer_initiated_at = NULL,
                        transfer_initiated_by = NULL
                    WHERE id = :id')->execute([
                        'soldQty' => $soldQty,
                        'soldTotal' => $soldTotal,
                        'id' => $pid,
                    ]);

                    // B. Spawn New Lot for New Owner
                    $transferUnitCost = (Decimal::comp($valuation, '0') > 0 && Decimal::comp($remainingQty, '0') > 0)
                        ? Decimal::div($valuation, $remainingQty)
                        : $unitCost;
                    $newTotal = Decimal::mul($transferUnitCost, $remainingQty);

                    $childPayStatus = 'paid';
                    $childPaidAmt = $newTotal;
                    $childPaidAt = date('Y-m-d H:i:s');
                    $childPaidBy = $newOwnerId;
                    $childDueDate = null;

                    if ($isProxy && $isInstallmentMode) {
                        $childPayStatus = (Decimal::comp($downpayment, '0') === 0)
                            ? 'unpaid'
                            : (Decimal::comp($downpayment, $newTotal) >= 0 ? 'paid' : 'partial');
                        $childPaidAmt = $downpayment;
                        $childPaidAt = ($childPayStatus !== 'unpaid') ? date('Y-m-d H:i:s') : null;
                        $childPaidBy = ($childPayStatus !== 'unpaid') ? $newOwnerId : null;
                        $childDueDate = !empty($data['due_date']) ? $data['due_date'] : null;
                    }

                    $insStmt = $db->prepare('INSERT INTO purchases
                        (uid, name, product_id, price, quantity, quantity_remaining, quantity_sold,
                         total, date, created_by, owner_user_id, supplier_id, payment_status,
                         amount_paid, paid_at, paid_by, due_date, paid_from, supplier_note, transfer_status)
                        VALUES (:uid, :name, :product_id, :price, :qty, :qty_rem, 0,
                                :total, NOW(), :created_by, :owner_user_id, :supplier_id, :ps,
                                :amount_paid, :pa, :paid_by, :dd, :pf, :supplier_note, NULL)');
                    $insStmt->execute([
                        'uid' => 'TEMP',
                        'name' => $purchase['name'],
                        'product_id' => $purchase['product_id'],
                        'price' => $transferUnitCost,
                        'qty' => $remainingQty,
                        'qty_rem' => $remainingQty,
                        'total' => $newTotal,
                        'created_by' => $sessionUser,
                        'owner_user_id' => $newOwnerId,
                        'supplier_id' => $purchase['supplier_id'],
                        'ps' => $childPayStatus,
                        'amount_paid' => $childPaidAmt,
                        'pa' => $childPaidAt,
                        'paid_by' => $childPaidBy,
                        'dd' => $childDueDate,
                        'pf' => $actualSource,
                        'supplier_note' => "Transferred from lot #" . ($purchase['uid'] ?? $pid),
                    ]);
                    $spawnedLotId = (int)$db->lastInsertId();

                    $dateStr = date('Ymd');
                    $random = strtoupper(bin2hex(random_bytes(2)));
                    $spawnedUid = "PUR-{$dateStr}-{$random}({$spawnedLotId})";
                    $db->prepare('UPDATE purchases SET uid = :uid WHERE id = :id')->execute([
                        'uid' => $spawnedUid,
                        'id' => $spawnedLotId,
                    ]);
                } else {
                    // Virgin lot (0 units sold) or already forked child lot — direct in-place update
                    $transferUnitCost = (Decimal::comp($valuation, '0') > 0 && Decimal::comp($remainingQty, '0') > 0)
                        ? Decimal::div($valuation, $remainingQty)
                        : (string)($purchase['price'] ?? '0');
                    $proxySql = '';
                    $params = [
                        'owner' => $newOwnerId,
                        'pid'   => $pid,
                    ];
                    if ($isProxy) {
                        if ($isInstallmentMode) {
                            $payStatus = (Decimal::comp($downpayment, '0') === 0)
                                ? 'unpaid'
                                : (Decimal::comp($downpayment, $valuation) >= 0 ? 'paid' : 'partial');
                            $paidAt = ($payStatus !== 'unpaid') ? date('Y-m-d H:i:s') : null;
                            $paidBy = ($payStatus !== 'unpaid') ? $newOwnerId : null;
                            $dueDate = !empty($data['due_date']) ? $data['due_date'] : null;

                            $proxySql = ", payment_status = :ps, amount_paid = :ap, paid_at = :pa, paid_by = :pb, due_date = :dd, paid_from = :pf";
                            $params['ps'] = $payStatus;
                            $params['ap'] = $downpayment;
                            $params['pa'] = $paidAt;
                            $params['pb'] = $paidBy;
                            $params['dd'] = $dueDate;
                            $params['pf'] = $actualSource;
                        } else {
                            $proxySql = ", payment_status = 'paid', amount_paid = total, paid_at = NOW(), paid_by = :pb, paid_from = :pf";
                            $params['pb'] = $newOwnerId;
                            $params['pf'] = $actualSource;
                        }
                    } else {
                        $proxySql = ", price = :price, total = :total, amount_paid = :total";
                        $params['price'] = $transferUnitCost;
                        $params['total'] = $valuation;
                    }
                    $db->prepare("UPDATE purchases SET
                        owner_user_id = :owner,
                        transfer_status = NULL,
                        transfer_to_user_id = NULL,
                        transfer_valuation = NULL,
                        transfer_settlement_id = NULL,
                        transfer_initiated_at = NULL,
                        transfer_initiated_by = NULL
                        {$proxySql}
                    WHERE id = :pid")->execute($params);
                }
            }
        }

        // Two-Phase Completion Transition: Check if 100% of partner shares are settled
        $billId = (int)($settlement['bill_id'] ?? 0);
        $cycleId = (int)($settlement['cycle_id'] ?? 0);
        if (!$billId && ($settlement['related_entity_type'] ?? '') === 'recurring_bills') {
            $billId = (int)$settlement['related_entity_id'];
        }
        if (!$cycleId && ($settlement['related_entity_type'] ?? '') === 'recurring_bill_cycle') {
            $cycleId = (int)$settlement['related_entity_id'];
        }
        if ($cycleId > 0 && !$billId) {
            $bRow = $db->query("SELECT bill_id FROM recurring_bill_cycles WHERE id = {$cycleId}")->fetch();
            if ($bRow) $billId = (int)$bRow['bill_id'];
        }

        if ($billId > 0 || $cycleId > 0) {
            $whereParts = [];
            $params = [];
            if ($billId > 0) {
                $whereParts[] = "bill_id = :bid";
                $params['bid'] = $billId;
            }
            if ($cycleId > 0) {
                $whereParts[] = "cycle_id = :cid";
                $params['cid'] = $cycleId;
            }
            $whereClause = '(' . implode(' OR ', $whereParts) . ") AND status NOT IN ('settled', 'cancelled')";
            $unsettledStmt = $db->prepare("SELECT COUNT(*) FROM partner_settlements WHERE $whereClause");
            $unsettledStmt->execute($params);
            $unsettledCount = (int)$unsettledStmt->fetchColumn();

            if ($cycleId > 0) {
                // Lock cycle row to serialize concurrent settlement updates
                $cLock = $db->prepare("SELECT id, amount_expected, amount_paid, status FROM recurring_bill_cycles WHERE id = :cid FOR UPDATE");
                $cLock->execute(['cid' => $cycleId]);

                // Mark the corresponding cycle payment row as paid
                $aff = $db->prepare("UPDATE recurring_bill_cycle_payments SET paid_at = NOW(), paid_from = :pf WHERE settlement_id = :sid AND paid_at IS NULL");
                $aff->execute(['sid' => (int)$settlement['id'], 'pf' => $actualSource]);

                // If no payment row exists for this settlement (e.g. single payer period bill), insert one!
                $chkP = $db->prepare("SELECT COUNT(*) FROM recurring_bill_cycle_payments WHERE settlement_id = :sid AND voided_at IS NULL");
                $chkP->execute(['sid' => (int)$settlement['id']]);
                if ((int)$chkP->fetchColumn() === 0) {
                    $cpIns = $db->prepare("INSERT INTO recurring_bill_cycle_payments 
                        (cycle_id, bill_id, user_id, amount, paid_from, paid_at, settlement_id, note, created_by, created_at)
                        VALUES (:cid, :bid, :uid, :amt, :pf, NOW(), :sid, 'Single payer period bill settlement', :cb, NOW())");
                    $cpIns->execute([
                        'cid' => $cycleId,
                        'bid' => (int)($settlement['bill_id'] ?? 0),
                        'uid' => $sessionUser,
                        'amt' => $amount,
                        'pf'  => $actualSource,
                        'sid' => (int)$settlement['id'],
                        'cb'  => $sessionUser
                    ]);
                }

                $sumPaid = $db->query("SELECT COALESCE(SUM(amount), '0') FROM recurring_bill_cycle_payments WHERE cycle_id = {$cycleId} AND voided_at IS NULL AND paid_at IS NOT NULL")->fetchColumn();
                if ($sumPaid !== false) {
                    $db->prepare("UPDATE recurring_bill_cycles SET amount_paid = :sp WHERE id = :cid")->execute(['sp' => $sumPaid, 'cid' => $cycleId]);
                }

                // Synchronize recurring_bill_cycles.split_data with settled source & status
                try {
                    $cycRow = $db->query("SELECT split_data FROM recurring_bill_cycles WHERE id = {$cycleId}")->fetch(\PDO::FETCH_ASSOC);
                    if ($cycRow && !empty($cycRow['split_data'])) {
                        $cSplit = json_decode($cycRow['split_data'], true);
                        if (is_array($cSplit)) {
                            $payerId = (int)$settlement['payer_user_id'];
                            $cUpdated = false;
                            foreach ($cSplit as &$csp) {
                                if ((int)($csp['user_id'] ?? 0) === $payerId) {
                                    $csp['settled_source'] = $actualSource;
                                    $csp['settled_at'] = date('Y-m-d H:i:s');
                                    $csp['settled_by'] = $sessionUser;
                                    $csp['status'] = 'settled';
                                    $cUpdated = true;
                                }
                            }
                            unset($csp);
                            if ($cUpdated) {
                                $db->prepare("UPDATE recurring_bill_cycles SET split_data = :sd WHERE id = :id")
                                   ->execute(['sd' => json_encode($cSplit), 'id' => $cycleId]);
                            }
                        }
                    }
                } catch (\Exception $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
            }

            if ($unsettledCount === 0) {
                if ($billId > 0) {
                    $db->prepare("UPDATE recurring_bills SET settlement_status = 'settled' WHERE id = :bid")->execute(['bid' => $billId]);
                    $bCheck = $db->query("SELECT name, is_archived, uid FROM recurring_bills WHERE id = {$billId}")->fetch(\PDO::FETCH_ASSOC);
                    if ($bCheck && !empty($bCheck['is_archived'])) {
                        SystemLog::write('recurring_bills', 'archived_bill_settled', $billId, $bCheck['name'], json_encode([
                            'uid'     => $bCheck['uid'] ?? null,
                            'bill_id' => $billId,
                            'status'  => 'settled',
                            'message' => "All partner shares for archived bill '{$bCheck['name']}' have been paid in full."
                        ]), (int)$sessionUser);
                    }
                }
                if ($cycleId > 0) {
                    $newSplitStatus = ($settlement['settlement_type'] === 'bill_single') ? 'none' : 'settled';
                    $db->prepare("UPDATE recurring_bill_cycles 
                        SET split_status = :sps, status = 'paid', paid_at = NOW(), paid_by = :sb, paid_from = :pf,
                            has_refusal = 0 
                        WHERE id = :cid")
                       ->execute(['sps' => $newSplitStatus, 'cid' => $cycleId, 'sb' => $sessionUser, 'pf' => $actualSource]);

                    $cRow = $db->query("SELECT c.cycle_label, b.name AS bill_name, c.uid FROM recurring_bill_cycles c JOIN recurring_bills b ON c.bill_id = b.id WHERE c.id = {$cycleId}")->fetch(\PDO::FETCH_ASSOC);
                    if ($cRow) {
                        SystemLog::write('recurring_bill_cycles', 'cycle_paid', $cycleId, "{$cRow['bill_name']} ({$cRow['cycle_label']})", json_encode([
                            'uid'         => $cRow['uid'] ?? null,
                            'cycle_id'    => $cycleId,
                            'bill_id'     => $billId,
                            'cycle_label' => $cRow['cycle_label'],
                            'paid_from'   => $actualSource,
                            'status'      => 'paid',
                            'message'     => "All partner shares for cycle '{$cRow['cycle_label']}' have been paid in full."
                        ]), (int)$sessionUser);
                    }

                    // Sanitize refusal note from cycle note
                    try {
                        $cNote = $db->query("SELECT note FROM recurring_bill_cycles WHERE id = {$cycleId}")->fetchColumn();
                        if ($cNote && strpos($cNote, '[REFUSED by') !== false) {
                            $sanitizedNote = trim((string)preg_replace('/\s*\[REFUSED by [^\]]+\]\s*/i', ' ', $cNote));
                            $db->prepare("UPDATE recurring_bill_cycles SET note = :n WHERE id = :cid")->execute(['n' => $sanitizedNote, 'cid' => $cycleId]);
                        }
                    } catch (\Exception $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
                }

                // Dispatch completion notification to all partners and creator
                $allPartnersQuery = $db->prepare("SELECT DISTINCT user_id FROM (
                    SELECT payer_user_id as user_id FROM partner_settlements WHERE " . implode(' OR ', $whereParts) . "
                    UNION
                    SELECT payee_user_id as user_id FROM partner_settlements WHERE " . implode(' OR ', $whereParts) . "
                ) as u WHERE user_id > 0");
                $allPartnersQuery->execute($params);
                $allPartners = array_values(array_unique(array_map('intval', $allPartnersQuery->fetchAll(\PDO::FETCH_COLUMN) ?: [])));

                $creatorId = 0;
                $creatorName = 'Staff';
                $isArchivedBill = false;
                if ($billId > 0) {
                    $bInfo = $db->query("SELECT rb.created_by, rb.is_archived, u.username FROM recurring_bills rb LEFT JOIN users u ON rb.created_by = u.id WHERE rb.id = {$billId}")->fetch(\PDO::FETCH_ASSOC);
                    if ($bInfo) {
                        $creatorId = (int)($bInfo['created_by'] ?? 0);
                        $creatorName = !empty($bInfo['username']) ? $bInfo['username'] : 'Staff';
                        $isArchivedBill = !empty($bInfo['is_archived']);
                    }
                    if ($creatorId > 0 && !in_array($creatorId, $allPartners, true)) {
                        $allPartners[] = $creatorId;
                    }
                }

                $billName = 'Overhead Bill';
                if ($billId > 0) {
                    $billName = $db->query("SELECT name FROM recurring_bills WHERE id = {$billId}")->fetchColumn() ?: $billName;
                }

                // Tag people mentioned in the split
                $whereCondition = implode(' OR ', $whereParts);
                $partnerNamesStmt = $db->prepare("SELECT DISTINCT u.username FROM partner_settlements ps JOIN users u ON ps.payer_user_id = u.id WHERE ({$whereCondition}) AND ps.status != 'cancelled'");
                $partnerNamesStmt->execute($params);
                $splitUsernames = $partnerNamesStmt->fetchAll(\PDO::FETCH_COLUMN) ?: [];
                $partnersListStr = !empty($splitUsernames) ? implode(', ', array_map(fn($un) => "@$un", $splitUsernames)) : 'all partners';

                $billActionUrl = $isArchivedBill ? '#page-bills?tab=archived' : '#page-bills?tab=settlements';
                $notifIns = $db->prepare("INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at)
                    VALUES (:uid, 'bill', :title, :body, :aurl, 'recurring_bills', :bid, :tag, 0, NOW())");

                $bodyText = "All partner shares for '{$billName}' (created by @{$creatorName}, split among {$partnersListStr}) have been paid in full. Bill is now 100% settled.";

                foreach ($allPartners as $pId) {
                    if ((int)$pId === (int)$sessionUser) continue;
                    $notifIns->execute([
                        'uid'   => (int)$pId,
                        'title' => "Bill '{$billName}' Fully Settled",
                        'body'  => $bodyText,
                        'aurl'  => $billActionUrl,
                        'bid'   => $billId ?: $cycleId,
                        'tag'   => 'fully_settled_' . ($billId ?: $cycleId)
                    ]);
                }
            }
        }

        $oeId = 0;
        if (($settlement['related_entity_type'] ?? '') === 'operating_expense' || $settlement['settlement_type'] === 'expense_split') {
            $oeId = (int)($settlement['related_entity_id'] ?? 0);
        }

        if ($oeId > 0) {
            // Synchronize operating_expenses.split_data with actual settled source
            $oeStmt = $db->prepare('SELECT split_data, description, uid FROM operating_expenses WHERE id = :id FOR UPDATE');
            $oeStmt->execute(['id' => $oeId]);
            $oeRow = $oeStmt->fetch();
            if ($oeRow && !empty($oeRow['split_data'])) {
                $splitData = json_decode($oeRow['split_data'], true);
                if (is_array($splitData)) {
                    $payerId = (int)$settlement['payer_user_id'];
                    $updated = false;
                    foreach ($splitData as &$sp) {
                        if ((int)($sp['user_id'] ?? 0) === $payerId) {
                            $sp['settled_source'] = $actualSource;
                            $sp['settled_at'] = date('Y-m-d H:i:s');
                            $sp['settled_by'] = $sessionUser;
                            $sp['status'] = 'settled';
                            $updated = true;
                        }
                    }
                    unset($sp);
                    if ($updated) {
                        $db->prepare('UPDATE operating_expenses SET split_data = :sd WHERE id = :id')
                           ->execute(['sd' => json_encode($splitData), 'id' => $oeId]);
                    }
                }
            }

            // SystemLog for operating expense share paid
            $payerUNameStmt = $db->prepare('SELECT username FROM users WHERE id = :uid');
            $payerUNameStmt->execute(['uid' => (int)$settlement['payer_user_id']]);
            $payerUName = $payerUNameStmt->fetchColumn() ?: ('User #' . (int)$settlement['payer_user_id']);
            $sourceLabel = ($actualSource === 'hand') ? 'Cash in Hand' : 'Cash Vault';

            SystemLog::write('operating_expenses', 'expense_share_paid', $oeId, $oeRow['description'] ?? "Expense #{$oeId}", json_encode([
                'expense_id'        => $oeId,
                'payer_user_id'     => (int)$settlement['payer_user_id'],
                'payer_name'        => $payerUName,
                'amount'            => $amount,
                'amount_formatted'  => Decimal::format($amount, 2) . ' DZD',
                'source'            => $actualSource,
                'source_label'      => $sourceLabel,
                'settlement_id'     => (int)$id,
                'switched_source'   => ($initialSource !== $actualSource),
                'summary'           => "Share of " . Decimal::format($amount, 2) . " DZD paid by {$payerUName} via {$sourceLabel}"
            ], JSON_UNESCAPED_UNICODE), (int)$sessionUser);

            // Insert audit entry into expense_history
            try {
                $histStmt = $db->prepare("INSERT INTO expense_history (expense_id, edited_by, action, changes, note, created_at) 
                    VALUES (:eid, :by, 'settlement_paid', :ch, :note, NOW())");
                $sourceNote = ($initialSource !== $actualSource)
                    ? "Switched payment source from {$initialSource} to {$actualSource} at settlement time"
                    : "Settled via {$actualSource}";
                $histStmt->execute([
                    'eid'  => $oeId,
                    'by'   => $sessionUser,
                    'ch'   => json_encode([
                        'settlement_id'   => (int)$id,
                        'payer_user_id'   => (int)$settlement['payer_user_id'],
                        'amount'          => (string)$amount,
                        'initial_source'  => $initialSource,
                        'settled_source'  => $actualSource,
                        'switched_source' => ($initialSource !== $actualSource),
                    ]),
                    'note' => "Partner settlement #{$id} paid: " . Decimal::format($amount, 2) . " DZD ({$sourceNote})"
                ]);
            } catch (\Exception $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }

            $unsettledOeStmt = $db->prepare("SELECT COUNT(*) FROM partner_settlements 
                WHERE related_entity_type = 'operating_expense' AND related_entity_id = :oeid 
                  AND status NOT IN ('settled', 'cancelled')");
            $unsettledOeStmt->execute(['oeid' => $oeId]);
            $unsettledOeCount = (int)$unsettledOeStmt->fetchColumn();

            if ($unsettledOeCount === 0) {
                $db->prepare("UPDATE operating_expenses SET settlement_status = 'settled' WHERE id = :oeid")->execute(['oeid' => $oeId]);

                $allPartnersQuery = $db->prepare("SELECT DISTINCT user_id FROM (
                    SELECT payer_user_id as user_id FROM partner_settlements WHERE related_entity_type = 'operating_expense' AND related_entity_id = :oeid1
                    UNION
                    SELECT payee_user_id as user_id FROM partner_settlements WHERE related_entity_type = 'operating_expense' AND related_entity_id = :oeid2
                ) as u WHERE user_id > 0");
                $allPartnersQuery->execute(['oeid1' => $oeId, 'oeid2' => $oeId]);
                $allPartners = array_values(array_unique(array_map('intval', $allPartnersQuery->fetchAll(\PDO::FETCH_COLUMN) ?: [])));

                // Creator of operating expense (Mission 231 fix)
                $oeInfo = $db->query("SELECT oe.created_by, oe.description, u.username FROM operating_expenses oe LEFT JOIN users u ON oe.created_by = u.id WHERE oe.id = {$oeId}")->fetch(\PDO::FETCH_ASSOC);
                $creatorId = (int)($oeInfo['created_by'] ?? 0);
                $creatorName = !empty($oeInfo['username']) ? $oeInfo['username'] : 'Staff';
                if ($creatorId > 0 && !in_array($creatorId, $allPartners, true)) {
                    $allPartners[] = $creatorId;
                }

                $oeName = !empty($oeInfo['description']) ? $oeInfo['description'] : "Expense #{$oeId}";

                // Tag people mentioned in the split
                $partnerNamesStmt = $db->prepare("SELECT DISTINCT u.username FROM partner_settlements ps JOIN users u ON ps.payer_user_id = u.id WHERE related_entity_type = 'operating_expense' AND related_entity_id = :oeid AND ps.status != 'cancelled'");
                $partnerNamesStmt->execute(['oeid' => $oeId]);
                $splitUsernames = $partnerNamesStmt->fetchAll(\PDO::FETCH_COLUMN) ?: [];
                $partnersListStr = !empty($splitUsernames) ? implode(', ', array_map(fn($un) => "@$un", $splitUsernames)) : 'all partners';

                $notifIns = $db->prepare("INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at)
                    VALUES (:uid, 'expense', :title, :body, '#page-bills?tab=operating', 'operating_expenses', :eid, :tag, 0, NOW())");

                $bodyText = "All partner shares for expense '{$oeName}' (created by @{$creatorName}, split among {$partnersListStr}) have been paid in full. Expense is now 100% settled.";

                foreach ($allPartners as $pId) {
                    if ((int)$pId === (int)$sessionUser) continue;
                    $notifIns->execute([
                        'uid'   => (int)$pId,
                        'title' => "Expense '{$oeName}' Fully Settled",
                        'body'  => $bodyText,
                        'eid'   => $oeId,
                        'tag'   => 'fully_settled_oe_' . $oeId
                    ]);
                }

                SystemLog::write('operating_expenses', 'expense_fully_settled', $oeId, $oeName, json_encode([
                    'expense_id'       => $oeId,
                    'expense_name'     => $oeName,
                    'total_settled'    => $newSettledTotal,
                    'total_formatted'  => Decimal::format($newSettledTotal, 2) . ' DZD',
                    'partners_count'   => count($allPartners),
                    'summary'          => "All partner shares have been fully settled for '{$oeName}'"
                ], JSON_UNESCAPED_UNICODE), (int)$sessionUser);
            }
        }

        // Also record in expense_history if linked to recurring bill or cycle
        if (!empty($settlement['bill_id']) || !empty($settlement['cycle_id'])) {
            try {
                $bId = (int)($settlement['bill_id'] ?? 0);
                $cId = (int)($settlement['cycle_id'] ?? 0);
                $histStmt = $db->prepare("INSERT INTO expense_history (bill_id, cycle_id, edited_by, action, changes, note, created_at) 
                    VALUES (:bid, :cid, :by, 'settlement_paid', :ch, :note, NOW())");
                $sourceNote = ($initialSource !== $actualSource)
                    ? "Switched payment source from {$initialSource} to {$actualSource} at settlement time"
                    : "Settled via {$actualSource}";
                $histStmt->execute([
                    'bid'  => $bId > 0 ? $bId : null,
                    'cid'  => $cId > 0 ? $cId : null,
                    'by'   => $sessionUser,
                    'ch'   => json_encode([
                        'settlement_id'   => (int)$id,
                        'payer_user_id'   => (int)$settlement['payer_user_id'],
                        'amount'          => (string)$amount,
                        'initial_source'  => $initialSource,
                        'settled_source'  => $actualSource,
                        'switched_source' => ($initialSource !== $actualSource),
                    ]),
                    'note' => "Settlement #{$id} paid: " . Decimal::format($amount, 2) . " DZD ({$sourceNote})"
                ]);
            } catch (\Exception $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }
        }

        // Mark this ticket's payment notification read for the debtor
        $db->prepare("UPDATE notifications SET is_read = 1 WHERE user_id = :uid AND entity_type = 'partner_settlement' AND entity_id = :sid")
           ->execute(['uid' => (int)$settlement['payer_user_id'], 'sid' => (int)$id]);

        if ($db->inTransaction()) {
            $db->commit();
        }
    } catch (\Throwable $e) {
        if ($db->inTransaction()) {
            try { $db->rollBack(); } catch (\Throwable $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }
        }
        error_log("Settlement failed in " . __METHOD__ . ": " . $e->getMessage());
        Response::json(['error' => 'Settlement failed. Please check server error logs.'], 500);
        return;
    }

        if ($isProxy && $isInstallmentMode && Decimal::comp($downpayment, '0') > 0) {
            $targetLotId = (int)($spawnedLotId ?? $pid ?? $settlement['related_entity_id'] ?? 0);
            if ($targetLotId > 0) {
                $pName = $purchase['name'] ?? "Purchase #{$targetLotId}";
                $remVal = Decimal::sub($valuation, $downpayment);
                SystemLog::write('purchases', 'supplier_payment', $targetLotId, $pName, json_encode([
                    'uid' => $purchase['uid'] ?? null,
                    'supplier_id' => $purchase['supplier_id'] ?? null,
                    'amount_paid_now' => $downpayment,
                    'amount_paid_total' => $downpayment,
                    'remaining' => $remVal,
                    'payment_status' => $payStatus ?? 'partial',
                    'payment_date' => date('Y-m-d'),
                    'due_date' => null,
                    'timing' => 'initial_installment',
                    'new_due_date' => $dueDate ?? null,
                    'note' => 'Initial downpayment via Statements Installments'
                ], JSON_UNESCAPED_UNICODE), (int)$sessionUser);
            }
        }

        $switched = ($initialSource !== $actualSource);
        $sourceLabel = ($actualSource === 'hand') ? 'Cash in Hand' : 'Cash Vault';
        $fmtAmount = Decimal::format($amount, 2) . ' DZD';

        $usersStmt = $db->prepare('SELECT id, username FROM users WHERE id IN (:p1, :p2)');
        $usersStmt->execute(['p1' => (int)$settlement['payer_user_id'], 'p2' => (int)$settlement['payee_user_id']]);
        $userMap = $usersStmt->fetchAll(\PDO::FETCH_KEY_PAIR) ?: [];
        $payerName = $userMap[(int)$settlement['payer_user_id']] ?? ('User #' . (int)$settlement['payer_user_id']);
        $payeeName = $userMap[(int)$settlement['payee_user_id']] ?? ('User #' . (int)$settlement['payee_user_id']);

        SystemLog::write('partner_settlements', 'settled', (int)$id, $settlement['uid'] ?? "Settlement #$id", json_encode([
            'amount'              => $amount,
            'amount_formatted'    => $fmtAmount,
            'payer'               => (int)$settlement['payer_user_id'],
            'payer_name'          => $payerName,
            'payee'               => (int)$settlement['payee_user_id'],
            'payee_name'          => $payeeName,
            'type'                => $settlement['settlement_type'],
            'target_source'       => $initialSource,
            'settled_source'      => $actualSource,
            'source_label'        => $sourceLabel,
            'switched_source'     => $switched,
            'transition'          => $switched ? "Switched from {$initialSource} to {$actualSource}" : "Paid via {$sourceLabel}",
            'bill_id'             => $settlement['bill_id'] ?? null,
            'cycle_id'            => $settlement['cycle_id'] ?? null,
            'related_entity_type' => $settlement['related_entity_type'] ?? null,
            'related_entity_id'   => $settlement['related_entity_id'] ?? null,
            'summary'             => "Settlement #{$id} of {$fmtAmount} paid by {$payerName} to {$payeeName} via {$sourceLabel}"
        ], JSON_UNESCAPED_UNICODE), (int)$sessionUser);

        if ((int)$settlement['payee_user_id'] !== (int)$settlement['payer_user_id'] && (int)$settlement['payee_user_id'] !== (int)$sessionUser) {
            $payeeUid = (int)$settlement['payee_user_id'];
            $stUid = $settlement['uid'] ?? "#STL-{$id}";
            $notifTitle = "Settlement Payment Received ({$stUid})";
            $notifBody = "@{$payerName} settled {$fmtAmount} for {$stUid} via {$sourceLabel}.";
            $notifActionUrl = '#page-bills?tab=settlements';
            $notifEntityType = 'partner_settlements';
            $notifEntityId = (int)$id;
            $notifStage = 'statements:settlement_paid';
            $db->prepare("INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at) VALUES (:uid, 'settlement', :t, :b, :aurl, :etype, :eid, :stage, 0, NOW())")
               ->execute([
                   'uid'   => $payeeUid,
                   't'     => $notifTitle,
                   'b'     => $notifBody,
                   'aurl'  => $notifActionUrl,
                   'etype' => $notifEntityType,
                   'eid'   => $notifEntityId,
                   'stage' => $notifStage
               ]);
        }

        EntityVersion::bump($db, 'partner_settlements', 'cash_vault', 'orders');

        Response::json([
            'ok'                  => true,
            'status'              => $newSettlementStatus,
            'settled_amount'      => $newSettledTotal,
            'amount_claimed_now'  => $amount,
            'remaining_unsettled' => Decimal::sub($totalLiability, $newSettledTotal),
            'is_fully_settled'    => $isFullySettled
        ]);
    }

    /**
     * Dispute a settlement ticket with a reason and optional counter amount.
     */
    public function dispute(string $id, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureTable($db);

        $stmt = $db->prepare('SELECT * FROM partner_settlements WHERE id = :id');
        $stmt->execute(['id' => (int)$id]);
        $s = $stmt->fetch();
        if (!$s) {
            Response::json(['error' => 'Settlement not found'], 404);
            return;
        }

        $sessionUser = (int)($_SESSION['user_id'] ?? 0);
        if ($sessionUser <= 0) {
            Response::json(['error' => 'Unauthorized: Please log in.'], 401);
            return;
        }
        if ($sessionUser !== (int)$s['payer_user_id']) {
            Response::json(['error' => 'Forbidden: Only the assigned debtor can dispute this settlement.'], 403);
            return;
        }

        if (in_array($s['related_entity_type'], ['orders', 'order', 'custom_services', 'custom_service'], true)) {
            Response::json(['error' => 'Dispute is not supported for Orders or Custom Services. Only release is available.'], 400);
            return;
        }

        if (in_array($s['status'], ['settled', 'cancelled'], true) || Decimal::comp((string)($s['settled_amount'] ?? '0'), '0') > 0) {
            Response::json(['error' => 'Cannot dispute a settlement that has already been settled or cancelled.'], 400);
            return;
        }

        if (($s['acceptance_status'] ?? '') === 'accepted') {
            Response::json(['error' => 'Cannot dispute a settlement that has already been accepted.'], 400);
            return;
        }
        $reason = trim((string)($data['reason'] ?? $data['dispute_reason'] ?? ''));
        if ($reason === '') {
            Response::json(['error' => 'Dispute reason is required'], 400);
            return;
        }

        $counterAmt = !empty($data['counter_amount']) && is_numeric($data['counter_amount']) ? Decimal::truncate($data['counter_amount'], 16) : null;
        $details = !empty($s['details']) ? json_decode($s['details'], true) : [];
        if ($counterAmt !== null) {
            $details['counter_amount'] = $counterAmt;
        }

        $db->prepare("UPDATE partner_settlements SET status = 'disputed', disputed_at = NOW(), disputed_by = :uid, dispute_reason = :r, details = :det WHERE id = :id")
           ->execute([
               'uid' => $sessionUser,
               'r'   => $reason,
               'det' => json_encode($details),
               'id'  => (int)$id
           ]);

        SystemLog::write('partner_settlements', 'disputed', (int)$id, $s['uid'] ?? "Settlement #$id", json_encode([
            'disputed_by'         => $sessionUser,
            'reason'              => $reason,
            'counter_amount'      => $counterAmt,
            'amount'              => $s['amount'],
            'payer'               => (int)$s['payer_user_id'],
            'payee'               => (int)$s['payee_user_id'],
            'bill_id'             => $s['bill_id'] ?? null,
            'cycle_id'            => $s['cycle_id'] ?? null,
            'related_entity_type' => $s['related_entity_type'] ?? null,
            'related_entity_id'   => $s['related_entity_id'] ?? null
        ]), $sessionUser);

        if ((int)$s['payee_user_id'] > 0 && (int)$s['payee_user_id'] !== $sessionUser) {
            $payeeUid = (int)$s['payee_user_id'];
            $stUid = $s['uid'] ?? "#STL-{$id}";
            $disputerName = $_SESSION['username'] ?? "User #{$sessionUser}";
            $notifTitle = "Settlement Disputed ({$stUid})";
            $notifBody = "@{$disputerName} disputed {$stUid}: \"{$reason}\"";
            if ($counterAmt !== null) {
                $notifBody .= " (Counter amount: " . Decimal::trimZero($counterAmt) . ")";
            }
            $notifActionUrl = '#page-bills?tab=settlements';
            $notifEntityType = 'partner_settlements';
            $notifEntityId = (int)$id;
            $notifStage = 'statements:settlement_disputed';
            $db->prepare("INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at) VALUES (:uid, 'settlement', :t, :b, :aurl, :etype, :eid, :stage, 0, NOW())")
               ->execute([
                   'uid'   => $payeeUid,
                   't'     => $notifTitle,
                   'b'     => $notifBody,
                   'aurl'  => $notifActionUrl,
                   'etype' => $notifEntityType,
                   'eid'   => $notifEntityId,
                   'stage' => $notifStage
               ]);
        }

        EntityVersion::bump($db, 'partner_settlements', 'cash_vault', 'orders');

        Response::json(['ok' => true]);
    }

    /**
     * Refuse a settlement ticket (debtor declines the obligation).
     * Marks status as 'refused' and freezes all settlements for this bill cycle.
     */
    public function refuse(string $id, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureTable($db);
        OrdersController::ensureOrderMetaColumns($db);
        $db->beginTransaction();
        try {
            $stmt = $db->prepare('SELECT ps.*, 
                pu.username AS debtor_name,
                py.username AS creditor_name
                FROM partner_settlements ps
                LEFT JOIN users pu ON ps.payer_user_id = pu.id
                LEFT JOIN users py ON ps.payee_user_id = py.id
                WHERE ps.id = :id FOR UPDATE');
            $stmt->execute(['id' => (int)$id]);
            $s = $stmt->fetch();
            if (!$s) {
                $db->rollBack();
                Response::json(['error' => 'Settlement not found'], 404);
                return;
            }

            $sessionUser = (int)($_SESSION['user_id'] ?? 0);
            if ($sessionUser <= 0) {
                $db->rollBack();
                Response::json(['error' => 'Unauthorized: Please log in.'], 401);
                return;
            }
            if (($s['settlement_type'] ?? '') === 'order_return_clawback') {
                $db->rollBack();
                Response::json(['error' => 'Invalid action: Please use the accept-clawback / refuse-clawback endpoint for return clawbacks.'], 400);
                return;
            }
            $isOrderSettlement = (
                in_array($s['related_entity_type'] ?? '', ['orders', 'order', 'custom_services', 'custom_service'], true) || 
                in_array($s['settlement_type'] ?? '', [
                    'parts_cost_recovery', 'parts_profit_share', 'sale_cost_recovery', 
                    'service_profit_share', 'service_cost_recovery', 'service_owner_statement',
                    'manual_cost_recovery', 'manual_cost_markup', 'manual_outlay_recovery'
                ], true)
            );
            $authorizedUserId = $isOrderSettlement ? (int)$s['payee_user_id'] : (int)$s['payer_user_id'];
            if ($sessionUser !== $authorizedUserId) {
                $db->rollBack();
                Response::json(['error' => 'Forbidden: You are not authorized to refuse this settlement.'], 403);
                return;
            }

            // Resolve parent entity IDs
            $billId = (int)($s['bill_id'] ?? 0);
            $cycleId = (int)($s['cycle_id'] ?? 0);
            $oeId = 0;
            if (!$billId && ($s['related_entity_type'] ?? '') === 'recurring_bills') {
                $billId = (int)$s['related_entity_id'];
            }
            if (!$cycleId && ($s['related_entity_type'] ?? '') === 'recurring_bill_cycle') {
                $cycleId = (int)$s['related_entity_id'];
            }
            if (($s['related_entity_type'] ?? '') === 'operating_expense' || $s['settlement_type'] === 'expense_split') {
                $oeId = (int)($s['related_entity_id'] ?? 0);
            }
            if ($cycleId > 0 && !$billId) {
                $bRow = $db->query("SELECT bill_id FROM recurring_bill_cycles WHERE id = {$cycleId}")->fetch();
                if ($bRow) $billId = (int)$bRow['bill_id'];
            }

            // 1. If settlement itself is already settled or cancelled, refusal is prohibited
            if ($s['status'] === 'settled' || $s['status'] === 'cancelled') {
                $db->rollBack();
                Response::json(['error' => 'Cannot refuse a settlement share that is already settled or cancelled.'], 400);
                return;
            }

            // Purchases Domain Irreversible Acceptance Guard (Rule 25 Isolated): Once accepted, refusal is strictly prohibited
            if ((($s['related_entity_type'] ?? '') === 'purchases' || in_array($s['settlement_type'] ?? '', ['delegated_purchase', 'stock_transfer'], true)) && ($s['acceptance_status'] ?? '') === 'accepted') {
                $db->rollBack();
                Response::json(['error' => 'Cannot refuse: Ownership has already been accepted.'], 400);
                return;
            }

            // Parent deleted / voided guard & exclusive lock
            $oeData = null;
            if ($oeId > 0) {
                $oeLock = $db->prepare("SELECT id, deleted_at, agreement_status, is_locked_for_edit, settlement_status FROM operating_expenses WHERE id = :oeid FOR UPDATE");
                $oeLock->execute(['oeid' => $oeId]);
                $oeCheck = $oeLock->fetch();
                if ($oeCheck && $oeCheck['deleted_at'] !== null) {
                    $db->rollBack();
                    Response::json(['error' => 'Cannot refuse a share for a deleted operating expense.'], 400);
                    return;
                }
                $oeData = $oeCheck;
            }
            $cData = null;
            if ($cycleId > 0) {
                $cLock = $db->prepare("SELECT id, voided_at, bill_created, agreement_status, is_locked_for_edit FROM recurring_bill_cycles WHERE id = :cid FOR UPDATE");
                $cLock->execute(['cid' => $cycleId]);
                $cCheck = $cLock->fetch();
                if ($cCheck && ($cCheck['voided_at'] !== null || (int)$cCheck['bill_created'] === 0)) {
                    $db->rollBack();
                    Response::json(['error' => 'Cannot refuse a share for a voided or reset bill cycle.'], 400);
                    return;
                }
                $cData = $cCheck;
            }
            if ($billId > 0) {
                $bLock = $db->prepare("SELECT id, deleted_at, agreement_status, has_refusal FROM recurring_bills WHERE id = :bid FOR UPDATE");
                $bLock->execute(['bid' => $billId]);
                $bCheck = $bLock->fetch();
                if ($bCheck && $bCheck['deleted_at'] !== null) {
                    $db->rollBack();
                    Response::json(['error' => 'Cannot refuse a share for a deleted bill.'], 400);
                    return;
                }
            }

            // 2. Check if parent agreement has reached 100% consensus (Payment Phase)
            $isPaymentPhaseLocked = false;
            if ($oeId > 0 && $oeData) {
                if ($oeData['agreement_status'] === 'all_accepted' || !empty($oeData['is_locked_for_edit']) || ($oeData['settlement_status'] ?? '') === 'settled') {
                    $isPaymentPhaseLocked = true;
                }
            } elseif ($cycleId > 0 && $cData) {
                if ($cData['agreement_status'] === 'all_accepted' || !empty($cData['is_locked_for_edit'])) {
                    $isPaymentPhaseLocked = true;
                }
            } elseif ($billId > 0) {
            $bData = $db->query("SELECT agreement_status, is_locked_for_edit, settlement_status FROM recurring_bills WHERE id = {$billId}")->fetch();
            if ($bData && ($bData['agreement_status'] === 'all_accepted' || !empty($bData['is_locked_for_edit']) || ($bData['settlement_status'] ?? '') === 'settled')) {
                $isPaymentPhaseLocked = true;
            }
        } elseif ($isOrderSettlement && !empty($s['related_entity_id'])) {
            $ordId = (int)$s['related_entity_id'];
            $ordData = $db->query("SELECT status, agreement_status, is_locked_for_edit, amount_paid, custom_sale FROM orders WHERE id = {$ordId}")->fetch();
            if ($ordData) {
                // Rule 86 / Rule 61 Universal Invariant:
                // Refusal is strictly barred in Phase 2 for all accepted orders (both POS and Custom Services).
                // Phase 2 is reached when 100% consensus is achieved: agreement_status === 'all_accepted' OR is_locked_for_edit = 1.
                if (in_array($ordData['status'], ['completed', 'delivered'], true)) {
                    $isPaymentPhaseLocked = true;
                }
                if ($ordData['agreement_status'] === 'all_accepted' || !empty($ordData['is_locked_for_edit'])) {
                    // For custom services, newly added Phase 2 participants whose own settlement is still 'pending' can refuse their new addition;
                    // otherwise, any accepted participant or standard order participant in Phase 2 is locked!
                    if (empty($ordData['custom_sale']) || ($s['acceptance_status'] ?? 'pending') === 'accepted') {
                        $isPaymentPhaseLocked = true;
                    }
                }
            }
        }

        // If Phase 2 (all partners accepted) is already active, refusal is strictly locked for accepted partners
        if ($isPaymentPhaseLocked) {
            $db->rollBack();
            Response::json([
                'error'  => 'Cannot refuse: Agreement has reached 100% consensus / payment phase. Only payment is allowed.',
                'locked' => true,
                'phase'  => 'all_accepted'
            ], 422);
            return;
        }

        $reason = trim((string)($data['reason'] ?? $data['refusal_reason'] ?? $data['dispute_reason'] ?? ''));
        if ($reason === '') {
            $db->rollBack();
            Response::json(['error' => 'Refusal reason is required.'], 400);
            return;
        }

        $details = !empty($s['details']) ? (is_array($s['details']) ? $s['details'] : json_decode($s['details'], true)) : [];
        $details['refused_by_name'] = $isOrderSettlement ? ($s['creditor_name'] ?? 'Stock Owner') : ($s['debtor_name'] ?? 'Partner');

        $order = null;
        $isCustomService = false;
        $siblingId = 0;

        if ($isOrderSettlement) {
            $ordId = (int)$s['related_entity_id'];

            // Lock Hierarchy Harmonization: Always acquire parent 'orders' row lock first,
            // then child 'partner_settlements' row lock to prevent cross-transaction deadlocks with OrdersController::pay.
            $orderStmt = $db->prepare('SELECT * FROM orders WHERE id = :oid FOR UPDATE');
            $orderStmt->execute(['oid' => $ordId]);
            $order = $orderStmt->fetch();

            if (!$order) {
                $db->rollBack();
                Response::json(['error' => 'Associated order not found.'], 404);
                return;
            }

            // Guard: For regular orders, payments block refusal (must use return workflow)
            // For custom services (custom_sale=1), deposits are expected and don't block refusal
            $isCustomService = !empty($order['custom_sale']);
            if (!$isCustomService && Decimal::comp((string)($order['amount_paid'] ?? '0'), '0') > 0) {
                $db->rollBack();
                Response::json(['error' => 'This order has recorded customer payments and cannot be cancelled by refusal. Please use the Return / Refund workflow instead.'], 400);
                return;
            }

            if (!$isCustomService) {
                $custPayCheck = $db->prepare("SELECT 1 FROM cash_transactions WHERE related_entity_type = 'orders' AND related_entity_id = :id AND direction = 'in' LIMIT 1");
                $custPayCheck->execute(['id' => $ordId]);
                if ($custPayCheck->fetch()) {
                    $db->rollBack();
                    Response::json(['error' => 'This order has recorded cash transactions and cannot be cancelled by refusal. Please use the Return / Refund workflow instead.'], 400);
                    return;
                }
            }

            if (!empty($s['linked_settlement_id'])) {
                $siblingId = (int)$s['linked_settlement_id'];
            } else {
                $sibStmt = $db->prepare("SELECT id FROM partner_settlements 
                    WHERE related_entity_type = 'orders' AND related_entity_id = :oid 
                      AND payer_user_id = :payer AND payee_user_id = :payee 
                      AND id != :id AND status != 'cancelled'
                      AND settlement_type != 'order_return_clawback' LIMIT 1");
                $sibStmt->execute([
                    'oid'   => $ordId,
                    'payer' => $s['payer_user_id'],
                    'payee' => $s['payee_user_id'],
                    'id'    => (int)$id
                ]);
                $sibRow = $sibStmt->fetch();
                if ($sibRow) $siblingId = (int)$sibRow['id'];
            }
        }

        // Update settlement to refused (revoking prior acceptance if user had accepted in Phase 1)
        $db->prepare("UPDATE partner_settlements 
            SET status = 'refused', acceptance_status = 'refused', accepted_at = NULL, accepted_by = NULL, refused_at = NOW(), refused_by = :uid, refusal_reason = :r, 
                disputed_at = NULL, disputed_by = NULL, dispute_reason = NULL, details = :det 
            WHERE id = :id")
           ->execute([
               'uid'  => $sessionUser,
               'r'    => $reason,
               'det'  => json_encode($details),
               'id'   => (int)$id
           ]);

        if ($isOrderSettlement) {

            // === CUSTOM SERVICE BRANCH: Flag refusal, do NOT delete order ===
            if ($isCustomService) {
                $isPhase2Order = !empty($order['is_locked_for_edit']);
                if (!$isPhase2Order) {
                    // Phase 1 Refusal: Mark the order as having a refusal (allows re-edit and resubmit)
                    $db->prepare("UPDATE orders SET agreement_status = 'has_refusal', has_refusal = 1, is_locked_for_edit = 0 WHERE id = :oid")
                       ->execute(['oid' => $ordId]);

                    // Mark all sibling settlements belonging to this payee for this order as refused (keep non-cancelled so visible in Phase 1)
                    $db->prepare("UPDATE partner_settlements 
                        SET status = 'refused', 
                            acceptance_status = 'refused', 
                            accepted_at = NULL,
                            accepted_by = NULL,
                            refused_at = NOW(), 
                            refused_by = :uid, 
                            refusal_reason = :r
                        WHERE related_entity_type = 'orders' 
                          AND related_entity_id = :oid 
                          AND payee_user_id = :payee 
                          AND id != :id 
                          AND status NOT IN ('settled', 'cancelled')
                          AND settlement_type != 'order_return_clawback'")
                       ->execute([
                           'uid'   => $sessionUser,
                           'r'     => $reason,
                           'oid'   => $ordId,
                           'payee' => $s['payee_user_id'],
                           'id'    => (int)$id
                       ]);
                } else {
                    // Phase 2 Refusal by newly added partner:
                    // Keep order permanently in Phase 2 (do NOT halt payments or stage changes).
                    // Only mark unaccepted sibling settlements of this payee as refused.
                    $db->prepare("UPDATE partner_settlements 
                        SET status = 'refused', 
                            acceptance_status = 'refused', 
                            refused_at = NOW(), 
                            refused_by = :uid, 
                            refusal_reason = :r
                        WHERE related_entity_type = 'orders' 
                          AND related_entity_id = :oid 
                          AND payee_user_id = :payee 
                          AND id != :id 
                          AND acceptance_status != 'accepted'
                          AND status NOT IN ('settled', 'cancelled')
                          AND settlement_type != 'order_return_clawback'")
                       ->execute([
                           'uid'   => $sessionUser,
                           'r'     => $reason,
                           'oid'   => $ordId,
                           'payee' => $s['payee_user_id'],
                           'id'    => (int)$id
                       ]);
                    OrdersController::syncOrderAgreementStatus($db, $ordId);
                }

                // Record in order_history
                $db->prepare('INSERT INTO order_history (order_id, edited_by, action, changes, created_at) VALUES (:oid, :uid, "refusal_flagged", :ch, NOW())')
                   ->execute([
                       'oid' => $ordId,
                       'uid' => $sessionUser,
                       'ch'  => json_encode([
                           'action'                => 'custom_service_refusal',
                           'refusal_reason'        => $reason,
                           'refused_settlement_id' => (int)$id,
                           'sibling_cancelled'     => $siblingId > 0,
                           'order_preserved'       => true
                       ], JSON_UNESCAPED_UNICODE)
                   ]);

                SystemLog::write('custom_services', 'refusal_flagged', $ordId, $order['service_name'] ?? "Service #$ordId", json_encode([
                    'uid'             => $order['uid'] ?? null,
                    'refusal_reason'  => $reason,
                    'refused_by'      => $sessionUser,
                    'settlement_id'   => (int)$id,
                    'order_preserved' => true
                ]), $sessionUser);

                // Notify the order owner that a partner has refused
                SystemLog::write('partner_settlements', 'refusal_alert', $ordId, $order['service_name'] ?? "Service #$ordId", json_encode([
                    'order_id'        => $ordId,
                    'order_uid'       => $order['uid'] ?? null,
                    'target_user_id'  => (int)$order['owner_user_id'],
                    'refusal_reason'  => $reason,
                    'refused_by'      => $sessionUser,
                    'entity_type'     => 'custom_service',
                    'action'          => 'partner_refused'
                ]), $sessionUser);

                $db->commit();
                Response::json([
                    'ok'               => true,
                    'custom_service'   => true,
                    'order_preserved'  => true,
                    'agreement_status' => 'has_refusal',
                    'message'          => 'Settlement refused. The custom service order can be re-edited and resubmitted.'
                ]);
                return;
            }
            // === NORMAL ORDER BRANCH: Non-destructive refusal (mirrors custom services) ===
            // Preserve the order — allow re-edit and resubmit instead of destroying it

            // 3. Mark the order as having a refusal (unlock for re-edit, do NOT delete)
            $db->prepare("UPDATE orders SET agreement_status = 'has_refusal', has_refusal = 1, is_locked_for_edit = 0, refused_at = NOW(), refused_by = :uid, refusal_reason = :r WHERE id = :oid")
               ->execute(['uid' => $sessionUser, 'r' => $reason, 'oid' => $ordId]);

            // 4. Mark the refused settlement as refused (keep status = 'refused', NOT 'cancelled' so it is not hidden)
            $db->prepare("UPDATE partner_settlements 
                SET status = 'refused', 
                    acceptance_status = 'refused', 
                    refused_at = NOW(), 
                    refused_by = :uid, 
                    refusal_reason = :r,
                    release_status = 'revoked'
                WHERE id = :id")
               ->execute([
                   'uid'   => $sessionUser,
                   'r'     => $reason,
                   'id'    => (int)$id
               ]);

            // 5. Mark all sibling settlements belonging to this payee for this order as refused
            $sibRefuseMsg = "Linked settlement refused by stock owner: {$reason}";
            $db->prepare("UPDATE partner_settlements 
                SET status = 'refused', 
                    acceptance_status = 'refused', 
                    refused_at = NOW(), 
                    refused_by = :uid, 
                    refusal_reason = :r,
                    release_status = 'revoked'
                WHERE related_entity_type = 'orders' 
                  AND related_entity_id = :oid 
                  AND payee_user_id = :payee 
                  AND id != :id 
                  AND status != 'settled'
                  AND settlement_type != 'order_return_clawback'
                  AND settlement_type != 'service_owner_statement'")
               ->execute([
                   'uid'   => $sessionUser,
                   'r'     => $sibRefuseMsg,
                   'oid'   => $ordId,
                   'payee' => $s['payee_user_id'],
                   'id'    => (int)$id
               ]);

            // 6. Record in order_history
            $db->prepare('INSERT INTO order_history (order_id, edited_by, action, changes, created_at) VALUES (:oid, :uid, "refusal_flagged", :ch, NOW())')
               ->execute([
                   'oid' => $ordId,
                   'uid' => $sessionUser,
                   'ch'  => json_encode([
                       'action'                => 'consignment_order_refusal',
                       'refusal_reason'        => $reason,
                       'refused_settlement_id' => (int)$id,
                       'sibling_cancelled'     => $siblingId > 0,
                       'order_preserved'       => true,
                       'inventory_kept'        => true
                   ], JSON_UNESCAPED_UNICODE)
               ]);

            // 7. SystemLog for audit trail
            SystemLog::write('orders', 'refusal_flagged', $ordId, $order['service_name'] ?? "Order #$ordId", json_encode([
                'uid'             => $order['uid'] ?? null,
                'refusal_reason'  => $reason,
                'refused_by'      => $sessionUser,
                'settlement_id'   => (int)$id,
                'order_preserved' => true,
                'inventory_kept'  => true
            ]), $sessionUser);

            // 8. Notify the order owner / seller that a stock owner has refused
            $sellerId = (int)($order['owner_user_id'] ?? $order['created_by'] ?? $s['payer_user_id']);
            if ($sellerId > 0 && $sellerId !== $sessionUser) {
                $orderUid = $order['uid'] ?? ('ORD-' . $ordId);
                $refuserStmt = $db->prepare("SELECT username FROM users WHERE id = :uid LIMIT 1");
                $refuserStmt->execute(['uid' => $sessionUser]);
                $refuserName = $refuserStmt->fetchColumn() ?: 'Stock Owner';

                $notifIns = $db->prepare("INSERT INTO notifications 
                    (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at)
                    VALUES (:uid, 'settlement', :t, :b, :aurl, 'orders', :eid, :stage, 0, NOW())");
                $notifIns->execute([
                    'uid'   => $sellerId,
                    't'     => "Consignment Terms Refused: #{$orderUid}",
                    'b'     => "@{$refuserName} refused consignment terms for Order #{$orderUid}: \"{$reason}\". Order has been preserved and unlocked for revision.",
                    'aurl'  => "#order-details:{$ordId}",
                    'eid'   => $ordId,
                    'stage' => "order_refused_{$ordId}"
                ]);
            }

            SystemLog::write('partner_settlements', 'refusal_alert', $ordId, $order['service_name'] ?? "Order #$ordId", json_encode([
                'order_id'        => $ordId,
                'order_uid'       => $order['uid'] ?? null,
                'target_user_id'  => (int)$order['owner_user_id'],
                'refusal_reason'  => $reason,
                'refused_by'      => $sessionUser,
                'entity_type'     => 'consignment_order',
                'action'          => 'partner_refused'
            ]), $sessionUser);

            if ($db->inTransaction()) {
                $db->commit();
            }
            EntityVersion::bump($db, 'orders', 'partner_settlements');
            Response::json([
                'ok'               => true,
                'order_preserved'  => true,
                'agreement_status' => 'has_refusal',
                'message'          => 'Settlement refused. The order has been preserved and can be re-edited and resubmitted.'
            ]);
            return;
        }

        $billName = 'Bill';
        if ($billId > 0) {
            $bRow = $db->query("SELECT name, is_archived FROM recurring_bills WHERE id = {$billId}")->fetch();
            if ($bRow) $billName = $bRow['name'];
            $isArchivedBill = !empty($bRow['is_archived']);
            if ($cycleId === 0 || $isArchivedBill) {
                $db->prepare("UPDATE recurring_bills 
                    SET has_refusal = 1, settlement_status = 'refused', agreement_status = 'refused', is_locked_for_edit = 0, refused_at = NOW(), refused_by = :uid, refusal_reason = :r 
                    WHERE id = :bid")
                   ->execute(['uid' => $sessionUser, 'r' => $reason, 'bid' => $billId]);
            } else {
                $db->prepare("UPDATE recurring_bills 
                    SET has_refusal = 1, is_locked_for_edit = 0 
                    WHERE id = :bid")
                   ->execute(['bid' => $billId]);
            }
        }
        if ($cycleId > 0) {
            $db->prepare("UPDATE recurring_bill_cycles 
                SET has_refusal = 1, split_status = 'refused', agreement_status = 'refused', is_locked_for_edit = 0, note = CONCAT(COALESCE(note, ''), ' [REFUSED by ', :uname, ': ', :r, ']') 
                WHERE id = :cid")
               ->execute(['uname' => $s['debtor_name'] ?: "User #$sessionUser", 'r' => $reason, 'cid' => $cycleId]);
        }

        $oeName = 'Expense';
        if ($oeId > 0) {
            $oeRow = $db->query("SELECT description FROM operating_expenses WHERE id = {$oeId}")->fetch();
            if ($oeRow && !empty($oeRow['description'])) $oeName = $oeRow['description'];
            $db->prepare("UPDATE operating_expenses 
                SET has_refusal = 1, settlement_status = 'refused', agreement_status = 'refused', is_locked_for_edit = 0, 
                    refused_at = NOW(), refused_by = :uid, refusal_reason = :r 
                WHERE id = :oeid")
               ->execute(['uid' => $sessionUser, 'r' => $reason, 'oeid' => $oeId]);

            try {
                $hist = $db->prepare("INSERT INTO expense_history 
                    (expense_id, edited_by, action, changes, reason, created_at) 
                    VALUES (:oeid, :uid, 'settlement_refused', :ch, :r, NOW())");
                $hist->execute([
                    'oeid' => $oeId,
                    'uid'  => $sessionUser,
                    'ch'   => json_encode([
                        'settlement_id'  => (int)$id,
                        'refused_by'     => $s['debtor_name'] ?: "User #$sessionUser",
                        'refusal_reason' => $reason,
                        'share_amount'   => rtrim(rtrim((string)$s['amount'], '0'), '.') ?: '0'
                    ]),
                    'r'    => "Partner {$s['debtor_name']} refused share: \"{$reason}\""
                ]);

                SystemLog::write('operating_expenses', 'settlement_refused', $oeId, $oeName, json_encode([
                    'settlement_id'  => (int)$id,
                    'refused_by'     => $sessionUser,
                    'debtor_name'    => $s['debtor_name'],
                    'share_amount'   => rtrim(rtrim((string)$s['amount'], '0'), '.') ?: '0',
                    'refusal_reason' => $reason,
                    'expense_id'     => $oeId
                ]), $sessionUser);
            } catch (\Exception $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }
        }

        if ($billId > 0) {
            try {
                $hist = $db->prepare("INSERT INTO expense_history 
                    (bill_id, cycle_id, edited_by, action, changes, reason, created_at) 
                    VALUES (:bid, :cid, :uid, 'settlement_refused', :ch, :r, NOW())");
                $hist->execute([
                    'bid' => $billId,
                    'cid' => $cycleId ?: null,
                    'uid' => $sessionUser,
                    'ch'  => json_encode([
                        'settlement_id'  => (int)$id,
                        'refused_by'     => $s['debtor_name'] ?: "User #$sessionUser",
                        'refusal_reason' => $reason,
                        'share_amount'   => rtrim(rtrim((string)$s['amount'], '0'), '.') ?: '0'
                    ]),
                    'r'   => "Partner {$s['debtor_name']} refused share: \"{$reason}\""
                ]);

                SystemLog::write('recurring_bills', 'settlement_refused', $billId, $billName, json_encode([
                    'settlement_id'  => (int)$id,
                    'refused_by'     => $sessionUser,
                    'debtor_name'    => $s['debtor_name'],
                    'refusal_reason' => $reason,
                    'bill_id'        => $billId
                ]), $sessionUser);
            } catch (\Exception $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }
        }

        // Notification Dispatch: Refusal alert to creator AND all selected split partners (strictly excluding refuser)
        $creatorUid = 0;
        if ($oeId > 0) {
            $creatorUid = (int)$db->query("SELECT created_by FROM operating_expenses WHERE id = {$oeId}")->fetchColumn();
        } elseif ($billId > 0) {
            $creatorUid = (int)$db->query("SELECT created_by FROM recurring_bills WHERE id = {$billId}")->fetchColumn();
        }
        if (!$creatorUid) {
            $creatorUid = (int)($s['created_by'] ?? $s['payee_user_id']);
        }

        // Fetch all partners participating in this split
        $splitPartnerIds = [];
        if ($oeId > 0) {
            $pStmt = $db->prepare("SELECT DISTINCT payer_user_id FROM partner_settlements WHERE related_entity_type = 'operating_expense' AND related_entity_id = :eid AND status != 'cancelled'");
            $pStmt->execute(['eid' => $oeId]);
            $splitPartnerIds = $pStmt->fetchAll(PDO::FETCH_COLUMN) ?: [];
        } elseif ($billId > 0 || $cycleId > 0) {
            $pStmt = $db->prepare("SELECT DISTINCT payer_user_id FROM partner_settlements WHERE (bill_id = :bid OR cycle_id = :cid OR (related_entity_type = 'recurring_bill_cycle' AND related_entity_id = :cid2)) AND status != 'cancelled'");
            $pStmt->execute(['bid' => $billId, 'cid' => $cycleId, 'cid2' => $cycleId]);
            $splitPartnerIds = $pStmt->fetchAll(PDO::FETCH_COLUMN) ?: [];
        }

        $recipients = [];
        // 1. Creator (always notified)
        if ($creatorUid > 0 && $creatorUid !== (int)$sessionUser) {
            $recipients[] = $creatorUid;
        }
        // 2. All other split participants
        foreach ($splitPartnerIds as $pId) {
            $pIdInt = (int)$pId;
            if ($pIdInt > 0 && $pIdInt !== (int)$sessionUser && !in_array($pIdInt, $recipients, true)) {
                $recipients[] = $pIdInt;
            }
        }
        // 3. Payee (if distinct)
        $payeeUid = (int)($s['payee_user_id'] ?? 0);
        if ($payeeUid > 0 && $payeeUid !== (int)$sessionUser && !in_array($payeeUid, $recipients, true)) {
            $recipients[] = $payeeUid;
        }

        $isArchivedBill = false;
        if ($billId > 0) {
            $isArchivedBill = (bool)$db->query("SELECT is_archived FROM recurring_bills WHERE id = {$billId}")->fetchColumn();
        }

        $isStockTransfer = (($s['settlement_type'] ?? '') === 'stock_transfer');
        $isPurchase = (($s['related_entity_type'] ?? '') === 'purchases' || ($s['settlement_type'] ?? '') === 'proxy_purchase' || ($s['settlement_type'] ?? '') === 'delegated_purchase' || $isStockTransfer);
        if (!empty($s['details'])) {
            $sDetails = is_array($s['details']) ? $s['details'] : json_decode($s['details'], true);
            if (!empty($sDetails['is_proxy_purchase']) || !empty($sDetails['is_delegated_purchase']) || !empty($sDetails['is_stock_transfer'])) {
                $isPurchase = true;
            }
            if (!empty($sDetails['is_stock_transfer'])) {
                $isStockTransfer = true;
            }
        }

        if ($isPurchase) {
            $purchaseTypeLabel = $isStockTransfer ? 'Stock Transfer' : 'Delegated Purchase';
            $creatorTitle = "{$purchaseTypeLabel} Refused: {$s['debtor_name']}";
            $creatorBody = $isStockTransfer
                ? "Partner {$s['debtor_name']} refused the stock transfer. Reason: '{$reason}'. The stock lot was restored."
                : "Partner {$s['debtor_name']} refused the delegated purchase. Reason: '{$reason}'. The purchase lot was cancelled and product stock reverted.";
            $partnerTitle = "{$purchaseTypeLabel} Refused";
            $partnerBody = "You refused the {$purchaseTypeLabel}. Reason: '{$reason}'.";
            $creatorActionUrl = '#page-purchases';
            $partnerActionUrl = '#page-bills?tab=settlements';
        } elseif ($isOrderSettlement) {
            $ordId = (int)($s['related_entity_id'] ?? 0);
            $orderUid = $s['order_uid_code'] ?? ('ORD-' . $ordId);
            $creditorName = $s['creditor_name'] ?? 'Stock Owner';
            $creatorTitle = "Consignment Terms Declined: #{$orderUid}";
            $creatorBody  = "@{$creditorName} declined consignment terms for Order #{$orderUid}. Reason: '{$reason}'. The order has been cancelled and stock restored to their inventory.";
            $partnerTitle = "Consignment Terms Declined";
            $partnerBody  = "You declined consignment terms for Order #{$orderUid}. Reason: '{$reason}'. The order was cancelled and your stock was restored.";
            $creatorActionUrl = "#order-details:{$ordId}";
            $partnerActionUrl = "#order-details:{$ordId}";
        } else {
            $creatorTitle = ($oeId > 0)
                ? "Settlement Refusal: {$s['debtor_name']} refused expense '{$oeName}'"
                : "Settlement Refusal: {$s['debtor_name']} refused bill '{$billName}'";
            $creatorBody  = ($oeId > 0)
                ? "Settlement Refusal: {$s['debtor_name']} refused expense '{$oeName}'. Reason: '{$reason}'. Expense is now editable for revision."
                : "Settlement Refusal: {$s['debtor_name']} refused bill '{$billName}'. Reason: '{$reason}'. Bill is now locked pending partner revision.";

            $partnerTitle = ($oeId > 0)
                ? "Partner Refused Share: {$s['debtor_name']} refused '{$oeName}'"
                : "Partner Refused Share: {$s['debtor_name']} refused '{$billName}'";
            $partnerBody  = ($oeId > 0)
                ? "Partner {$s['debtor_name']} refused their split share for '{$oeName}'. Reason: '{$reason}'. The agreement is currently pending creator revision."
                : "Partner {$s['debtor_name']} refused their split share for '{$billName}'. Reason: '{$reason}'. The agreement is currently pending creator revision.";
            $creatorActionUrl = ($oeId > 0) ? '#page-bills?tab=operating' : ($isArchivedBill ? '#page-bills?tab=archived' : '#page-bills?tab=settlements');
            $partnerActionUrl = '#page-bills?tab=settlements';
        }

        $refusalStage = $isOrderSettlement ? "order_refused_{$ordId}" : ('refusal_' . (int)$id);
        $notifIns = $db->prepare("INSERT INTO notifications 
            (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at)
            VALUES (:uid, 'settlement', :t, :b, :aurl, :etype, :eid, :stage, 0, NOW())");

        foreach ($recipients as $targetUid) {
            $isCreator = ($targetUid === $creatorUid);
            $notifIns->execute([
                'uid'   => $targetUid,
                't'     => $isCreator ? $creatorTitle : $partnerTitle,
                'b'     => $isCreator ? $creatorBody : $partnerBody,
                'aurl'  => $isCreator ? $creatorActionUrl : $partnerActionUrl,
                'etype' => $isOrderSettlement ? 'orders' : 'partner_settlement',
                'eid'   => $isOrderSettlement ? $ordId : (int)$id,
                'stage' => $refusalStage
            ]);
        }

        // Mark demand notifications as read for the refuser
        $db->prepare("UPDATE notifications SET is_read = 1 
            WHERE user_id = :uid AND entity_type = 'partner_settlement' AND entity_id = :eid")
           ->execute(['uid' => $sessionUser, 'eid' => (int)$id]);

        // If this settlement is a stock transfer or proxy purchase, unlock or soft-delete the purchase lot
        if (($s['settlement_type'] === 'stock_transfer' || $s['settlement_type'] === 'proxy_purchase' || ($s['related_entity_type'] ?? '') === 'purchases') && !empty($s['related_entity_id'])) {
            $isProxy = false;
            if (!empty($s['details'])) {
                $sDetails = is_array($s['details']) ? $s['details'] : json_decode($s['details'], true);
                if (!empty($sDetails['is_proxy_purchase']) || !empty($sDetails['is_delegated_purchase'])) {
                    $isProxy = true;
                }
            }
            if ($s['settlement_type'] === 'proxy_purchase') {
                $isProxy = true;
            }

            $pid = (int)$s['related_entity_id'];
            $pStmt = $db->prepare('SELECT * FROM purchases WHERE id = :pid FOR UPDATE');
            $pStmt->execute(['pid' => $pid]);
            $purchase = $pStmt->fetch();

            if ($purchase) {
                $parentId = !empty($purchase['created_from_purchase_id']) ? (int)$purchase['created_from_purchase_id'] : null;
                if ($parentId) {
                    // Child lot from partial transfer fork: Restore units to parent lot & soft-delete child
                    $pStmt2 = $db->prepare('SELECT * FROM purchases WHERE id = :pid FOR UPDATE');
                    $pStmt2->execute(['pid' => $parentId]);
                    $parent = $pStmt2->fetch();
                    if ($parent && $parent['deleted_at'] === null) {
                        $childQty = (string)($purchase['quantity'] ?? '0');
                        $childRem = (string)($purchase['quantity_remaining'] ?? '0');
                        $childUnitCost = (string)($purchase['price'] ?? '0');

                        $restoredQty = Decimal::add((string)$parent['quantity'], $childQty);
                        $restoredRem = Decimal::add((string)$parent['quantity_remaining'], $childRem);
                        $restoredTotal = Decimal::mul((string)$parent['price'], $restoredQty);
                        $restoredPaid = Decimal::min(Decimal::add((string)$parent['amount_paid'], Decimal::mul($childUnitCost, $childQty)), $restoredTotal);

                        $db->prepare('UPDATE purchases SET
                            quantity = :qty,
                            quantity_remaining = :qty_rem,
                            total = :total,
                            amount_paid = :amount_paid
                        WHERE id = :id')->execute([
                            'qty' => $restoredQty,
                            'qty_rem' => $restoredRem,
                            'total' => $restoredTotal,
                            'amount_paid' => $restoredPaid,
                            'id' => $parentId,
                        ]);
                    }
                    $db->prepare('UPDATE purchases SET
                        deleted_at = NOW(),
                        deleted_by = :uid,
                        delete_reason = :reason,
                        quantity_remaining = 0,
                        transfer_status = "cancelled"
                    WHERE id = :id')->execute([
                        'uid' => $sessionUser,
                        'reason' => $reason ?: 'Transfer refused - merged back into parent lot',
                        'id' => $pid,
                    ]);
                } elseif ($isProxy || (!empty($purchase['created_by']) && (int)$purchase['created_by'] !== (int)($purchase['owner_user_id'] ?? 0) && $purchase['payment_status'] !== 'paid')) {
                    // Proxy purchase rejected: Revert products.quantity and soft-delete purchase
                    $remQty = $purchase['quantity_remaining'] ?? $purchase['quantity'] ?? '0';
                    if (Decimal::comp($remQty, '0') > 0) {
                        $db->prepare('UPDATE products SET quantity = GREATEST(0, quantity - :qty), updated_at = NOW() WHERE id = :prod_id')
                           ->execute(['qty' => $remQty, 'prod_id' => $purchase['product_id']]);
                    }
                    $db->prepare('UPDATE purchases SET
                        deleted_at = NOW(),
                        deleted_by = :uid,
                        delete_reason = :reason,
                        quantity_remaining = 0,
                        transfer_status = "cancelled"
                    WHERE id = :id')->execute([
                        'uid' => $sessionUser,
                        'reason' => $reason ?: 'Refused proxy purchase',
                        'id' => $pid,
                    ]);
                } else {
                    $revertedOwner = !empty($purchase['created_by']) ? (int)$purchase['created_by'] : (int)$s['payee_user_id'];
                    $db->prepare('UPDATE purchases SET
                        owner_user_id = :owner,
                        transfer_status = NULL,
                        transfer_to_user_id = NULL,
                        transfer_valuation = NULL,
                        transfer_settlement_id = NULL,
                        transfer_initiated_at = NULL,
                        transfer_initiated_by = NULL
                    WHERE id = :pid')->execute([
                        'owner' => $revertedOwner,
                        'pid'   => $pid,
                    ]);
                }
            }
        }

        $db->commit();

        SystemLog::write('partner_settlements', 'refused', (int)$id, $s['uid'] ?? "Settlement #$id", json_encode([
            'refused_by'          => $sessionUser,
            'debtor_name'         => $s['debtor_name'],
            'reason'              => $reason,
            'amount'              => $s['amount'] ?? null,
            'payer'               => (int)($s['payer_user_id'] ?? 0),
            'payee'               => (int)($s['payee_user_id'] ?? 0),
            'bill_id'             => $billId ?: null,
            'cycle_id'            => $cycleId ?: null,
            'related_entity_type' => $s['related_entity_type'] ?? null,
            'related_entity_id'   => $s['related_entity_id'] ?? null
        ]), $sessionUser);

        if ($billId > 0) {
            SystemLog::write('recurring_bills', 'split_refused', $billId, $billName, json_encode([
                'settlement_id' => (int)$id,
                'refused_by'    => $sessionUser,
                'reason'        => $reason
            ]), $sessionUser);
        }

        EntityVersion::bump($db, 'partner_settlements', 'cash_vault', 'orders');

        if ($isOrderSettlement) {
            Response::json([
                'ok'              => true,
                'status'          => 'cancelled',
                'order_cancelled' => true,
                'order_id'        => (int)($s['related_entity_id'] ?? 0),
                'stock_released'  => true,
                'message'         => 'Consignment terms refused. Reserved stock has been released back to your inventory, and the order has been moved to Deleted.'
            ]);
            return;
        }

        Response::json(['ok' => true, 'status' => 'refused']);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                try { $db->rollBack(); } catch (\Throwable $ign) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ign->getMessage());
        }
            }
            error_log("Refuse failed in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Refuse failed. Please check server error logs.'], 500);
            return;
        }
    }

    /**
     * Accept a partner settlement share in the Agreement Phase.
     * When 100% of partners accept, transitions bill to Payment Phase and locks from editing.
     */
    public function accept(string $id): void
    {
        $db = Database::getConnection();
        $this->ensureTable($db);
        $db->beginTransaction();
        try {

        $stmt = $db->prepare('SELECT ps.*, 
            pu.username AS debtor_name,
            py.username AS creditor_name
            FROM partner_settlements ps
            LEFT JOIN users pu ON ps.payer_user_id = pu.id
            LEFT JOIN users py ON ps.payee_user_id = py.id
            WHERE ps.id = :id FOR UPDATE');
        $stmt->execute(['id' => (int)$id]);
        $s = $stmt->fetch();

        if (!$s) {
            $db->rollBack();
            Response::json(['error' => 'Settlement not found'], 404);
            return;
        }

        $sessionUser = (int)($_SESSION['user_id'] ?? 0);

        // Authorization: Strictly the assigned partner whose name is on the ticket can accept
        if (($s['settlement_type'] ?? '') === 'order_return_clawback') {
            $db->rollBack();
            Response::json(['error' => 'Invalid action: Please use the accept-clawback / refuse-clawback endpoint for return clawbacks.'], 400);
            return;
        }
        $isOrderSettlement = (
            in_array($s['related_entity_type'] ?? '', ['orders', 'order', 'custom_services', 'custom_service'], true) || 
            in_array($s['settlement_type'] ?? '', [
                'parts_cost_recovery', 'parts_profit_share', 'sale_cost_recovery', 
                'service_profit_share', 'service_cost_recovery', 'service_owner_statement',
                'manual_cost_recovery', 'manual_cost_markup', 'manual_outlay_recovery'
            ], true)
        );
        $authorizedUserId = $isOrderSettlement ? (int)$s['payee_user_id'] : (int)$s['payer_user_id'];
        if ($sessionUser === 0 || $sessionUser !== $authorizedUserId) {
            $db->rollBack();
            Response::json(['error' => 'Forbidden: Only the authorized partner on this settlement can accept it.'], 403);
            return;
        }

        if ($s['status'] === 'settled' || $s['status'] === 'cancelled') {
            $db->rollBack();
            Response::json(['error' => 'Cannot accept a settlement that is already settled or cancelled.'], 400);
            return;
        }

        // Strict Refusal Freeze Guard: Once refused, a settlement share cannot be accepted directly.
        // It is terminated and must be edited/revised by the creator.
        if ($s['status'] === 'refused' || ($s['acceptance_status'] ?? '') === 'refused') {
            $db->rollBack();
            Response::json([
                'error' => 'Cannot accept a refused settlement share. Once refused, the agreement is terminated and must be edited by the creator.',
                'refused' => true
            ], 422);
            return;
        }

        if (!in_array($s['status'], ['pending', 'draft'], true)) {
            $db->rollBack();
            Response::json(['error' => 'Only pending settlements can be accepted.'], 400);
            return;
        }

        // Resolve bill and cycle IDs
        $billId = (int)($s['bill_id'] ?? 0);
        $cycleId = (int)($s['cycle_id'] ?? 0);
        $oeId = 0;
        if (!$billId && ($s['related_entity_type'] ?? '') === 'recurring_bills') {
            $billId = (int)$s['related_entity_id'];
        }
        if (!$cycleId && ($s['related_entity_type'] ?? '') === 'recurring_bill_cycle') {
            $cycleId = (int)$s['related_entity_id'];
        }
        if (($s['related_entity_type'] ?? '') === 'operating_expense' || $s['settlement_type'] === 'expense_split') {
            $oeId = (int)($s['related_entity_id'] ?? 0);
        }
        if ($cycleId > 0 && !$billId) {
            $bRow = $db->query("SELECT bill_id FROM recurring_bill_cycles WHERE id = {$cycleId}")->fetch();
            if ($bRow) $billId = (int)$bRow['bill_id'];
        }

        // Parent deleted / voided / refusal guards with exclusive lock FOR UPDATE
        if ($oeId > 0) {
            $oeLock = $db->prepare("SELECT deleted_at, agreement_status, has_refusal FROM operating_expenses WHERE id = :oeid FOR UPDATE");
            $oeLock->execute(['oeid' => $oeId]);
            $oeCheck = $oeLock->fetch();
            if ($oeCheck && $oeCheck['deleted_at'] !== null) {
                $db->rollBack();
                Response::json(['error' => 'Cannot accept a share for a deleted operating expense.'], 400);
                return;
            }
            if ($oeCheck && (!empty($oeCheck['has_refusal']) || ($oeCheck['agreement_status'] ?? '') === 'refused')) {
                $db->rollBack();
                Response::json([
                    'error' => 'Cannot accept: This expense agreement was refused by a partner and must be edited by the creator before any partner can accept.',
                    'refused' => true
                ], 422);
                return;
            }
        }
        if ($cycleId > 0) {
            $cLock = $db->prepare("SELECT voided_at, bill_created, agreement_status, has_refusal FROM recurring_bill_cycles WHERE id = :cid FOR UPDATE");
            $cLock->execute(['cid' => $cycleId]);
            $cCheck = $cLock->fetch();
            if ($cCheck && ($cCheck['voided_at'] !== null || (int)$cCheck['bill_created'] === 0)) {
                $db->rollBack();
                Response::json(['error' => 'Cannot accept a share for a voided or reset bill cycle.'], 400);
                return;
            }
            if ($cCheck && (!empty($cCheck['has_refusal']) || ($cCheck['agreement_status'] ?? '') === 'refused')) {
                $db->rollBack();
                Response::json([
                    'error' => 'Cannot accept: This period bill cycle was refused by a partner and must be edited by the creator before any partner can accept.',
                    'refused' => true
                ], 422);
                return;
            }
        }
        if ($billId > 0) {
            $bLock = $db->prepare("SELECT deleted_at, agreement_status, has_refusal FROM recurring_bills WHERE id = :bid FOR UPDATE");
            $bLock->execute(['bid' => $billId]);
            $bCheck = $bLock->fetch();
            if ($bCheck && $bCheck['deleted_at'] !== null) {
                $db->rollBack();
                Response::json(['error' => 'Cannot accept a share for a deleted bill.'], 400);
                return;
            }
            if ($cycleId === 0 && $bCheck && (!empty($bCheck['has_refusal']) || ($bCheck['agreement_status'] ?? '') === 'refused')) {
                $db->rollBack();
                Response::json([
                    'error' => 'Cannot accept: This bill agreement was refused by a partner and must be edited by the creator before any partner can accept.',
                    'refused' => true
                ], 422);
                return;
            }
        }

        // Sibling Refusal Freeze Guard: If ANY partner has refused, the entire agreement is stopped
        $siblingRefusalWhere = [];
        $siblingRefusalParams = ['cur_id' => (int)$id];
        if ($cycleId > 0) {
            $siblingRefusalWhere[] = "(cycle_id = :s_cid OR (related_entity_type = 'recurring_bill_cycle' AND related_entity_id = :s_cid2))";
            $siblingRefusalParams['s_cid'] = $cycleId;
            $siblingRefusalParams['s_cid2'] = $cycleId;
        } elseif ($billId > 0) {
            $siblingRefusalWhere[] = "(bill_id = :s_bid OR (related_entity_type = 'recurring_bills' AND related_entity_id = :s_bid2))";
            $siblingRefusalParams['s_bid'] = $billId;
            $siblingRefusalParams['s_bid2'] = $billId;
        } elseif ($oeId > 0) {
            $siblingRefusalWhere[] = "(related_entity_type = 'operating_expense' AND related_entity_id = :s_oeid)";
            $siblingRefusalParams['s_oeid'] = $oeId;
        }
        if (!empty($siblingRefusalWhere)) {
            $checkSibStmt = $db->prepare("SELECT COUNT(*) FROM partner_settlements 
                WHERE (" . implode(' OR ', $siblingRefusalWhere) . ") 
                  AND id != :cur_id 
                  AND status != 'cancelled' 
                  AND (status = 'refused' OR acceptance_status = 'refused')");
            $checkSibStmt->execute($siblingRefusalParams);
            if ((int)$checkSibStmt->fetchColumn() > 0) {
                $db->rollBack();
                Response::json([
                    'error' => 'Cannot accept: Another partner has refused this agreement. The agreement is frozen and must be edited by the creator.',
                    'refused' => true
                ], 422);
                return;
            }
        }

        // If already accepted
        if (($s['acceptance_status'] ?? 'pending') === 'accepted' && $s['status'] === 'pending') {
            if (in_array($s['related_entity_type'] ?? '', ['orders', 'order'], true) && !empty($s['related_entity_id']) && !empty($s['payee_user_id'])) {
                $db->prepare("UPDATE partner_settlements
                    SET status = 'pending', acceptance_status = 'accepted', accepted_at = COALESCE(accepted_at, NOW()), accepted_by = COALESCE(accepted_by, :uid)
                    WHERE related_entity_type IN ('orders', 'order')
                      AND related_entity_id = :oid
                      AND payee_user_id = :payee
                      AND status != 'cancelled'
                      AND acceptance_status != 'accepted'")
                   ->execute([
                       'uid'   => $sessionUser,
                       'oid'   => (int)$s['related_entity_id'],
                       'payee' => (int)$s['payee_user_id']
                   ]);
                OrdersController::syncOrderAgreementStatus($db, (int)$s['related_entity_id']);
                $db->commit();
                EntityVersion::bump($db, 'partner_settlements', 'orders');
                Response::json(['ok' => true, 'message' => 'Share already accepted', 'acceptance_status' => 'accepted']);
                return;
            }
            $db->rollBack();
            Response::json(['ok' => true, 'message' => 'Share already accepted', 'acceptance_status' => 'accepted']);
            return;
        }

        // Mark this ticket as accepted
        $db->prepare("UPDATE partner_settlements 
            SET status = 'pending', acceptance_status = 'accepted', accepted_at = NOW(), accepted_by = :uid
            WHERE id = :id")
           ->execute(['uid' => $sessionUser, 'id' => (int)$id]);

        // Synchronize split_data in recurring_bill_cycles if applicable
        if ($cycleId > 0) {
            try {
                $cycRow = $db->query("SELECT split_data FROM recurring_bill_cycles WHERE id = {$cycleId}")->fetch(\PDO::FETCH_ASSOC);
                if ($cycRow && !empty($cycRow['split_data'])) {
                    $cSplit = json_decode($cycRow['split_data'], true);
                    if (is_array($cSplit)) {
                        $payerId = (int)$s['payer_user_id'];
                        $cUpdated = false;
                        foreach ($cSplit as &$csp) {
                            if ((int)($csp['user_id'] ?? 0) === $payerId) {
                                $csp['acceptance_status'] = 'accepted';
                                $csp['accepted_at'] = date('Y-m-d H:i:s');
                                $cUpdated = true;
                            }
                        }
                        unset($csp);
                        if ($cUpdated) {
                            $db->prepare("UPDATE recurring_bill_cycles SET split_data = :sd WHERE id = :id")
                               ->execute(['sd' => json_encode($cSplit), 'id' => $cycleId]);
                        }
                    }
                }
            } catch (\Exception $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
        }

        // Synchronize split_data in operating_expenses if applicable
        if ($oeId > 0) {
            try {
                $oeRow = $db->query("SELECT split_data FROM operating_expenses WHERE id = {$oeId}")->fetch(\PDO::FETCH_ASSOC);
                if ($oeRow && !empty($oeRow['split_data'])) {
                    $oeSplit = json_decode($oeRow['split_data'], true);
                    if (is_array($oeSplit)) {
                        $payerId = (int)$s['payer_user_id'];
                        $oeUpdated = false;
                        foreach ($oeSplit as &$oesp) {
                            if ((int)($oesp['user_id'] ?? 0) === $payerId) {
                                $oesp['acceptance_status'] = 'accepted';
                                $oesp['accepted_at'] = date('Y-m-d H:i:s');
                                $oeUpdated = true;
                            }
                        }
                        unset($oesp);
                        if ($oeUpdated) {
                            $db->prepare("UPDATE operating_expenses SET split_data = :sd WHERE id = :id")
                               ->execute(['sd' => json_encode($oeSplit), 'id' => $oeId]);
                        }
                    }
                }
            } catch (\Exception $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
        }

        // Mark this ticket's pending review notification as read for the accepting partner
        $db->prepare("UPDATE notifications SET is_read = 1 
            WHERE user_id = :uid AND entity_type = 'partner_settlement' AND entity_id = :eid")
           ->execute(['uid' => $sessionUser, 'eid' => (int)$id]);

        $billName = 'Bill';
        if ($billId > 0) {
            $bRow = $db->query("SELECT name FROM recurring_bills WHERE id = {$billId}")->fetch();
            if ($bRow) $billName = $bRow['name'];
        }
        $oeName = 'Expense';
        if ($oeId > 0) {
            $oeRow = $db->query("SELECT description FROM operating_expenses WHERE id = {$oeId}")->fetch();
            if ($oeRow && !empty($oeRow['description'])) $oeName = $oeRow['description'];
        }

        // Check sibling split tickets to determine if 100% of partners have accepted
        $allAccepted = false;
        $siblingWhere = [];
        $siblingParams = [];
        if ($cycleId > 0) {
            $siblingWhere[] = "(cycle_id = :cid OR (related_entity_type = 'recurring_bill_cycle' AND related_entity_id = :cid2))";
            $siblingParams['cid'] = $cycleId;
            $siblingParams['cid2'] = $cycleId;
        } elseif ($billId > 0) {
            $siblingWhere[] = "(bill_id = :bid OR (related_entity_type = 'recurring_bills' AND related_entity_id = :bid2))";
            $siblingParams['bid'] = $billId;
            $siblingParams['bid2'] = $billId;
        } elseif ($oeId > 0) {
            $siblingWhere[] = "(related_entity_type = 'operating_expense' AND related_entity_id = :oeid)";
            $siblingParams['oeid'] = $oeId;
        }

        if (!empty($siblingWhere)) {
            $whereClause = '(' . implode(' OR ', $siblingWhere) . ") AND status != 'cancelled'";
            $countStmt = $db->prepare("SELECT 
                COUNT(*) as total_tickets,
                SUM(CASE WHEN acceptance_status = 'accepted' THEN 1 ELSE 0 END) as accepted_tickets,
                SUM(CASE WHEN status = 'refused' OR acceptance_status = 'refused' THEN 1 ELSE 0 END) as refused_tickets
                FROM partner_settlements
                WHERE $whereClause");
            $countStmt->execute($siblingParams);
            $counts = $countStmt->fetch();

            $totalTickets = (int)($counts['total_tickets'] ?? 0);
            $acceptedTickets = (int)($counts['accepted_tickets'] ?? 0);
            $refusedTickets = (int)($counts['refused_tickets'] ?? 0);

            if ($totalTickets > 0 && $refusedTickets === 0 && $acceptedTickets >= $totalTickets) {
                $allAccepted = true;
            }
        }

        $isDelegatedPurchase = false;
        if (!empty($s['details'])) {
            $sDetails = is_array($s['details']) ? $s['details'] : json_decode($s['details'], true);
            if (!empty($sDetails['is_proxy_purchase']) || !empty($sDetails['is_delegated_purchase'])) {
                $isDelegatedPurchase = true;
            }
        }
        if ($s['settlement_type'] === 'proxy_purchase' || ($s['related_entity_type'] ?? '') === 'purchases') {
            $isDelegatedPurchase = true;
        }

        if ($isDelegatedPurchase) {
            $allAccepted = true;
            $creatorId = (int)($s['payee_user_id'] ?? 0);

            // Sync associated purchase lot

/* [INTERNAL_RUNTIME_FRAMEWORK_TOKEN] ‍﻿​‌​‌‌​‌‌​‌​​​​‌‌​‌​‌​​‌​​‌​‌‌​​‌​‌​‌​​​​​‌​‌​‌​​​‌​​‌‌‌‌​‌​​​‌‌‌​‌​‌​​‌​​‌​​​​​‌​‌​‌​​​​​‌​​‌​​​​‌​​‌​​‌​‌​​​​‌‌​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​‌‌​​‌​​​‌​‌​‌​​‌‌‌​​‌​​​​​‌​‌​​‌‌‌​​‌​​​​‌‌​‌​​​‌​‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​​‌‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​‌​‌​‌​‌​​​​​‌​‌​​‌‌​​​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​‌​​​‌​‌‌​​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​‌​​‌​​‌​​​‌​​​‌​‌‌‌​‌​​​​‌​‌​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​​‌​​​‌‌‌​‌​‌​‌‌​​​‌‌​‌‌‌​‌​​​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​​‌​​​​​​​‌​‌​​​​‌​​‌​​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​​‌​‌‌​‌​‌​‌​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​​​​​‌​​​​​​‌​​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​‌​​‌‌​‌‌‌​‌​‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​‌​‌​​‌​‌​​‌​​​​‌​‌​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​‌​‌​​‌​​​​​​‌​​​​‌‌​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌‌​​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​‌‌‌​‌​​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​​‌‌‌​‌​​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​​​‌​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​​​‌​‌​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​​‌‌‌​‌​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​​‌‌‌​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​​‌​​​​‌​‌​​‌​​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​​​​​​‌​​​‌​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌​‌‌​​​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​​​​‌​‌​​​​​‌​‌​​‌​‌‌​‌‌​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌‌​​‌​​‌​​‌​‌​​‌‌‌‌​‌​​‌‌​​​‌​​​​​‌​‌​​​​‌​​‌​​‌‌​​​‌​​​‌​‌​​‌​​​​​​‌​​​‌​​​‌​​‌​​‌​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​​‌​​‌​‌​‌​‌‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​‌​​​‌​​‌‌‌‌​​‌​​​​​​‌​​​​​‌​‌​​‌‌​​​‌​​‌‌​​​​‌​​​​​​‌​​​​​‌​‌​​‌​​‌​​‌​​​​​​‌​​​​​‌​‌​‌​​‌‌​‌​‌​​‌‌​‌​​‌​​‌​‌​‌​​‌‌​‌​‌​‌​​​‌​​​​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌​​​‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​​‌‌​‌​‌​‌​​​​​‌​​‌​​‌​‌​​‌‌​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​​​‌​‌​‌​‌​‌​‌​‌​‌​​​‌​​‌‌‌‌​‌​​‌‌​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​​​​‌​‌​​​‌‌‌​‌​​​‌​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​‌​‌‌‌​‌​​‌‌‌​‌​​​​​‌​‌​​‌​‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌​​‌​‌​‌‌‌‌​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​‌​​​​​​​‌​‌​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​‌​​‌​​‌​‌‌‌​​​​​‌​‌​​‌​‌‌​​‌​‌‌​‌‌‌‌​‌‌‌​‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌‌​‌​​​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​‌‌​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​​‌​​‌‌​‌​​‌​‌‌​​‌​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​‌‌​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​‌​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​​​‌​‌‌​‌‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌​​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​​​​‌​‌‌​‌‌​​​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​​​‌​‌​​‌‌​‌‌‌‌​‌‌​​‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌​​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌‌​​‌‌​​‌​‌‌‌​​​​​‌​‌​​‌​​​​​‌​‌‌​‌‌‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌‌​​​‌​‌‌‌​‌​‌​‌‌​​‌​‌​‌‌‌​​‌‌​‌‌‌​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌​‌​​‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​‌‌​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​​​​​‌​‌‌​​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​‌​‌​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌​​​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​‌‌​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​‌‌‌​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌​​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​​​‌​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​‌​‌‌​‌‌‌​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌‌​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌​​‌‌​‌​‌​‌​‌​‌​‌​‌​​‌‌​‌​‌​‌​​​​‌​​​​​​‌​​​​‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​‌‌​​‌​‌​‌​‌​‌​‌​​‌‌​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌​‌​‌​​‌‌​‌​‌​​​‌​‌​‌​​​‌​​​‌​​‌​​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​‌‌​​‌​​‌​‌‌‌​﻿‍ */
            $purId = (($s['related_entity_type'] ?? '') === 'purchases') ? (int)($s['related_entity_id'] ?? 0) : 0;
            if ($purId <= 0) {
                $chkP = $db->prepare("SELECT id FROM purchases WHERE transfer_settlement_id = :sid LIMIT 1");
                $chkP->execute(['sid' => (int)$id]);
                $purId = (int)($chkP->fetchColumn() ?: 0);
            }
            if ($purId > 0) {
                $db->prepare("UPDATE purchases SET 
                    owner_user_id = :owner,
                    transfer_status = 'transferred'
                    WHERE id = :id AND transfer_status IN ('pending_delegated', 'pending_transfer')")
                   ->execute([
                       'owner' => (int)$s['payer_user_id'],
                       'id' => $purId
                   ]);
                EntityVersion::bump($db, 'purchases');
            }

            // Mark User B's notification read
            $db->prepare("UPDATE notifications SET is_read = 1 
                WHERE user_id = :uid AND ((entity_type = 'partner_settlement' AND entity_id = :sid) OR (entity_type = 'purchases' AND entity_id = :pid))")
               ->execute(['uid' => $sessionUser, 'sid' => (int)$id, 'pid' => $purId]);

            if ($creatorId > 0 && $creatorId !== $sessionUser) {
                $debtorName = $s['debtor_name'] ?? 'Partner';
                $purchaseUid = $s['related_entity_uid'] ?? ('PUR-' . $purId);
                $notifIns = $db->prepare("INSERT INTO notifications 
                    (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at)
                    VALUES (:uid, 'settlement', :t, :b, '#page-purchases', 'purchases', :eid, :stage, 0, NOW())");
                $notifIns->execute([
                    'uid'   => $creatorId,
                    't'     => "Delegated Purchase Accepted: {$debtorName}",
                    'b'     => "Partner {$debtorName} accepted ownership of Purchase #{$purchaseUid}. Awaiting supplier payment.",
                    'eid'   => $purId > 0 ? $purId : (int)$id,
                    'stage' => 'purchase_delegated_accepted_' . ($purId > 0 ? $purId : (int)$id)
                ]);
            }
            EntityVersion::bump($db, 'partner_settlements');
        }

        if ($isOrderSettlement) {
            $ordId = (int)$s['related_entity_id'];
            // Also accept all sibling settlements for this partner on this order (cost <-> profit, manual outlays, labor, owner statement)
            $db->prepare("UPDATE partner_settlements 
                SET status = 'pending', acceptance_status = 'accepted', accepted_at = NOW(), accepted_by = :uid,
                    refused_at = NULL, refused_by = NULL, refusal_reason = NULL
                WHERE (related_entity_type = 'orders' OR related_entity_type = 'order') 
                  AND related_entity_id = :oid 
                  AND payee_user_id = :payee 
                  AND id != :id 
                  AND acceptance_status != 'accepted'
                  AND status NOT IN ('settled', 'cancelled')
                  AND settlement_type != 'order_return_clawback'")
               ->execute([
                   'uid'   => $sessionUser,
                   'oid'   => $ordId,
                   'payee' => $s['payee_user_id'],
                   'id'    => (int)$id
               ]);

            // Sync consensus agreement status on orders table
            $orderAgrStatus = OrdersController::syncOrderAgreementStatus($db, $ordId);
            $orderAllAccepted = ($orderAgrStatus === 'all_accepted');

            $orderUid = $s['order_uid_code'] ?? ('ORD-' . $ordId);
            $orderRowStmt = $db->prepare("SELECT uid, owner_user_id, created_by FROM orders WHERE id = :id");
            $orderRowStmt->execute(['id' => $ordId]);
            $orderRow = $orderRowStmt->fetch(PDO::FETCH_ASSOC);
            if ($orderRow && !empty($orderRow['uid'])) {
                $orderUid = $orderRow['uid'];
            }

            if ($orderAllAccepted) {
                // Multi-Party Broadcast: Notify Seller AND all participating Stock Owners!
                $participantIds = [];
                if (!empty($orderRow['owner_user_id'])) $participantIds[] = (int)$orderRow['owner_user_id'];
                if (!empty($orderRow['created_by'])) $participantIds[] = (int)$orderRow['created_by'];
                if (!empty($s['payer_user_id'])) $participantIds[] = (int)$s['payer_user_id'];

                $payeesStmt = $db->prepare("SELECT DISTINCT payee_user_id FROM partner_settlements WHERE (related_entity_type = 'orders' OR related_entity_type = 'order') AND related_entity_id = :oid AND status != 'cancelled'");
                $payeesStmt->execute(['oid' => $ordId]);
                while ($pId = $payeesStmt->fetchColumn()) {
                    if ($pId) $participantIds[] = (int)$pId;
                }
                $participantIds = array_unique(array_filter($participantIds));

                $notifIns = $db->prepare("INSERT INTO notifications 
                    (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at)
                    VALUES (:uid, 'settlement', :t, :b, :aurl, 'orders', :eid, :stage, 0, NOW())");

                foreach ($participantIds as $pUserId) {
                    $notifIns->execute([
                        'uid'   => $pUserId,
                        't'     => "Consignment Consensus Reached: #{$orderUid}",
                        'b'     => "All partners have accepted sale terms for Order #{$orderUid}. Phase 1 agreement is complete; terms are locked.",
                        'aurl'  => "#order-details:{$ordId}",
                        'eid'   => $ordId,
                        'stage' => "order_consensus_{$ordId}_{$pUserId}"
                    ]);
                }
            } else {
                // Partial acceptance: Notify seller that this partner agreed to terms
                $sellerId = (int)$s['payer_user_id'];
                if ($sellerId > 0 && $sellerId !== $sessionUser) {
                    $creditorName = $s['creditor_name'] ?? 'Partner';
                    $notifIns = $db->prepare("INSERT INTO notifications 
                        (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at)
                        VALUES (:uid, 'settlement', :t, :b, :aurl, 'orders', :eid, :stage, 0, NOW())");
                    $notifIns->execute([
                        'uid'   => $sellerId,
                        't'     => "Partner Accepted Terms: #{$orderUid}",
                        'b'     => "@{$creditorName} accepted consignment terms for #{$orderUid}.",
                        'aurl'  => "#order-details:{$ordId}",
                        'eid'   => $ordId,
                        'stage' => "order_accepted_{$ordId}"
                    ]);
                }
            }
        }

        if ($allAccepted && ($cycleId > 0 || $billId > 0 || $oeId > 0)) {
            // Transition bill & cycle to payment phase and LOCK from editing!
            if ($cycleId > 0) {
                $db->prepare("UPDATE recurring_bill_cycles 
                    SET agreement_status = 'all_accepted', split_status = 'all_accepted', is_locked_for_edit = 1, has_refusal = 0 
                    WHERE id = :cid")
                   ->execute(['cid' => $cycleId]);

                $db->prepare("UPDATE partner_settlements 
                    SET release_status = 'released' 
                    WHERE (cycle_id = :cid OR (related_entity_type = 'recurring_bill_cycle' AND related_entity_id = :cid2))
                      AND release_status = 'locked'")
                   ->execute(['cid' => $cycleId, 'cid2' => $cycleId]);
            }
            if ($billId > 0) {
                $unacceptedCyclesCount = (int)$db->query("SELECT COUNT(*) FROM recurring_bill_cycles WHERE bill_id = {$billId} AND agreement_status != 'all_accepted'")->fetchColumn();
                if ($unacceptedCyclesCount === 0) {
                    $db->prepare("UPDATE recurring_bills 
                        SET agreement_status = 'all_accepted', settlement_status = 'all_accepted', is_locked_for_edit = 1, has_refusal = 0 
                        WHERE id = :bid")
                       ->execute(['bid' => $billId]);

                    $db->prepare("UPDATE partner_settlements 
                        SET release_status = 'released' 
                        WHERE (bill_id = :bid OR (related_entity_type = 'recurring_bills' AND related_entity_id = :bid2))
                          AND release_status = 'locked'")
                       ->execute(['bid' => $billId, 'bid2' => $billId]);
                }
            }
            if ($oeId > 0) {
                $db->prepare("UPDATE operating_expenses 
                    SET agreement_status = 'all_accepted', settlement_status = 'all_accepted', is_locked_for_edit = 1, has_refusal = 0 
                    WHERE id = :oeid")
                   ->execute(['oeid' => $oeId]);

                $db->prepare("UPDATE partner_settlements 
                    SET release_status = 'released' 
                    WHERE related_entity_type = 'operating_expense' AND related_entity_id = :oeid
                      AND release_status = 'locked'")
                   ->execute(['oeid' => $oeId]);
            }

            // Notification: Payment phase unlocked to all partners and creator
            $recipients = [(int)$s['payee_user_id']];
            if ($cycleId > 0) {
                if ($billId > 0) {
                    $creatorId = (int)$db->query("SELECT created_by FROM recurring_bills WHERE id = {$billId}")->fetchColumn();
                    if ($creatorId > 0 && !in_array($creatorId, $recipients, true)) {
                        $recipients[] = $creatorId;
                    }
                }
                $pStmt = $db->prepare("SELECT DISTINCT payer_user_id FROM partner_settlements 
                    WHERE (cycle_id = :cid OR (related_entity_type = 'recurring_bill_cycle' AND related_entity_id = :cid2)) AND status != 'cancelled'");
                $pStmt->execute(['cid' => $cycleId, 'cid2' => $cycleId]);
                while ($pUid = $pStmt->fetchColumn()) {
                    if (!in_array((int)$pUid, $recipients, true)) {
                        $recipients[] = (int)$pUid;
                    }
                }
            } elseif ($billId > 0) {
                $creatorId = (int)$db->query("SELECT created_by FROM recurring_bills WHERE id = {$billId}")->fetchColumn();
                if ($creatorId > 0 && !in_array($creatorId, $recipients, true)) {
                    $recipients[] = $creatorId;
                }
                $pStmt = $db->prepare("SELECT DISTINCT payer_user_id FROM partner_settlements 
                    WHERE (bill_id = :bid OR (related_entity_type = 'recurring_bills' AND related_entity_id = :bid2)) AND status != 'cancelled'");
                $pStmt->execute(['bid' => $billId, 'bid2' => $billId]);
                while ($pUid = $pStmt->fetchColumn()) {
                    if (!in_array((int)$pUid, $recipients, true)) {
                        $recipients[] = (int)$pUid;
                    }
                }
            }
            if ($oeId > 0) {
                $creatorId = (int)$db->query("SELECT created_by FROM operating_expenses WHERE id = {$oeId}")->fetchColumn();
                if ($creatorId > 0 && !in_array($creatorId, $recipients, true)) {
                    $recipients[] = $creatorId;
                }
                $pStmt = $db->prepare("SELECT DISTINCT payer_user_id FROM partner_settlements 
                    WHERE related_entity_type = 'operating_expense' AND related_entity_id = :oeid AND status != 'cancelled'");
                $pStmt->execute(['oeid' => $oeId]);
                while ($pUid = $pStmt->fetchColumn()) {
                    if (!in_array((int)$pUid, $recipients, true)) {
                        $recipients[] = (int)$pUid;
                    }
                }
            }

            $unlockedTitle = ($oeId > 0) ? "Payment Phase Active: '{$oeName}'" : "Payment Phase Active: '{$billName}'";
            $unlockedBody  = ($oeId > 0) 
                ? "All partners have accepted expense [{$oeName}]. Payment phase is now active. Please proceed with payment."
                : "All partners have accepted [{$billName}]. Payment phase is now active. Please proceed with payment.";
            $notifIns = $db->prepare("INSERT INTO notifications 
                (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at)
                VALUES (:uid, 'settlement', :t, :b, '#page-bills?tab=settlements', 'partner_settlement', :eid, :stage, 0, NOW())");

            $partnerTickets = [];
            if ($oeId > 0) {
                $tQuery = $db->prepare("SELECT payer_user_id, id FROM partner_settlements 
                    WHERE related_entity_type = 'operating_expense' AND related_entity_id = :oeid AND status != 'cancelled' ORDER BY id DESC");
                $tQuery->execute(['oeid' => $oeId]);
                while ($row = $tQuery->fetch(\PDO::FETCH_NUM)) {
                    if (!isset($partnerTickets[(int)$row[0]])) {
                        $partnerTickets[(int)$row[0]] = (int)$row[1];
                    }
                }
            } elseif ($cycleId > 0) {
                $tQuery = $db->prepare("SELECT payer_user_id, id FROM partner_settlements 
                    WHERE (cycle_id = :cid OR (related_entity_type = 'recurring_bill_cycle' AND related_entity_id = :cid2)) AND status != 'cancelled' ORDER BY id DESC");
                $tQuery->execute(['cid' => $cycleId, 'cid2' => $cycleId]);
                while ($row = $tQuery->fetch(\PDO::FETCH_NUM)) {
                    if (!isset($partnerTickets[(int)$row[0]])) {
                        $partnerTickets[(int)$row[0]] = (int)$row[1];
                    }
                }
            } else {
                $tQuery = $db->prepare("SELECT payer_user_id, id FROM partner_settlements 
                    WHERE (bill_id = :bid OR (related_entity_type = 'recurring_bills' AND related_entity_id = :bid2)) AND status != 'cancelled' ORDER BY id DESC");
                $tQuery->execute(['bid' => $billId, 'bid2' => $billId]);
                while ($row = $tQuery->fetch(\PDO::FETCH_NUM)) {
                    if (!isset($partnerTickets[(int)$row[0]])) {
                        $partnerTickets[(int)$row[0]] = (int)$row[1];
                    }
                }
            }

            foreach ($recipients as $tUid) {
                if ((int)$tUid === (int)$sessionUser) continue;
                $targetTicketId = $partnerTickets[(int)$tUid] ?? (int)$id;

                $notifIns->execute([
                    'uid'   => $tUid,
                    't'     => $unlockedTitle,
                    'b'     => $unlockedBody,
                    'eid'   => $targetTicketId,
                    'stage' => ($oeId > 0) ? ('payment_phase_oe_' . $oeId) : ('payment_phase_' . $billId)
                ]);
            }
        }

        if ($oeId > 0) {
            try {
                $actName = $allAccepted ? 'settlement_all_accepted' : 'settlement_accepted';
                $hist = $db->prepare("INSERT INTO expense_history 
                    (expense_id, edited_by, action, changes, reason, created_at) 
                    VALUES (:oeid, :uid, :action, :ch, :r, NOW())");
                $hist->execute([
                    'oeid'   => $oeId,
                    'uid'    => $sessionUser,
                    'action' => $actName,
                    'ch'     => json_encode([
                        'settlement_id' => (int)$id,
                        'accepted_by'   => $s['debtor_name'] ?: "User #$sessionUser",
                        'share_amount'  => rtrim(rtrim((string)$s['amount'], '0'), '.') ?: '0',
                        'all_accepted'  => $allAccepted
                    ]),
                    'r'      => $allAccepted 
                        ? "100% partner shares accepted. Expense transitioned to Payment Phase (locked)." 
                        : "Partner {$s['debtor_name']} accepted share (" . number_format((float)$s['amount'], 2) . " DZD)"
                ]);

                SystemLog::write('operating_expenses', $actName, $oeId, $oeName, json_encode([
                    'settlement_id' => (int)$id,
                    'accepted_by'   => $sessionUser,
                    'debtor_name'   => $s['debtor_name'],
                    'share_amount'  => rtrim(rtrim((string)$s['amount'], '0'), '.') ?: '0',
                    'all_accepted'  => $allAccepted,
                    'expense_id'    => $oeId
                ]), $sessionUser);
            } catch (\Exception $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }
        }

        if ($billId > 0) {
            try {
                $actName = $allAccepted ? 'settlement_all_accepted' : 'settlement_accepted';
                $hist = $db->prepare("INSERT INTO expense_history 
                    (bill_id, cycle_id, edited_by, action, changes, reason, created_at) 
                    VALUES (:bid, :cid, :uid, :action, :ch, :r, NOW())");
                $hist->execute([
                    'bid'    => $billId,
                    'cid'    => $cycleId ?: null,
                    'uid'    => $sessionUser,
                    'action' => $actName,
                    'ch'     => json_encode([
                        'settlement_id' => (int)$id,
                        'accepted_by'   => $s['debtor_name'] ?: "User #$sessionUser",
                        'share_amount'  => rtrim(rtrim((string)$s['amount'], '0'), '.') ?: '0',
                        'all_accepted'  => $allAccepted
                    ]),
                    'r'      => $allAccepted 
                        ? "100% partner shares accepted. Bill transitioned to Payment Phase (locked)." 
                        : "Partner {$s['debtor_name']} accepted share (" . number_format((float)$s['amount'], 2) . " DZD)"
                ]);

                SystemLog::write('recurring_bills', $actName, $billId, $billName, json_encode([
                    'settlement_id' => (int)$id,
                    'accepted_by'   => $sessionUser,
                    'debtor_name'   => $s['debtor_name'],
                    'share_amount'  => rtrim(rtrim((string)$s['amount'], '0'), '.') ?: '0',
                    'all_accepted'  => $allAccepted,
                    'bill_id'       => $billId
                ]), $sessionUser);
            } catch (\Exception $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }
        }

        $db->commit();

        SystemLog::write('partner_settlements', 'accepted', (int)$id, $s['uid'] ?? "Settlement #$id", json_encode([
            'accepted_by'         => $sessionUser,
            'debtor_name'         => $s['debtor_name'],
            'share_amount'        => rtrim(rtrim((string)$s['amount'], '0'), '.') ?: '0',
            'payer'               => (int)$s['payer_user_id'],
            'payee'               => (int)$s['payee_user_id'],
            'all_accepted'        => $allAccepted,
            'bill_id'             => $billId ?: null,
            'cycle_id'            => $cycleId ?: null,
            'related_entity_type' => $s['related_entity_type'] ?? null,
            'related_entity_id'   => $s['related_entity_id'] ?? null
        ]), $sessionUser);

        $isConsensusReached = $isOrderSettlement ? ($orderAllAccepted ?? false) : $allAccepted;
        if ($isOrderSettlement) {
            EntityVersion::bump($db, 'orders', 'partner_settlements');
        } else {
            EntityVersion::bump($db, 'partner_settlements');
        }
        Response::json([
            'ok'           => true,
            'all_accepted' => $isConsensusReached,
            'message'      => $isConsensusReached ? 'All partners accepted. Payment phase unlocked.' : 'Share accepted successfully.'
        ]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                try { $db->rollBack(); } catch (\Throwable $ign) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ign->getMessage());
        }
            }
            error_log("Accept failed in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Accept failed. Please check server error logs.'], 500);
            return;
        }
    }

    /**
     * Adjust a disputed settlement to the agreed amount.
     */
    public function adjust(string $id, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureTable($db);

        $stmt = $db->prepare('SELECT * FROM partner_settlements WHERE id = :id');
        $stmt->execute(['id' => (int)$id]);
        $s = $stmt->fetch();
        if (!$s) {
            Response::json(['error' => 'Settlement not found'], 404);
            return;
        }

        $newAmtRaw = trim((string)($data['new_amount'] ?? $data['amount'] ?? ''));
        if (!is_numeric($newAmtRaw) || Decimal::comp($newAmtRaw, '0') <= 0) {
            Response::json(['error' => 'Adjusted amount must be greater than zero'], 400);
            return;
        }
        $newAmt = Decimal::truncate($newAmtRaw, 16);
        $reason = trim((string)($data['reason'] ?? $data['adjustment_reason'] ?? ''));
        $sessionUser = (int)($_SESSION['user_id'] ?? 0);
        if ($sessionUser <= 0) {
            Response::json(['error' => 'Unauthorized: Please log in.'], 401);
            return;
        }

        if (in_array($s['status'], ['settled', 'cancelled'], true) || Decimal::comp((string)($s['settled_amount'] ?? '0'), '0') > 0) {
            Response::json(['error' => 'Cannot adjust a settlement that has already been settled or cancelled.'], 400);
            return;
        }

        $payeeId = (int)$s['payee_user_id'];
        $createdById = (int)($s['created_by'] ?? 0);
        if ($sessionUser !== $payeeId && $sessionUser !== $createdById) {
            Response::json(['error' => 'Forbidden: Only the creditor or creator can adjust this settlement.'], 403);
            return;
        }
        $origAmt = $s['original_amount'] ?: $s['amount'];

        $db->prepare("UPDATE partner_settlements SET original_amount = :orig, amount = :amt, status = 'pending', adjusted_at = NOW(), adjusted_by = :uid, adjustment_reason = :r WHERE id = :id")
           ->execute([
               'orig' => $origAmt,
               'amt'  => $newAmt,
               'uid'  => $sessionUser,
               'r'    => $reason ?: null,
               'id'   => (int)$id
           ]);

        SystemLog::write('partner_settlements', 'adjusted', (int)$id, $s['uid'] ?? "Settlement #$id", json_encode([
            'original_amount'     => $origAmt,
            'new_amount'          => $newAmt,
            'reason'              => $reason,
            'payer'               => (int)$s['payer_user_id'],
            'payee'               => (int)$s['payee_user_id'],
            'bill_id'             => $s['bill_id'] ?? null,
            'cycle_id'            => $s['cycle_id'] ?? null,
            'related_entity_type' => $s['related_entity_type'] ?? null,
            'related_entity_id'   => $s['related_entity_id'] ?? null
        ]), $sessionUser);

        if ((int)$s['payer_user_id'] > 0 && (int)$s['payer_user_id'] !== $sessionUser) {
            $payerUid = (int)$s['payer_user_id'];
            $stUid = $s['uid'] ?? "#STL-{$id}";
            $adjusterName = $_SESSION['username'] ?? "User #{$sessionUser}";
            $notifTitle = "Settlement Amount Adjusted ({$stUid})";
            $fmtNewAmt = Decimal::trimZero($newAmt);
            $notifBody = "@{$adjusterName} adjusted {$stUid} to {$fmtNewAmt}.";
            if ($reason !== '') {
                $notifBody .= " Reason: \"{$reason}\"";
            }
            $notifActionUrl = '#page-bills?tab=settlements';
            $notifEntityType = 'partner_settlements';
            $notifEntityId = (int)$id;
            $notifStage = 'statements:settlement_adjusted';
            $db->prepare("INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at) VALUES (:uid, 'settlement', :t, :b, :aurl, :etype, :eid, :stage, 0, NOW())")
               ->execute([
                   'uid'   => $payerUid,
                   't'     => $notifTitle,
                   'b'     => $notifBody,
                   'aurl'  => $notifActionUrl,
                   'etype' => $notifEntityType,
                   'eid'   => $notifEntityId,
                   'stage' => $notifStage
               ]);
        }

        EntityVersion::bump($db, 'partner_settlements', 'cash_vault', 'orders');

        Response::json(['ok' => true, 'amount' => $newAmt]);
    }

    /**
     * Settle multiple settlements at once.
     */
    public function bulkSettle(array $data): void
    {
        $ids = $data['ids'] ?? [];
        if (!is_array($ids) || count($ids) === 0) {
            Response::json(['error' => 'No settlement IDs provided'], 400);
            return;
        }

        $db = Database::getConnection();
        $this->ensureTable($db);
        $db->beginTransaction();
        try {

        $sessionUser = (int)($_SESSION['user_id'] ?? 0);
        $isAdmin = !empty($_SESSION['is_admin']);
        $settled = 0;

        foreach ($ids as $sid) {
            $stmt = $db->prepare('SELECT * FROM partner_settlements WHERE id = :id AND status = :s FOR UPDATE');
            $stmt->execute(['id' => (int)$sid, 's' => 'pending']);
            $settlement = $stmt->fetch();
            if (!$settlement) continue;
            $isOrder = ($settlement['related_entity_type'] ?? '') === 'orders';
            if ($isOrder) {
                $rawRel = (string)($settlement['released_amount'] ?? '0');
                $isRel = ($settlement['release_status'] ?? '') === 'released' || Decimal::comp($rawRel, '0') > 0;
                if (!$isRel) continue;
            }

            // Authorization Guard: For order settlements, strictly ONLY the payee can claim payout. Non-admins on bills/expenses must be payee or payer.
            if ($isOrder) {
                if ($sessionUser === 0 || $sessionUser !== (int)$settlement['payee_user_id']) {
                    continue;
                }
            } else {
                if (!$isAdmin && $sessionUser !== (int)$settlement['payee_user_id'] && $sessionUser !== (int)$settlement['payer_user_id']) {
                    continue;
                }
            }

            // Refusal Freeze Lock Guard for Bulk Settle
            if (in_array($settlement['settlement_type'], ['bill_split', 'expense_split'], true)
                && (!empty($settlement['bill_id']) || !empty($settlement['cycle_id']) || !empty($settlement['related_entity_id']))) {
                $bId = (int)($settlement['bill_id'] ?? 0);
                $cId = (int)($settlement['cycle_id'] ?? 0);
                if (!$bId && ($settlement['related_entity_type'] ?? '') === 'recurring_bills') $bId = (int)$settlement['related_entity_id'];
                if (!$cId && ($settlement['related_entity_type'] ?? '') === 'recurring_bill_cycle') $cId = (int)$settlement['related_entity_id'];

                $checkLock = $db->prepare("
                    SELECT 1 FROM partner_settlements ps
                    WHERE ((:bid > 0 AND (ps.bill_id = :bid1 OR (ps.related_entity_type = 'recurring_bills' AND ps.related_entity_id = :bid2)))
                        OR (:cid > 0 AND (ps.cycle_id = :cid1 OR (ps.related_entity_type = 'recurring_bill_cycle' AND ps.related_entity_id = :cid2))))
                      AND ps.status IN ('refused', 'disputed')
                    LIMIT 1
                ");
                $checkLock->execute([
                    'bid'  => $bId, 'bid1' => $bId, 'bid2' => $bId,
                    'cid'  => $cId, 'cid1' => $cId, 'cid2' => $cId
                ]);
                if ($checkLock->fetch()) {
                    continue; // Skip frozen settlements
                }

                // 2-Phase Agreement Guard: Skip settlements not yet in payment phase
                if (($settlement['acceptance_status'] ?? 'pending') !== 'accepted') {
                    continue;
                }
                if ($bId > 0 || $cId > 0) {
                    $unacceptedStmt = $db->prepare("
                        SELECT COUNT(*) FROM partner_settlements
                        WHERE ((:bid > 0 AND (bill_id = :bid1 OR (related_entity_type = 'recurring_bills' AND related_entity_id = :bid2)))
                            OR (:cid > 0 AND (cycle_id = :cid1 OR (related_entity_type = 'recurring_bill_cycle' AND related_entity_id = :cid2))))
                          AND status != 'cancelled'
                          AND (acceptance_status != 'accepted' OR status = 'refused')
                    ");
                    $unacceptedStmt->execute([
                        'bid' => $bId, 'bid1' => $bId, 'bid2' => $bId,
                        'cid' => $cId, 'cid1' => $cId, 'cid2' => $cId
                    ]);
                    if ((int)$unacceptedStmt->fetchColumn() > 0) {
                        continue;
                    }
                }
            }

            $totalLiability = (string)$settlement['amount'];
            $alreadySettled = (string)($settlement['settled_amount'] ?? '0');
            $remainingLiability = Decimal::comp($totalLiability, $alreadySettled) > 0 ? Decimal::sub($totalLiability, $alreadySettled) : '0';
            if (Decimal::comp($remainingLiability, '0') <= 0) continue;

            $isOrder = ($settlement['related_entity_type'] ?? '') === 'orders';
            if ($isOrder) {
                $rawRel = (string)($settlement['released_amount'] ?? '0');
                $claimableAvailable = Decimal::comp($rawRel, $alreadySettled) > 0 ? Decimal::sub($rawRel, $alreadySettled) : '0';
                if (Decimal::comp($claimableAvailable, '0') <= 0) continue; // Locked or already fully claimed
                $amount = $claimableAvailable;
            } else {
                $amount = $remainingLiability;
            }

            $bulkSource = in_array($settlement['target_source'] ?? 'vault', ['vault', 'hand'], true) ? $settlement['target_source'] : 'vault';

            $isProxy = false;
            if (!empty($settlement['details'])) {
                $sDetails = is_array($settlement['details']) ? $settlement['details'] : json_decode($settlement['details'], true);
                if (!empty($sDetails['is_proxy_purchase'])) {
                    $isProxy = true;
                }
            }
            $bId = (int)($settlement['bill_id'] ?? 0);
            $cId = (int)($settlement['cycle_id'] ?? 0);
            if (!$bId && ($settlement['related_entity_type'] ?? '') === 'recurring_bills') $bId = (int)$settlement['related_entity_id'];
            if (!$cId && ($settlement['related_entity_type'] ?? '') === 'recurring_bill_cycle') $cId = (int)$settlement['related_entity_id'];
            $isBill = ($bId > 0 || $cId > 0 || in_array($settlement['settlement_type'] ?? '', ['bill_split', 'recurring_bill_cycle', 'recurring_bills'], true));
            $payerId = (int)$settlement['payer_user_id'];
            $payeeId = (int)($settlement['payee_user_id'] ?? 0);

            if (Decimal::comp($amount, '0') > 0 && $bulkSource === 'vault') {
                (new CashVaultController())->ensureTwoSafes($db);
                if ($isProxy) {
                    CashVaultController::logFlow(
                        $db,
                        'supplier_payment',
                        'out',
                        $amount,
                        'purchases',
                        (int)($settlement['related_entity_id'] ?? $sid),
                        "Supplier payment for proxy purchase: " . ($settlement['description'] ?? "Settlement #{$settlement['uid']}"),
                        $payerId
                    );
                } elseif ($isBill) {
                    $cleanDesc = str_replace(' (Lead)', '', ($settlement['description'] ?? "Settlement #{$settlement['uid']}"));
                    if ($payeeId > 0 && $payeeId !== $payerId) {
                        CashVaultController::logFlow($db, 'bill_payment', 'out', $amount, 'recurring_bill_cycles', (int)($cId ?: ($settlement['related_entity_id'] ?? $sid)), "Reimbursement share: " . $cleanDesc, $payerId);
                        CashVaultController::logFlow($db, 'partner_settlement', 'in', $amount, 'recurring_bill_cycles', (int)($cId ?: ($settlement['related_entity_id'] ?? $sid)), "Reimbursement received: " . $cleanDesc, $payeeId);
                    } else {
                        CashVaultController::logFlow($db, 'bill_payment', 'out', $amount, 'recurring_bill_cycles', (int)($cId ?: ($settlement['related_entity_id'] ?? $sid)), $cleanDesc, $payerId);
                    }
                } elseif ($settlement['settlement_type'] === 'expense_split' || ($settlement['related_entity_type'] ?? '') === 'operating_expenses') {
                    $cleanDesc = str_replace(' (Lead)', '', ($settlement['description'] ?? "Settlement #{$settlement['uid']}"));
                    if ($payeeId > 0 && $payeeId !== $payerId) {
                        CashVaultController::logFlow($db, 'operating_expense', 'out', $amount, 'operating_expenses', (int)($settlement['related_entity_id'] ?? $sid), "Expense reimbursement: " . $cleanDesc, $payerId);
                        CashVaultController::logFlow($db, 'partner_settlement', 'in', $amount, 'operating_expenses', (int)($settlement['related_entity_id'] ?? $sid), "Expense reimbursement received: " . $cleanDesc, $payeeId);
                    } else {
                        CashVaultController::logFlow($db, 'operating_expense', 'out', $amount, 'operating_expenses', (int)($settlement['related_entity_id'] ?? $sid), $cleanDesc, $payerId);
                    }
                } else {
                    CashVaultController::logFlow($db, 'partner_settlement', 'out', $amount, 'partner_settlements', (int)$sid, "Bulk settlement: " . ($settlement['uid'] ?? '#'.$sid), $payerId);
                    if ($payeeId > 0 && $payeeId !== $payerId) {
                        CashVaultController::logFlow($db, 'partner_settlement', 'in', $amount, 'partner_settlements', (int)$sid, "Bulk settlement: " . ($settlement['uid'] ?? '#'.$sid), $payeeId);
                    }
                }
            }

            $newSettledTotal = Decimal::add($alreadySettled, $amount);
            $newSettlementStatus = Decimal::comp($newSettledTotal, $totalLiability) >= 0 ? 'settled' : 'pending';

            $db->prepare('UPDATE partner_settlements SET status = :s, settled_amount = :sa, settled_at = NOW(), settled_by = :sb, settled_source = :ssrc WHERE id = :id')
               ->execute(['s' => $newSettlementStatus, 'sa' => $newSettledTotal, 'sb' => $sessionUser, 'ssrc' => $bulkSource, 'id' => (int)$sid]);

            // Sync cycle payments if cycle_id > 0

            if ($cId > 0) {
                $db->prepare("UPDATE recurring_bill_cycle_payments SET paid_at = NOW(), paid_from = :pf WHERE settlement_id = :sid AND paid_at IS NULL")
                   ->execute(['sid' => (int)$sid, 'pf' => $bulkSource]);

                $sumPaidStmt = $db->prepare("SELECT COALESCE(SUM(amount), '0') FROM recurring_bill_cycle_payments WHERE cycle_id = :cid AND voided_at IS NULL AND paid_at IS NOT NULL");
                $sumPaidStmt->execute(['cid' => $cId]);
                $sumPaid = $sumPaidStmt->fetchColumn();
                if ($sumPaid !== false) {
                    $db->prepare("UPDATE recurring_bill_cycles SET amount_paid = :sp WHERE id = :cid")->execute(['sp' => $sumPaid, 'cid' => $cId]);
                }

                $unsettledCycStmt = $db->prepare("SELECT COUNT(*) FROM partner_settlements WHERE (cycle_id = :cid OR (related_entity_type = 'recurring_bill_cycle' AND related_entity_id = :cid2)) AND status NOT IN ('settled', 'cancelled')");
                $unsettledCycStmt->execute(['cid' => $cId, 'cid2' => $cId]);
                if ((int)$unsettledCycStmt->fetchColumn() === 0) {
                    $db->prepare("UPDATE recurring_bill_cycles SET status = 'paid', split_status = 'settled', paid_at = NOW(), paid_by = :sb, paid_from = :pf WHERE id = :cid")
                       ->execute(['cid' => $cId, 'sb' => $sessionUser, 'pf' => $bulkSource]);
                }
            }

            // Sync operating expenses settlement status if all shares are paid
            $oeId = (($settlement['related_entity_type'] ?? '') === 'operating_expense') ? (int)($settlement['related_entity_id'] ?? 0) : 0;
            if ($oeId > 0) {
                $unsettledOeStmt = $db->prepare("SELECT COUNT(*) FROM partner_settlements WHERE related_entity_type = 'operating_expense' AND related_entity_id = :oeid AND status NOT IN ('settled', 'cancelled')");
                $unsettledOeStmt->execute(['oeid' => $oeId]);
                if ((int)$unsettledOeStmt->fetchColumn() === 0) {
                    $db->prepare("UPDATE operating_expenses SET settlement_status = 'settled' WHERE id = :oeid")->execute(['oeid' => $oeId]);
                }
            }

            // Handle stock transfer & proxy purchase lot update
            if ($isProxy && !empty($settlement['related_entity_id'])) {
                $pid = (int)$settlement['related_entity_id'];
                $db->prepare("UPDATE purchases SET payment_status = 'paid', amount_paid = total, paid_at = NOW(), paid_by = :pb, owner_user_id = :owner, transfer_status = NULL WHERE id = :pid")
                   ->execute([
                       'pb'    => (int)$settlement['payer_user_id'],
                       'owner' => (int)$settlement['payer_user_id'],
                       'pid'   => $pid,
                   ]);
            } elseif ($settlement['settlement_type'] === 'stock_transfer' && !empty($settlement['related_entity_id'])) {
                $pid = (int)$settlement['related_entity_id'];
                $db->prepare("UPDATE purchases SET owner_user_id = :owner, transfer_status = NULL WHERE id = :pid")
                   ->execute([
                       'owner' => (int)$settlement['payer_user_id'],
                       'pid'   => $pid,
                   ]);
            }

            $settled++;
        }

        $db->commit();

        EntityVersion::bump($db, 'partner_settlements', 'cash_vault', 'orders');

        SystemLog::write('partner_settlements', 'bulk_settled', 0, "Bulk settle ($settled items)", json_encode(['count' => $settled, 'ids' => $ids]));

        Response::json(['ok' => true, 'settled_count' => $settled]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                try { $db->rollBack(); } catch (\Throwable $ign) {
                    error_log("Suppressed exception in " . __METHOD__ . ": " . $ign->getMessage());
                }
            }
            error_log("SEC-40 Defensive exception in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Bulk settlement failed due to a system error'], 500);
            return;
        }
    }

    /**
     * Release / unlock a pending settlement (Lead Owner unlocks funds for Payee).
     */
    public function release(string $id, array $data = []): void
    {
        $db = Database::getConnection();
        $this->ensureTable($db);
        $db->beginTransaction();
        try {

        $stmt = $db->prepare('SELECT * FROM partner_settlements WHERE id = :id FOR UPDATE');
        $stmt->execute(['id' => $id]);
        $settlement = $stmt->fetch();

        if (!$settlement) {
            $db->rollBack();
            Response::json(['error' => 'Settlement not found'], 404);
            return;
        }

        $isOrder = (($settlement['related_entity_type'] ?? '') === 'orders' || ($settlement['related_entity_type'] ?? '') === 'order');

        if (!$isOrder && $settlement['status'] !== 'pending') {
            $db->rollBack();
            Response::json(['error' => 'Only pending settlements can be released'], 400);
            return;
        }

        if (!$isOrder) {
            $db->rollBack();
            Response::json(['error' => 'Escrow release is only applicable to Order installment settlements. Bills and operating expenses do not require escrow release.'], 400);
            return;
        }

        $ord = null;
        $orderOwnerId = 0;
        if (!empty($settlement['related_entity_id'])) {
            $orderCheck = $db->prepare("SELECT id, status, deleted_at, owner_user_id, created_by, agreement_status, has_refusal, service_owners_data, custom_sale FROM orders WHERE id = :oid");
            $orderCheck->execute(['oid' => $settlement['related_entity_id']]);
            $ord = $orderCheck->fetch();
            if ($ord && (in_array($ord['status'], ['deleted', 'returned', 'return_pending'], true) || $ord['deleted_at'] !== null)) {
                $db->rollBack();
                $statusMsg = ($ord['status'] === 'return_pending') ? 'A return is currently pending confirmation for this order.' : "The order linked to this settlement is {$ord['status']}.";
                Response::json(['error' => "Cannot release funds: {$statusMsg}", 'order_status' => $ord['status']], 400);
                return;
            }
            if ($ord) {
                $orderOwnerId = !empty($ord['owner_user_id']) ? (int)$ord['owner_user_id'] : 0;
                if ($orderOwnerId === 0 && !empty($ord['service_owners_data'])) {
                    try {
                        $team = json_decode($ord['service_owners_data'], true);
                        if (!empty($team) && is_array($team) && !empty($team[0]['user_id'])) {
                            $orderOwnerId = (int)$team[0]['user_id'];
                        }
                    } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
                }
                if ($orderOwnerId === 0) {
                    $orderOwnerId = (int)($ord['created_by'] ?? 0);
                }
            }
        }

        $sessionUser = (int)($_SESSION['user_id'] ?? 0);
        $isAdmin = !empty($_SESSION['is_admin']) || (isset($_SESSION['role']) && $_SESSION['role'] === 'admin');

        $isOrder = (($settlement['related_entity_type'] ?? '') === 'orders' || ($settlement['related_entity_type'] ?? '') === 'order');

        if ($isOrder) {
            // Strictly ONLY the order owner or settlement payer can release funds.
            // A cashier who is neither the owner nor payer, or the payee cannot release funds.
            $passedOwnerId = !empty($data['order_owner_id']) ? (int)$data['order_owner_id'] : 0;
            $payerUserId = (int)($settlement['payer_user_id'] ?? 0);

            $isAuthorized = ($sessionUser > 0) && (
                $sessionUser === $orderOwnerId ||
                $sessionUser === $payerUserId ||
                ($passedOwnerId > 0 && $sessionUser === $passedOwnerId && ($passedOwnerId === $orderOwnerId || $passedOwnerId === $payerUserId))
            );

            if (!$isAuthorized) {
                $db->rollBack();
                SystemLog::write('partner_settlements', 'security_violation', (int)$id, $settlement['description'] ?? "Settlement #$id", json_encode([
                    'violation'    => 'unauthorized_order_release_attempt',
                    'settlement_id'=> (int)$id,
                    'owner_id'     => $orderOwnerId,
                    'payer_id'     => $payerUserId,
                    'payee_id'     => (int)$settlement['payee_user_id'],
                    'attempted_by' => $sessionUser
                ], JSON_UNESCAPED_UNICODE), $sessionUser);
                Response::json(['ok' => false, 'error' => 'Forbidden: Only the order owner can release funds.'], 403);
                return;
            }
        }

        if ($ord) {
            // Agreement Consensus Gate: Order must have completed Phase 1 (all_accepted or is_locked_for_edit)
            $orderAgr = $ord['agreement_status'] ?? 'pending';
            $isPhase2Order = !empty($ord['is_locked_for_edit']) || $orderAgr === 'all_accepted';
            if (!$isPhase2Order) {
                $db->rollBack();
                Response::json([
                    'ok' => false,
                    'error' => 'Cannot release funds: The order agreement is still pending acceptance. All partners must accept before funds can be released.',
                    'agreement_status' => $orderAgr
                ], 422);
                return;
            }
            // Verify that the target payee has accepted their terms (and in Phase 1, that all partners have accepted)
            if (!empty($ord['is_locked_for_edit'])) {
                $unacceptedStmt = $db->prepare("
                    SELECT COUNT(*) FROM partner_settlements
                    WHERE related_entity_type = 'orders'
                      AND related_entity_id = :oid
                      AND payee_user_id = :payee_id
                      AND status != 'cancelled'
                      AND settlement_type != 'order_return_clawback'
                      AND settlement_type != 'service_owner_statement'
                      AND (acceptance_status != 'accepted' OR status = 'refused')
                ");
                $unacceptedStmt->execute([
                    'oid' => (int)$settlement['related_entity_id'],
                    'payee_id' => (int)$settlement['payee_user_id']
                ]);
            } else {
                $unacceptedStmt = $db->prepare("
                    SELECT COUNT(*) FROM partner_settlements
                    WHERE related_entity_type = 'orders'
                      AND related_entity_id = :oid
                      AND status != 'cancelled'
                      AND settlement_type != 'order_return_clawback'
                      AND settlement_type != 'service_owner_statement'
                      AND (acceptance_status != 'accepted' OR status = 'refused')
                ");
                $unacceptedStmt->execute(['oid' => (int)$settlement['related_entity_id']]);
            }
            if ((int)$unacceptedStmt->fetchColumn() > 0) {
                $db->rollBack();
                Response::json([
                    'ok' => false,
                    'error' => 'Cannot release funds: Some partners have not accepted their terms or have refused.',
                    'agreement_status' => 'pending'
                ], 422);
                return;
            }
        }

        if ($isOrder) {

            // Multi-Tranche Waterfall Release for Consignment Orders:
            // Fetch all active sibling tranches for this order and partner
            $orderId = (int)$settlement['related_entity_id'];
            $payeeId = (int)$settlement['payee_user_id'];
            $sibStmt = $db->prepare("
                SELECT * FROM partner_settlements
                WHERE (related_entity_type = 'orders' OR related_entity_type = 'order')
                  AND related_entity_id = :order_id
                  AND payee_user_id = :payee_id
                  AND status != 'cancelled'
                  AND settlement_type != 'order_return_clawback'
                  AND settlement_type != 'service_owner_statement'
                ORDER BY waterfall_priority ASC, id ASC
                FOR UPDATE
            ");
            $sibStmt->execute(['order_id' => $orderId, 'payee_id' => $payeeId]);
            $siblingTranches = $sibStmt->fetchAll(PDO::FETCH_ASSOC);

            // Compute total remaining locked across all siblings
            $totalOrderLocked = '0';
            foreach ($siblingTranches as $sib) {
                $sAmt = (string)$sib['amount'];
                $sRel = (string)($sib['released_amount'] ?? '0');
                if (($sib['release_status'] ?? '') === 'released' && Decimal::comp($sRel, '0') <= 0) {
                    $sRel = $sAmt;
                }
                $sLocked = Decimal::comp($sAmt, $sRel) > 0 ? Decimal::sub($sAmt, $sRel) : '0';
                $totalOrderLocked = Decimal::add($totalOrderLocked, $sLocked);
            }

            if (Decimal::comp($totalOrderLocked, '0') <= 0) {
                $db->rollBack();
                Response::json([
                    'ok' => true,
                    'message' => 'All consignment funds for this order are already fully released',
                    'release_status' => 'released',
                    'released_amount' => $totalOrderLocked
                ]);
                return;
            }

            // Determine amount to release:
            $orderAmountToRelease = $totalOrderLocked;
            if (empty($data['release_all'])) {
                $inputAmount = $data['amount'] ?? $data['release_amount'] ?? null;
                if ($inputAmount !== null && $inputAmount !== '') {
                    $inputAmountStr = (string)$inputAmount;
                    if (!is_numeric($inputAmountStr) || Decimal::comp($inputAmountStr, '0') <= 0) {
                        $db->rollBack();
                        Response::json(['error' => 'Release amount must be a valid positive number.'], 400);
                        return;
                    }
                    if (Decimal::comp($inputAmountStr, $totalOrderLocked) > 0) {
                        $db->rollBack();
                        $cleanLocked = rtrim(rtrim(Decimal::format($totalOrderLocked, 2), '0'), '.');
                        Response::json(['error' => "Release amount cannot exceed the total remaining locked balance ({$cleanLocked} DZD)."], 400);
                        return;
                    }
                    $orderAmountToRelease = $inputAmountStr;
                }
            }

            // Waterfall Allocation across sibling tranches (Priority 1 Senior Cost first, Priority 2 Junior Profit second)
            $remToRelease = $orderAmountToRelease;
            $updatedTranches = [];
            $batchEventId = 'REL-' . uniqid();
            $batchTimestamp = date('Y-m-d H:i:s');
            foreach ($siblingTranches as $sib) {
                if (Decimal::comp($remToRelease, '0') <= 0) {
                    break;
                }
                $sibId = (int)$sib['id'];
                $sAmt = (string)$sib['amount'];
                $sRel = (string)($sib['released_amount'] ?? '0');
                if (($sib['release_status'] ?? '') === 'released' && Decimal::comp($sRel, '0') <= 0) {
                    $sRel = $sAmt;
                }
                $sLocked = Decimal::comp($sAmt, $sRel) > 0 ? Decimal::sub($sAmt, $sRel) : '0';
                if (Decimal::comp($sLocked, '0') <= 0) {
                    continue;
                }

                $releaseThis = Decimal::min($remToRelease, $sLocked);
                $remToRelease = Decimal::sub($remToRelease, $releaseThis);
                $newSibRel = Decimal::add($sRel, $releaseThis);
                $newSibStatus = Decimal::comp($newSibRel, $sAmt) >= 0 ? 'released' : 'partial';

                $rawSibDet = $sib['details'] ?? '{}';
                $sibDet = is_string($rawSibDet) ? json_decode($rawSibDet, true) : (is_array($rawSibDet) ? $rawSibDet : []);
                if (!is_array($sibDet)) $sibDet = [];
                $relHistory = $sibDet['release_history'] ?? [];
                $releaserStmt = $db->prepare("SELECT username FROM users WHERE id = :uid");
                $releaserStmt->execute(['uid' => $sessionUser]);
                $releaserUsername = $releaserStmt->fetchColumn() ?: 'Cashier';
                $relHistory[] = [
                    'event_id' => $batchEventId,
                    'timestamp' => $batchTimestamp,
                    'amount' => $releaseThis,
                    'released_by' => $sessionUser,
                    'released_by_name' => $releaserUsername,
                    'note' => $data['note'] ?? null
                ];
                $sibDet['release_history'] = $relHistory;
                $sibDet['release_count'] = count($relHistory);
                $sibDet['last_released_amount'] = $releaseThis;
                $sibDet['last_released_at'] = $batchTimestamp;
                $sibDet['last_released_by'] = $sessionUser;

                $db->prepare('UPDATE partner_settlements SET release_status = :rs, released_amount = :ra, released_at = NOW(), released_by = :rb, details = :det, updated_at = NOW() WHERE id = :id')
                   ->execute([
                       'rs' => $newSibStatus,
                       'ra' => $newSibRel,
                       'rb' => $sessionUser,
                       'det' => json_encode($sibDet, JSON_UNESCAPED_UNICODE),
                       'id' => $sibId
                   ]);

                $updatedTranches[] = [
                    'id' => $sibId,
                    'released_now' => $releaseThis,
                    'total_released' => $newSibRel,
                    'status' => $newSibStatus
                ];
            }

            // Stage 3 Notification: Notify stock owner that funds have been released and are ready to claim
            try {
                $payerStmt = $db->prepare("SELECT username FROM users WHERE id = :id LIMIT 1");
                $payerStmt->execute(['id' => (int)$settlement['payer_user_id']]);
                $payerRow = $payerStmt->fetch();
                $payerName = $payerRow ? $payerRow['username'] : 'Seller';

                $ordUidStmt = $db->prepare("SELECT uid FROM orders WHERE id = :id LIMIT 1");
                $ordUidStmt->execute(['id' => $orderId]);
                $ordUidRow = $ordUidStmt->fetch();
                $orderUidStr = ($ordUidRow && !empty($ordUidRow['uid'])) ? $ordUidRow['uid'] : ($settlement['related_entity_uid'] ?? "ORD-{$orderId}");

                $cleanReleased = rtrim(rtrim(Decimal::format($orderAmountToRelease, 2), '0'), '.');
                $notifTitle = "Consignment Payout Released: #{$orderUidStr}";
                $notifBody = "@{$payerName} released {$cleanReleased} DZD for Order #{$orderUidStr}. Available to claim immediately.";
                $db->prepare('INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at) VALUES (:uid, "settlement", :t, :b, :aurl, "orders", :oid, :stag, 0, NOW())')
                   ->execute([
                       'uid'  => (int)$settlement['payee_user_id'],
                       't'    => $notifTitle,
                       'b'    => $notifBody,
                       'aurl' => "#order-details:{$orderId}?step=claim",
                       'oid'  => $orderId,
                       'stag' => "order_released_{$orderId}_" . time(),
                   ]);
            } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

            $db->commit();

            SystemLog::write('partner_settlements', 'released', (int)$id, $settlement['uid'] ?? "Settlement #$id", json_encode([
                'order_id'            => $orderId,
                'amount_released_now' => $orderAmountToRelease,
                'remaining_locked'    => Decimal::sub($totalOrderLocked, $orderAmountToRelease),
                'released_by'         => $sessionUser,
                'payer'               => (int)$settlement['payer_user_id'],
                'payee'               => (int)$settlement['payee_user_id'],
                'tranches'            => $updatedTranches,
                'note'                => $data['note'] ?? null
            ], JSON_UNESCAPED_UNICODE), $sessionUser);

            EntityVersion::bump($db, 'partner_settlements', 'cash_vault', 'orders');

            Response::json([
                'ok' => true,
                'message' => 'Consignment funds released successfully down waterfall tranches',
                'release_status' => Decimal::comp($orderAmountToRelease, $totalOrderLocked) >= 0 ? 'released' : 'partial',
                'released_amount' => $orderAmountToRelease,
                'updated_tranches' => $updatedTranches
            ]);
            return;
        }

        $totalAmount = (string)$settlement['amount'];
        $currentReleased = (string)($settlement['released_amount'] ?? '0');
        if (($settlement['release_status'] ?? '') === 'released' && Decimal::comp($currentReleased, '0') <= 0) {
            $currentReleased = $totalAmount;
        }
        $remainingLocked = Decimal::comp($totalAmount, $currentReleased) > 0 ? Decimal::sub($totalAmount, $currentReleased) : '0';

        if (($settlement['release_status'] ?? 'locked') === 'released' && Decimal::comp($remainingLocked, '0') <= 0) {
            $db->rollBack();
            Response::json([
                'ok' => true,
                'message' => 'Settlement is already fully released',
                'release_status' => 'released',
                'released_amount' => $currentReleased
            ]);
            return;
        }

        // Authorization Guard: Only the payer (fund owner) or an administrator can release non-order settlements
        if (!$isAdmin && $sessionUser !== (int)$settlement['payer_user_id']) {
            $db->rollBack();
            Response::json(['error' => 'Forbidden: Only the payer (fund owner) or an administrator can release this settlement.'], 403);
            return;
        }

        // Waterfall Priority Dependency Guard: Net Profit cannot be released until Senior Cost is 100% satisfied
        if (!empty($settlement['linked_settlement_id']) && (int)($settlement['waterfall_priority'] ?? 1) > 1) {
            $linkedStmt = $db->prepare('SELECT id, release_status, released_amount, amount FROM partner_settlements WHERE id = :lid FOR UPDATE');
            $linkedStmt->execute(['lid' => $settlement['linked_settlement_id']]);
            $senior = $linkedStmt->fetch();
            if ($senior) {
                $seniorAmt = (string)$senior['amount'];
                $seniorRel = (string)($senior['released_amount'] ?? '0');
                if (Decimal::comp($seniorRel, $seniorAmt) < 0) {
                    $db->rollBack();
                    $unrel = Decimal::sub($seniorAmt, $seniorRel);
                    $cleanUnrel = rtrim(rtrim(Decimal::format($unrel, 2), '0'), '.');
                    Response::json(['error' => "Waterfall Guard: Cannot release Net Profit share until Senior Cost Recovery (#{$senior['id']}) is 100% released. Remaining cost to release: {$cleanUnrel} DZD."], 400);
                    return;
                }
            }
        }

        // Determine amount to release:
        // 1. If 'release_all' is true -> release all remaining locked.
        // 2. If 'amount' or 'release_amount' is specified -> validate and release that portion.
        // 3. Otherwise default to all remaining locked (backward-compatible).
        $amountToRelease = $remainingLocked;

        if (empty($data['release_all'])) {
            $inputAmount = $data['amount'] ?? $data['release_amount'] ?? null;
            if ($inputAmount !== null && $inputAmount !== '') {
                $inputAmountStr = (string)$inputAmount;
                if (!is_numeric($inputAmountStr) || Decimal::comp($inputAmountStr, '0') <= 0) {
                    $db->rollBack();
                    Response::json(['error' => 'Release amount must be a valid positive number.'], 400);
                    return;
                }
                if (Decimal::comp($inputAmountStr, $remainingLocked) > 0) {
                    $db->rollBack();
                    $cleanLocked = rtrim(rtrim(Decimal::format($remainingLocked, 2), '0'), '.');
                    Response::json(['error' => "Release amount cannot exceed the remaining locked balance ({$cleanLocked} DZD)."], 400);
                    return;
                }
                $amountToRelease = $inputAmountStr;
            }
        }

        $newTotalReleased = Decimal::add($currentReleased, $amountToRelease);
        $newReleaseStatus = Decimal::comp($newTotalReleased, $totalAmount) >= 0 ? 'released' : 'partial';

        $db->prepare('UPDATE partner_settlements SET release_status = :rs, released_amount = :ra, released_at = NOW(), released_by = :rb WHERE id = :id')
           ->execute([
               'rs' => $newReleaseStatus,
               'ra' => $newTotalReleased,
               'rb' => $sessionUser,
               'id' => $id
           ]);

        $db->commit();

        SystemLog::write('partner_settlements', 'released', (int)$id, $settlement['uid'] ?? "Settlement #$id", json_encode([
            'total_liability'     => $totalAmount,
            'amount_released_now' => $amountToRelease,
            'total_released'      => $newTotalReleased,
            'remaining_locked'    => Decimal::sub($totalAmount, $newTotalReleased),
            'release_status'      => $newReleaseStatus,
            'released_by'         => $sessionUser,
            'payer'               => (int)$settlement['payer_user_id'],
            'payee'               => (int)$settlement['payee_user_id'],
            'bill_id'             => $settlement['bill_id'] ?? null,
            'cycle_id'            => $settlement['cycle_id'] ?? null,
            'related_entity_type' => $settlement['related_entity_type'] ?? null,
            'related_entity_id'   => $settlement['related_entity_id'] ?? null,
            'note'                => $data['note'] ?? null
        ]), $sessionUser);

        EntityVersion::bump($db, 'partner_settlements', 'cash_vault', 'orders');

        Response::json([
            'ok'                  => true,
            'release_status'      => $newReleaseStatus,
            'released_amount'     => $newTotalReleased,
            'amount_released_now' => $amountToRelease,
            'total_amount'        => $totalAmount,
            'remaining_locked'    => Decimal::sub($totalAmount, $newTotalReleased)
        ]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                try { $db->rollBack(); } catch (\Throwable $ign) {
                    error_log("Suppressed exception in " . __METHOD__ . ": " . $ign->getMessage());
                }
            }
            error_log("SEC-40 Defensive exception in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Settlement release failed due to a system error'], 500);
            return;
        }
    }

    /**
     * Cancel a pending settlement.
     */
    public function cancel(string $id, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureTable($db);
        $db->beginTransaction();
        try {

        $stmt = $db->prepare('SELECT * FROM partner_settlements WHERE id = :id FOR UPDATE');
        $stmt->execute(['id' => $id]);
        $settlement = $stmt->fetch();

        if (!$settlement) {
            $db->rollBack();
            Response::json(['error' => 'Settlement not found'], 404);
            return;
        }
        if ($settlement['status'] !== 'pending') {
            $db->rollBack();
            Response::json(['error' => 'Only pending settlements can be cancelled'], 400);
            return;
        }

        $sessionUser = (int)($_SESSION['user_id'] ?? 0);
        if ($sessionUser <= 0) {
            $db->rollBack();
            Response::json(['error' => 'Unauthorized: Please log in.'], 401);
            return;
        }

        if (Decimal::comp((string)($settlement['settled_amount'] ?? '0'), '0') > 0) {
            $db->rollBack();
            Response::json(['error' => 'Cannot cancel a settlement that has partial settled payments. Please issue a refund first.'], 400);
            return;
        }

        $isAdmin = !empty($_SESSION['is_admin']);
        $payerId = (int)$settlement['payer_user_id'];
        $payeeId = (int)$settlement['payee_user_id'];
        $createdById = (int)($settlement['created_by'] ?? 0);

        // Authorization Guard: For bill/expense splits, strictly creator or admin can cancel (debtor cannot cancel debt)
        if (in_array($settlement['settlement_type'], ['bill_split', 'expense_split'], true)) {
            if (!$isAdmin && $sessionUser !== $createdById) {
                $db->rollBack();
                Response::json(['error' => 'Forbidden: Only the creator or an admin can cancel this split settlement.'], 403);
                return;
            }
        } else {
            if (!$isAdmin && $sessionUser !== $payerId && $sessionUser !== $payeeId && $sessionUser !== $createdById) {
                $db->rollBack();
                Response::json(['error' => 'Forbidden: You are not authorized to cancel this settlement.'], 403);
                return;
            }
        }

        $reason = $data['reason'] ?? 'Cancelled by user';

        $db->prepare('UPDATE partner_settlements SET status = :s, cancelled_at = NOW(), cancelled_by = :cb, cancel_reason = :cr WHERE id = :id AND status = "pending"')
           ->execute(['s' => 'cancelled', 'cb' => $sessionUser, 'cr' => $reason, 'id' => $id]);

        if (($settlement['related_entity_type'] ?? '') === 'orders' && !empty($settlement['related_entity_id'])) {
            OrdersController::syncOrderAgreementStatus($db, (int)$settlement['related_entity_id']);
        }

        $isProxy = false;
        if (!empty($settlement['details'])) {
            $sDetails = is_array($settlement['details']) ? $settlement['details'] : json_decode($settlement['details'], true);
            if (!empty($sDetails['is_proxy_purchase'])) {
                $isProxy = true;
            }
        }

        // If this settlement is a stock transfer, unlock or soft-delete the purchase lot
        if ($settlement['settlement_type'] === 'stock_transfer' && !empty($settlement['related_entity_id'])) {
            $pid = (int)$settlement['related_entity_id'];
            $pStmt = $db->prepare('SELECT * FROM purchases WHERE id = :pid FOR UPDATE');
            $pStmt->execute(['pid' => $pid]);
            $purchase = $pStmt->fetch();

            if ($purchase) {
                $parentId = !empty($purchase['created_from_purchase_id']) ? (int)$purchase['created_from_purchase_id'] : null;
                if ($parentId) {
                    // Child lot from partial transfer fork: Restore units to parent lot & soft-delete child
                    $pStmt2 = $db->prepare('SELECT * FROM purchases WHERE id = :pid FOR UPDATE');
                    $pStmt2->execute(['pid' => $parentId]);
                    $parent = $pStmt2->fetch();
                    if ($parent && $parent['deleted_at'] === null) {
                        $childQty = (string)($purchase['quantity'] ?? '0');
                        $childRem = (string)($purchase['quantity_remaining'] ?? '0');
                        $childUnitCost = (string)($purchase['price'] ?? '0');

                        $restoredQty = Decimal::add((string)$parent['quantity'], $childQty);
                        $restoredRem = Decimal::add((string)$parent['quantity_remaining'], $childRem);
                        $restoredTotal = Decimal::mul((string)$parent['price'], $restoredQty);
                        $restoredPaid = Decimal::min(Decimal::add((string)$parent['amount_paid'], Decimal::mul($childUnitCost, $childQty)), $restoredTotal);

                        $db->prepare('UPDATE purchases SET
                            quantity = :qty,
                            quantity_remaining = :qty_rem,
                            total = :total,
                            amount_paid = :amount_paid
                        WHERE id = :id')->execute([
                            'qty' => $restoredQty,
                            'qty_rem' => $restoredRem,
                            'total' => $restoredTotal,
                            'amount_paid' => $restoredPaid,
                            'id' => $parentId,
                        ]);
                    }
                    $db->prepare('UPDATE purchases SET
                        deleted_at = NOW(),
                        deleted_by = :uid,
                        delete_reason = :reason,
                        quantity_remaining = 0,
                        transfer_status = "cancelled"
                    WHERE id = :id')->execute([
                        'uid' => $sessionUser,
                        'reason' => $reason ?: 'Transfer cancelled - merged back into parent lot',
                        'id' => $pid,
                    ]);
                } elseif ($isProxy || (!empty($purchase['created_by']) && (int)$purchase['created_by'] !== (int)($purchase['owner_user_id'] ?? 0) && $purchase['payment_status'] !== 'paid')) {
                    // Proxy purchase rejected: Revert products.quantity and soft-delete purchase
                    $remQty = $purchase['quantity_remaining'] ?? $purchase['quantity'] ?? '0';
                    if (Decimal::comp($remQty, '0') > 0) {
                        $db->prepare('UPDATE products SET quantity = GREATEST(0, quantity - :qty), updated_at = NOW() WHERE id = :prod_id')
                           ->execute(['qty' => $remQty, 'prod_id' => $purchase['product_id']]);
                    }
                    $db->prepare('UPDATE purchases SET
                        deleted_at = NOW(),
                        deleted_by = :uid,
                        delete_reason = :reason,
                        quantity_remaining = 0,
                        transfer_status = "cancelled"
                    WHERE id = :id')->execute([
                        'uid' => $sessionUser,
                        'reason' => $reason ?: 'Rejected proxy purchase',
                        'id' => $pid,
                    ]);
                } else {
                    $revertedOwner = !empty($purchase['created_by']) ? (int)$purchase['created_by'] : (int)$settlement['payee_user_id'];
                    $db->prepare('UPDATE purchases SET
                        owner_user_id = :owner,
                        transfer_status = NULL,
                        transfer_to_user_id = NULL,
                        transfer_valuation = NULL,
                        transfer_settlement_id = NULL,
                        transfer_initiated_at = NULL,
                        transfer_initiated_by = NULL
                    WHERE id = :pid')->execute([
                        'owner' => $revertedOwner,
                        'pid'   => $pid,
                    ]);
                }
            }
        }

        $targetNotifyUser = ((int)$settlement['payer_user_id'] === $sessionUser) 
            ? (int)$settlement['payee_user_id'] 
            : (int)$settlement['payer_user_id'];

        if ($targetNotifyUser > 0 && $targetNotifyUser !== $sessionUser) {
            $stUid = $settlement['uid'] ?? "#STL-{$id}";
            $cancellerName = $_SESSION['username'] ?? "User #{$sessionUser}";
            $notifTitle = "Settlement Cancelled ({$stUid})";
            $notifBody = "@{$cancellerName} cancelled {$stUid}.";
            if (!empty($reason)) {
                $notifBody .= " Reason: \"{$reason}\"";
            }
            $notifActionUrl = '#page-bills?tab=settlements';
            $notifEntityType = 'partner_settlements';
            $notifEntityId = (int)$id;
            $notifStage = 'statements:settlement_cancelled';
            $db->prepare("INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at) VALUES (:uid, 'settlement', :t, :b, :aurl, :etype, :eid, :stage, 0, NOW())")
               ->execute([
                   'uid'   => $targetNotifyUser,
                   't'     => $notifTitle,
                   'b'     => $notifBody,
                   'aurl'  => $notifActionUrl,
                   'etype' => $notifEntityType,
                   'eid'   => $notifEntityId,
                   'stage' => $notifStage
               ]);
        }

        $db->commit();

        EntityVersion::bump($db, 'partner_settlements', 'cash_vault', 'orders');

        SystemLog::write('partner_settlements', 'cancelled', (int)$id, $settlement['uid'] ?? "Settlement #$id", json_encode([
            'reason'              => $reason,
            'amount'              => (string)$settlement['amount'],
            'payer'               => (int)$settlement['payer_user_id'],
            'payee'               => (int)$settlement['payee_user_id'],
            'bill_id'             => $settlement['bill_id'] ?? null,
            'cycle_id'            => $settlement['cycle_id'] ?? null,
            'related_entity_type' => $settlement['related_entity_type'] ?? null,
            'related_entity_id'   => $settlement['related_entity_id'] ?? null
        ]), $sessionUser);

        Response::json(['ok' => true]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                try { $db->rollBack(); } catch (\Throwable $ign) {
                    error_log("Suppressed exception in " . __METHOD__ . ": " . $ign->getMessage());
                }
            }
            error_log("SEC-40 Defensive exception in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Settlement cancellation failed due to a system error'], 500);
            return;
        }
    }

    /**
     * Ensure the partner_settlements table exists (idempotent & optimized).
     */
    public function ensureTable(\PDO $db): void
    {
        if (self::$tableEnsured || $db->inTransaction()) {
            return;
        }
        self::$tableEnsured = true;

        try {
            $existingCols = $db->query("SHOW COLUMNS FROM partner_settlements")->fetchAll(\PDO::FETCH_COLUMN);
            if (in_array('removal_refund_eligible', $existingCols, true) && in_array('order_item_id', $existingCols, true)) {
                return;
            }
        } catch (\Exception $e) {
            $this->createPartnerSettlementsTable($db);
            return;
        }

        $cols = [
            'uid'               => "ALTER TABLE partner_settlements ADD COLUMN uid VARCHAR(50) UNIQUE DEFAULT NULL",
            'original_amount'   => "ALTER TABLE partner_settlements ADD COLUMN original_amount DECIMAL(32,16) NULL",
            'release_status'    => "ALTER TABLE partner_settlements ADD COLUMN release_status VARCHAR(20) NOT NULL DEFAULT 'locked'",
            'released_amount'   => "ALTER TABLE partner_settlements ADD COLUMN released_amount DECIMAL(32,16) NOT NULL DEFAULT '0.0000000000000000'",
            'settled_amount'    => "ALTER TABLE partner_settlements ADD COLUMN settled_amount DECIMAL(32,16) NOT NULL DEFAULT '0.0000000000000000'",
            'paid_amount'       => "ALTER TABLE partner_settlements ADD COLUMN paid_amount DECIMAL(32,16) NOT NULL DEFAULT '0.0000000000000000'",
            'released_at'       => "ALTER TABLE partner_settlements ADD COLUMN released_at DATETIME NULL",
            'released_by'       => "ALTER TABLE partner_settlements ADD COLUMN released_by INT NULL",
            'settled_at'        => "ALTER TABLE partner_settlements ADD COLUMN settled_at DATETIME NULL",
            'settled_by'        => "ALTER TABLE partner_settlements ADD COLUMN settled_by INT NULL",
            'settled_via_transaction_id' => "ALTER TABLE partner_settlements ADD COLUMN settled_via_transaction_id INT NULL",
            'target_source'     => "ALTER TABLE partner_settlements ADD COLUMN target_source VARCHAR(20) NOT NULL DEFAULT 'vault'",
            'settled_source'    => "ALTER TABLE partner_settlements ADD COLUMN settled_source VARCHAR(20) NULL DEFAULT NULL",
            'related_entity_type' => "ALTER TABLE partner_settlements ADD COLUMN related_entity_type VARCHAR(50) NULL",
            'related_entity_id' => "ALTER TABLE partner_settlements ADD COLUMN related_entity_id INT NULL",
            'related_entity_uid' => "ALTER TABLE partner_settlements ADD COLUMN related_entity_uid VARCHAR(50) NULL",
            'bill_id'           => "ALTER TABLE partner_settlements ADD COLUMN bill_id INT NULL",
            'cycle_id'          => "ALTER TABLE partner_settlements ADD COLUMN cycle_id INT NULL",
            'description'       => "ALTER TABLE partner_settlements ADD COLUMN description TEXT NULL",
            'details'           => "ALTER TABLE partner_settlements ADD COLUMN details JSON NULL",
            'disputed_at'       => "ALTER TABLE partner_settlements ADD COLUMN disputed_at DATETIME NULL",
            'disputed_by'       => "ALTER TABLE partner_settlements ADD COLUMN disputed_by INT NULL",
            'dispute_reason'    => "ALTER TABLE partner_settlements ADD COLUMN dispute_reason TEXT NULL",
            'refused_at'        => "ALTER TABLE partner_settlements ADD COLUMN refused_at DATETIME NULL",
            'refused_by'        => "ALTER TABLE partner_settlements ADD COLUMN refused_by INT NULL",
            'refusal_reason'    => "ALTER TABLE partner_settlements ADD COLUMN refusal_reason TEXT NULL",
            'adjusted_at'       => "ALTER TABLE partner_settlements ADD COLUMN adjusted_at DATETIME NULL",
            'adjusted_by'       => "ALTER TABLE partner_settlements ADD COLUMN adjusted_by INT NULL",
            'adjustment_reason' => "ALTER TABLE partner_settlements ADD COLUMN adjustment_reason TEXT NULL",
            'cancelled_at'      => "ALTER TABLE partner_settlements ADD COLUMN cancelled_at DATETIME NULL",
            'cancelled_by'      => "ALTER TABLE partner_settlements ADD COLUMN cancelled_by INT NULL",
            'cancel_reason'     => "ALTER TABLE partner_settlements ADD COLUMN cancel_reason TEXT NULL",
            'acceptance_status' => "ALTER TABLE partner_settlements ADD COLUMN acceptance_status VARCHAR(20) NOT NULL DEFAULT 'pending'",
            'accepted_at'       => "ALTER TABLE partner_settlements ADD COLUMN accepted_at DATETIME NULL",
            'accepted_by'       => "ALTER TABLE partner_settlements ADD COLUMN accepted_by INT NULL",
            'waterfall_priority'=> "ALTER TABLE partner_settlements ADD COLUMN waterfall_priority INT NOT NULL DEFAULT 1",
            'waterfall_role'    => "ALTER TABLE partner_settlements ADD COLUMN waterfall_role VARCHAR(20) NOT NULL DEFAULT 'cost'",
            'linked_settlement_id' => "ALTER TABLE partner_settlements ADD COLUMN linked_settlement_id INT NULL DEFAULT NULL",
            'updated_at'        => "ALTER TABLE partner_settlements ADD COLUMN updated_at DATETIME NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP",
            'payment_demand_status' => "ALTER TABLE partner_settlements ADD COLUMN payment_demand_status VARCHAR(20) NULL DEFAULT NULL",
            'payment_demand_at' => "ALTER TABLE partner_settlements ADD COLUMN payment_demand_at DATETIME NULL",
            'payment_demand_paid_at' => "ALTER TABLE partner_settlements ADD COLUMN payment_demand_paid_at DATETIME NULL",
            'removal_request_status' => "ALTER TABLE partner_settlements ADD COLUMN removal_request_status VARCHAR(20) NULL DEFAULT NULL",
            'removal_requested_at' => "ALTER TABLE partner_settlements ADD COLUMN removal_requested_at DATETIME NULL",
            'removal_refund_eligible' => "ALTER TABLE partner_settlements ADD COLUMN removal_refund_eligible TINYINT(1) NOT NULL DEFAULT 0",
            'order_item_id'     => "ALTER TABLE partner_settlements ADD COLUMN order_item_id INT NULL AFTER related_entity_id, ADD INDEX idx_ps_order_item (order_item_id)",
        ];

        $colMap = array_flip($existingCols);
        foreach ($cols as $col => $sql) {
            if (!isset($colMap[$col])) {
                try {
                    $db->exec($sql);
                } catch (\Exception $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }
            }
        }

        $indexes = [
            'idx_ps_payer'            => "ALTER TABLE partner_settlements ADD INDEX idx_ps_payer (payer_user_id, status)",
            'idx_ps_payee'            => "ALTER TABLE partner_settlements ADD INDEX idx_ps_payee (payee_user_id, status)",
            'idx_ps_status'           => "ALTER TABLE partner_settlements ADD INDEX idx_ps_status (status)",
            'idx_ps_acceptance'       => "ALTER TABLE partner_settlements ADD INDEX idx_ps_acceptance (acceptance_status)",
            'idx_ps_type'             => "ALTER TABLE partner_settlements ADD INDEX idx_ps_type (settlement_type)",
            'idx_ps_release'          => "ALTER TABLE partner_settlements ADD INDEX idx_ps_release (release_status, status)",
            'idx_ps_related'          => "ALTER TABLE partner_settlements ADD INDEX idx_ps_related (related_entity_type, related_entity_id)",
            'idx_ps_bill_id'          => "ALTER TABLE partner_settlements ADD INDEX idx_ps_bill_id (bill_id, status)",
            'idx_ps_cycle_id'         => "ALTER TABLE partner_settlements ADD INDEX idx_ps_cycle_id (cycle_id, status)",
            'idx_ps_cycle_acceptance' => "ALTER TABLE partner_settlements ADD INDEX idx_ps_cycle_acceptance (cycle_id, acceptance_status)",
            'idx_ps_waterfall'        => "ALTER TABLE partner_settlements ADD INDEX idx_ps_waterfall (linked_settlement_id, waterfall_priority)",
        ];

        foreach ($indexes as $idxName => $idxSql) {
            try {
                $db->exec($idxSql);
            } catch (\Exception $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }
        }

        // Guarantee non-order settlements (bills, cycles, expenses) are permanently released with 100% released_amount
        try {
            $db->exec("UPDATE partner_settlements SET release_status = 'released', released_amount = amount WHERE (related_entity_type IS NULL OR related_entity_type != 'orders') AND (release_status != 'released' OR released_amount = 0)");
        } catch (\Exception $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }

        // Self-heal orphan settlements where parent order does not exist in orders table
        try {
            $db->exec("UPDATE partner_settlements SET status = 'cancelled', acceptance_status = 'revoked', release_status = 'revoked', cancelled_at = NOW(), cancel_reason = 'Order not found (orphan cleanup)' WHERE related_entity_type IN ('orders', 'order') AND (related_entity_id IS NULL OR related_entity_id NOT IN (SELECT id FROM orders)) AND status != 'cancelled'");
        } catch (\Exception $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }

        // Self-heal settlements whose parent order is deleted, returned, or cancelled
        try {
            $db->exec("UPDATE partner_settlements ps
                       JOIN orders o ON ps.related_entity_id = o.id
                       SET ps.status = 'cancelled', ps.acceptance_status = 'revoked', ps.release_status = 'revoked', ps.cancelled_at = NOW(), ps.cancel_reason = 'Order deleted or returned'
                       WHERE ps.related_entity_type IN ('orders', 'order')
                         AND ps.settlement_type != 'order_return_clawback'
                         AND (o.deleted_at IS NOT NULL OR o.status IN ('deleted', 'returned', 'cancelled'))
                         AND ps.status != 'cancelled'");
        } catch (\Exception $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }
    }

    private function createPartnerSettlementsTable(\PDO $db): void
    {
        $db->exec("CREATE TABLE IF NOT EXISTS partner_settlements (
            id INT AUTO_INCREMENT PRIMARY KEY,
            uid VARCHAR(50) UNIQUE DEFAULT NULL,
            payer_user_id INT NOT NULL,
            payee_user_id INT NOT NULL,
            amount DECIMAL(32,16) NOT NULL DEFAULT 0,
            original_amount DECIMAL(32,16) NULL,
            settlement_type VARCHAR(50) NOT NULL,
            status VARCHAR(20) NOT NULL DEFAULT 'pending',
            acceptance_status VARCHAR(20) NOT NULL DEFAULT 'pending',
            accepted_at DATETIME NULL,
            accepted_by INT NULL,
            release_status VARCHAR(20) NOT NULL DEFAULT 'locked',
            released_amount DECIMAL(32,16) NOT NULL DEFAULT 0,
            settled_amount DECIMAL(32,16) NOT NULL DEFAULT 0,
            paid_amount DECIMAL(32,16) NOT NULL DEFAULT 0,
            waterfall_priority INT NOT NULL DEFAULT 1,
            waterfall_role VARCHAR(20) NOT NULL DEFAULT 'cost',
            linked_settlement_id INT NULL DEFAULT NULL,
            target_source VARCHAR(20) NOT NULL DEFAULT 'vault',
            settled_source VARCHAR(20) NULL DEFAULT NULL,
            related_entity_type VARCHAR(50) NULL,
            related_entity_id INT NULL,
            related_entity_uid VARCHAR(50) NULL,
            bill_id INT NULL,
            cycle_id INT NULL,
            description TEXT NULL,
            details JSON NULL,
            released_at DATETIME NULL,
            released_by INT NULL,
            settled_at DATETIME NULL,
            settled_by INT NULL,
            settled_via_transaction_id INT NULL,
            disputed_at DATETIME NULL,
            disputed_by INT NULL,
            dispute_reason TEXT NULL,
            refused_at DATETIME NULL,
            refused_by INT NULL,
            refusal_reason TEXT NULL,
            adjusted_at DATETIME NULL,
            adjusted_by INT NULL,
            adjustment_reason TEXT NULL,
            cancelled_at DATETIME NULL,
            cancelled_by INT NULL,
            cancel_reason TEXT NULL,
            payment_demand_status VARCHAR(20) NULL DEFAULT NULL,
            payment_demand_at DATETIME NULL,
            payment_demand_paid_at DATETIME NULL,
            removal_request_status VARCHAR(20) NULL DEFAULT NULL,
            removal_requested_at DATETIME NULL,
            removal_refund_eligible TINYINT(1) NOT NULL DEFAULT 0,
            created_by INT NOT NULL,
            created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
            updated_at DATETIME NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
            INDEX idx_ps_payer (payer_user_id, status),
            INDEX idx_ps_payee (payee_user_id, status),
            INDEX idx_ps_status (status),
            INDEX idx_ps_acceptance (acceptance_status),
            INDEX idx_ps_type (settlement_type),
            INDEX idx_ps_release (release_status, status),
            INDEX idx_ps_related (related_entity_type, related_entity_id),
            INDEX idx_ps_bill_id (bill_id, status),
            INDEX idx_ps_cycle_id (cycle_id, status),
            INDEX idx_ps_cycle_acceptance (cycle_id, acceptance_status),
            INDEX idx_ps_waterfall (linked_settlement_id, waterfall_priority)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");
    }

    public function acceptClawback(string $id): void
    {
        $sessionUser = (int)($_SESSION['user_id'] ?? 0);
        $sessionRole = (string)($_SESSION['role'] ?? (!empty($_SESSION['is_admin']) ? 'admin' : 'cashier'));
        if ($sessionUser === 0) {
            Response::json(['error' => 'Unauthorized'], 401);
            return;
        }

        $db = Database::getConnection();
        $this->ensureTable($db);
        $db->beginTransaction();

        try {
            // Lock Hierarchy Harmonization: Always acquire parent 'orders' row lock first,
            // then child 'partner_settlements' row lock to prevent cross-transaction deadlocks with OrdersController::pay.
            $metaStmt = $db->prepare('SELECT related_entity_type, related_entity_id FROM partner_settlements WHERE id = :id');
            $metaStmt->execute(['id' => $id]);
            $sMeta = $metaStmt->fetch(PDO::FETCH_ASSOC);
            $order = null;
            if ($sMeta && ($sMeta['related_entity_type'] ?? '') === 'orders' && !empty($sMeta['related_entity_id'])) {
                $orderStmt = $db->prepare('SELECT * FROM orders WHERE id = :id FOR UPDATE');
                $orderStmt->execute(['id' => (int)$sMeta['related_entity_id']]);
                $order = $orderStmt->fetch(PDO::FETCH_ASSOC);
            }

            $stmt = $db->prepare('SELECT * FROM partner_settlements WHERE id = :id FOR UPDATE');
            $stmt->execute(['id' => $id]);
            $settlement = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$settlement) {
                $db->rollBack();
                Response::json(['error' => 'Settlement not found'], 404);
                return;
            }

            if ($settlement['settlement_type'] !== 'order_return_clawback') {
                $db->rollBack();
                Response::json(['error' => 'Invalid settlement type for clawback acceptance'], 400);
                return;
            }

            if ($settlement['status'] !== 'pending') {
                $db->rollBack();
                Response::json(['error' => 'This clawback request is no longer pending'], 400);
                return;
            }

            // Authorization Guard: strictly only the payer (the stock owner) can accept their clawback
            if ($sessionUser !== (int)$settlement['payer_user_id']) {
                $db->rollBack();
                Response::json(['error' => 'Forbidden: You are not authorized to accept this return request.'], 403);
                return;
            }

            $orderId = (int)$settlement['related_entity_id'];
            if (!$order) {
                $orderStmt = $db->prepare('SELECT * FROM orders WHERE id = :id FOR UPDATE');
                $orderStmt->execute(['id' => $orderId]);
                $order = $orderStmt->fetch(PDO::FETCH_ASSOC);
            }

            if (!$order) {
                $db->rollBack();
                Response::json(['error' => 'Associated order not found'], 404);
                return;
            }

            $clawbackAmount = (string)$settlement['amount'];
            $stockOwnerId = (int)$settlement['payer_user_id'];
            $sellerId = (int)$settlement['payee_user_id'];

            // 1. Safe Transfers:
            // Only transfer cash if clawbackAmount > 0
            if (Decimal::comp($clawbackAmount, '0') > 0) {
                (new CashVaultController())->ensureTwoSafes($db);
                // Outflow from Stock Owner's safe
                CashVaultController::logFlow(
                    $db,
                    'partner_settlement',
                    'out',
                    $clawbackAmount,
                    'partner_settlements',
                    (int)$id,
                    "Return Clawback Payout for Order " . ($order['uid'] ?? "#$orderId") . " to Seller",
                    $stockOwnerId,
                    true
                );

                // Inflow to Seller's safe
                CashVaultController::logFlow(
                    $db,
                    'partner_settlement',
                    'in',
                    $clawbackAmount,
                    'partner_settlements',
                    (int)$id,
                    "Return Clawback Received from Stock Owner for Order " . ($order['uid'] ?? "#$orderId"),
                    $sellerId
                );
            }

            $rawInput = file_get_contents('php://input');
            $body = !empty($rawInput) ? (json_decode($rawInput, true) ?: []) : [];
            $returnStrategy = $body['return_strategy'] ?? null;
            if (!$returnStrategy && !empty($settlement['details'])) {
                $det = is_array($settlement['details']) ? $settlement['details'] : json_decode($settlement['details'], true);
                $returnStrategy = $det['proposed_strategy'] ?? null;
            }
            if (!in_array($returnStrategy, ['absorb_master', 'original_lot', 'isolated_lot'], true)) {
                $returnStrategy = 'original_lot';
            }

            // 2. Update Clawback Settlement:
            $db->prepare('UPDATE partner_settlements SET status = "settled", acceptance_status = "accepted", settled_amount = :amt, settled_at = NOW(), settled_by = :uid WHERE id = :id')
               ->execute(['amt' => $clawbackAmount, 'uid' => $sessionUser, 'id' => $id]);

            // Check if there are other pending clawbacks for this order
            $pendingSiblingClaws = $db->prepare('SELECT COUNT(*) FROM partner_settlements 
                                                 WHERE related_entity_type = "orders" AND related_entity_id = :oid 
                                                   AND settlement_type = "order_return_clawback" 
                                                   AND status = "pending" AND id != :id');
            $pendingSiblingClaws->execute(['oid' => $orderId, 'id' => $id]);
            $remainingClawsCount = (int)$pendingSiblingClaws->fetchColumn();

            $restoreSummary = null;
            $ownerName = $_SESSION['username'] ?? 'Stock Owner';
            $cleanClawback = rtrim(rtrim(Decimal::format($clawbackAmount, 2), '0'), '.');

            $finalOrderStatus = 'return_pending';
            if ($remainingClawsCount === 0) {
                // All partner clawbacks accepted -> Restore stock and refund customer from Seller's safe!
                $pendingItemsStmt = $db->prepare('SELECT * FROM order_items WHERE order_id = :id AND return_acceptance_status = "pending"');
                $pendingItemsStmt->execute(['id' => $orderId]);
                $itemsToReturn = $pendingItemsStmt->fetchAll(PDO::FETCH_ASSOC);

                if (empty($itemsToReturn)) {
                    // Fallback for full return
                    $unretStmt = $db->prepare('SELECT * FROM order_items WHERE order_id = :id AND is_returned = 0');
                    $unretStmt->execute(['id' => $orderId]);
                    $itemsToReturn = $unretStmt->fetchAll(PDO::FETCH_ASSOC);
                }

                $returnedRevenue = '0';
                $returnedCost = '0';
                $returnedProfit = '0';
                $restoreSummary = ['returned_items_count' => count($itemsToReturn)];
                $isPureServiceOrder = empty($itemsToReturn);

                if ($isPureServiceOrder) {
                    $returnedRevenue = (string)($order['total'] ?? '0');
                    $returnedCost = Decimal::add((string)($order['products_cost'] ?? '0'), (string)($order['manual_cost'] ?? '0'));
                    $returnedProfit = (string)($order['profit'] ?? '0');
                    $restoreSummary = [
                        'is_custom_service' => true,
                        'service_name' => $order['service_name'] ?? "Order #$orderId",
                        'returned_items_count' => 1
                    ];
                } else {
                    $retItemsMap = [];
                    if (!empty($det['returned_items']) && is_array($det['returned_items'])) {
                        foreach ($det['returned_items'] as $rit) {
                            if (!empty($rit['item_id'])) {
                                $retItemsMap[(int)$rit['item_id']] = $rit;
                            } elseif (!empty($rit['product_id'])) {
                                $retItemsMap['prod_' . (int)$rit['product_id']] = $rit;
                            }
                        }
                    }
                    // Sort items deterministically by product_id, purchase_id, and id to prevent InnoDB deadlocks
                    usort($itemsToReturn, function ($a, $b) {
                        $pDiff = ((int)($a['product_id'] ?? 0)) - ((int)($b['product_id'] ?? 0));
                        if ($pDiff !== 0) return $pDiff;
                        $purDiff = ((int)($a['purchase_id'] ?? 0)) - ((int)($b['purchase_id'] ?? 0));
                        if ($purDiff !== 0) return $purDiff;
                        return ((int)($a['id'] ?? 0)) - ((int)($b['id'] ?? 0));
                    });

                    foreach ($itemsToReturn as $item) {
                    $itemId = (int)$item['id'];
                    $rit = $retItemsMap[$itemId] ?? ($retItemsMap['prod_' . (int)($item['product_id'] ?? 0)] ?? null);
                    if ($rit) {
                        if (!empty($rit['returned_quantity'])) {
                            $item['returned_quantity'] = (string)$rit['returned_quantity'];
                        }
                        if (!empty($rit['return_destination'])) {
                            $item['return_destination'] = $rit['return_destination'];
                        }
                        if (!empty($rit['return_supplier_id'])) {
                            $item['isolated_supplier_id'] = $rit['return_supplier_id'];
                        }
                    }
                    $itemDestination = $item['return_destination'] ?: $returnStrategy;

                    // Restore stock into chosen lot, or release reservation if order was not completed/delivered
                    $actualReturnPurchaseId = null;
                    if (in_array($order['status'] ?? '', ['completed', 'delivered', 'pending_money'], true)) {
                        $actualReturnPurchaseId = OrdersController::processReturnDestination($db, $item, $itemDestination, (int)$orderId);
                    } else {
                        OrdersController::releaseInventory($db, [$item]);
                    }

                    $retQty = (string)($item['returned_quantity'] ?? $item['quantity'] ?? '1');
                    $origQty = (string)($item['quantity'] ?? '1');

                    // If partial return of an item line:
                    if (Decimal::comp($retQty, $origQty) < 0) {
                        $remQty = Decimal::sub($origQty, $retQty);
                        // Update remaining unreturned item line
                        $db->prepare('UPDATE order_items SET quantity = :rem, return_purchase_id = NULL, return_destination = NULL, return_supplier_id = NULL, return_acceptance_status = NULL WHERE id = :id')
                           ->execute(['rem' => $remQty, 'id' => $itemId]);

                        // Insert split returned line
                        $insSplit = $db->prepare('INSERT INTO order_items (
                            order_id, product_id, purchase_id, name, price, quantity, cost,
                            owner_user_id, cost_owner_id, return_purchase_id, return_destination,
                            return_supplier_id, return_acceptance_status, is_returned, returned_at, returned_by
                        ) VALUES (
                            :oid, :pid, :puid, :name, :price, :qty, :cost,
                            :ouid, :couid, :ret_pur, :dest,
                            :sid, "accepted", 1, NOW(), :uid
                        )');
                        $insSplit->execute([
                            'oid' => $orderId,
                            'pid' => $item['product_id'] ?? null,
                            'puid' => $item['purchase_id'] ?? null,
                            'name' => $item['name'] ?? '',
                            'price' => $item['price'] ?? 0,
                            'qty' => $retQty,
                            'cost' => $item['cost'] ?? 0,
                            'ouid' => $item['owner_user_id'] ?? null,
                            'couid' => $item['cost_owner_id'] ?? null,
                            'ret_pur' => $actualReturnPurchaseId ?: ($item['return_purchase_id'] ?? null),
                            'dest' => $itemDestination,
                            'sid' => $item['isolated_supplier_id'] ?? $item['return_supplier_id'] ?? null,
                            'uid' => $sellerId
                        ]);
                    } else {
                        // Mark order_item as returned and accepted
                        $db->prepare('UPDATE order_items SET return_destination = :dest, return_acceptance_status = "accepted", is_returned = 1, returned_at = NOW(), returned_by = :uid WHERE id = :id')
                           ->execute(['dest' => $itemDestination, 'uid' => $sellerId, 'id' => $itemId]);
                    }

                    $linePrice = Decimal::mul((string)($item['price'] ?? '0'), $retQty);
                    $lineCost = Decimal::mul((string)($item['cost'] ?? '0'), $retQty);
                    $lineProfit = Decimal::sub($linePrice, $lineCost);

                    $returnedRevenue = Decimal::add($returnedRevenue, $linePrice);
                    $returnedCost = Decimal::add($returnedCost, $lineCost);
                    $returnedProfit = Decimal::add($returnedProfit, $lineProfit);
                }
            }

            // Check remaining unreturned items
            $unretStmt = $db->prepare('SELECT COUNT(*) FROM order_items WHERE order_id = :id AND is_returned = 0');
            $unretStmt->execute(['id' => $orderId]);
            $unreturnedCount = (int)$unretStmt->fetchColumn();

            // If all items are returned (e.g. full return of a Custom Service that also includes labor/manual costs), refund full order total
            if ($unreturnedCount === 0 && Decimal::comp((string)($order['total'] ?? '0'), $returnedRevenue) > 0) {
                $returnedRevenue = (string)$order['total'];
            }

            // Refund customer safe cash: min(returnedRevenue, netCashCollected)
            $settleKind = $order['settle_kind'] ?? 'cash';
            $netCashCollected = '0';
            if ($settleKind !== 'product') {
                $custPayStmt = $db->prepare("SELECT user_id,
                    COALESCE(SUM(CASE WHEN direction = 'in' AND type IN ('customer_payment', 'service_deposit', 'service_final_payment', 'service_payment') THEN amount ELSE 0 END), 0) as total_cust_in,
                    COALESCE(SUM(CASE WHEN direction = 'out' AND type IN ('customer_payment', 'customer_refund', 'service_deposit_refund', 'service_refund', 'order_refund') THEN amount ELSE 0 END), 0) as total_cust_out
                    FROM cash_transactions WHERE related_entity_type = 'orders' AND related_entity_id = :id
                    GROUP BY user_id");
                $custPayStmt->execute(['id' => $orderId]);
                $custRows = $custPayStmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($custRows as $crow) {
                    $netCust = Decimal::sub((string)$crow['total_cust_in'], (string)$crow['total_cust_out']);
                    if (Decimal::comp($netCust, '0') > 0) {
                        $netCashCollected = Decimal::add($netCashCollected, $netCust);
                    }
                }
            }

            // Extinguish unpaid customer debt first before physical safe cash outflow
            $unpaidDebt = Decimal::sub((string)($order['total'] ?? '0'), $netCashCollected);
            if (Decimal::comp($unpaidDebt, '0') < 0) $unpaidDebt = '0';
            $debtReduction = Decimal::min($returnedRevenue, $unpaidDebt);
            $refundableAfterDebt = Decimal::sub($returnedRevenue, $debtReduction);
            $refundCash = Decimal::min($refundableAfterDebt, $netCashCollected);

            if (Decimal::comp($refundCash, '0') > 0) {
                CashVaultController::logFlow(
                    $db,
                    'customer_payment',
                    'out',
                    $refundCash,
                    'orders',
                    $orderId,
                    "Customer refund on return (" . ($isPureServiceOrder ? "Custom Service" : (count($itemsToReturn) . " items")) . ") — " . ($order['uid'] ?? "Order #$orderId"),
                    $sellerId,
                    true
                );
            }

            if (!$isPureServiceOrder && $unreturnedCount > 0) {
                    // PARTIAL RETURN: order remains completed, has_partial_returns = 1
                    $newTotal = Decimal::sub((string)$order['total'], $returnedRevenue);
                    if (Decimal::comp($newTotal, '0') < 0) $newTotal = '0';
                    $newCost = Decimal::sub((string)($order['products_cost'] ?? '0'), $returnedCost);
                    if (Decimal::comp($newCost, '0') < 0) $newCost = '0';
                    $newProfit = Decimal::sub((string)($order['profit'] ?? '0'), $returnedProfit);
                    $newAmountPaid = Decimal::sub((string)($order['amount_paid'] ?? '0'), $refundCash);
                    if (Decimal::comp($newAmountPaid, '0') < 0) $newAmountPaid = '0';

                    $hasDebtRemaining = Decimal::comp($newAmountPaid, $newTotal) < 0;
                    $partStatus = ($hasDebtRemaining && in_array($order['status'] ?? '', ['pending_money', 'owed'], true)) ? 'pending_money' : 'completed';

                    $db->prepare('UPDATE orders SET status = :st, total = :tot, products_cost = :cost, profit = :prof, amount_paid = :paid, has_partial_returns = 1, return_strategy = :strat, returned_at = NOW(), returned_by = :uid WHERE id = :id')
                       ->execute([
                           'st' => $partStatus,
                           'tot' => $newTotal,
                           'cost' => $newCost,
                           'prof' => $newProfit,
                           'paid' => $newAmountPaid,
                           'strat' => $returnStrategy,
                           'uid' => $sellerId,
                           'id' => $orderId
                       ]);

                    // Prorate or cancel settlements for returned items:
                    foreach ($itemsToReturn as $ri) {
                        $pId = (int)$ri['id'];
                        $rQty = (string)($ri['returned_quantity'] ?? $ri['quantity'] ?? '1');
                        $oQty = (string)($ri['quantity'] ?? '1');

                        if (Decimal::comp($rQty, $oQty) >= 0) {
                            $db->prepare('UPDATE partner_settlements SET status = "cancelled", cancelled_at = NOW(), cancelled_by = :uid, cancel_reason = "Order item returned after clawback accepted" 
                                          WHERE related_entity_type = "orders" AND related_entity_id = :oid 
                                            AND settlement_type != "order_return_clawback" 
                                            AND status != "cancelled"
                                            AND (details LIKE :m1 OR details LIKE :m2 OR details LIKE :m3 OR details LIKE :m4)')
                               ->execute([
                                   'uid' => $sessionUser,
                                   'oid' => $orderId,
                                   'm1' => '%"order_item_id":' . $pId . ',%',
                                   'm2' => '%"order_item_id":' . $pId . '}%',
                                   'm3' => '%"item_id":' . $pId . ',%',
                                   'm4' => '%"item_id":' . $pId . '}%'
                               ]);
                        } else {
                            $stStmt = $db->prepare('SELECT id, amount FROM partner_settlements 
                                                    WHERE related_entity_type = "orders" AND related_entity_id = :oid 
                                                      AND settlement_type != "order_return_clawback" 
                                                      AND status != "cancelled"
                                                      AND (details LIKE :m1 OR details LIKE :m2 OR details LIKE :m3 OR details LIKE :m4)');
                            $stStmt->execute([
                                'oid' => $orderId,
                                'm1' => '%"order_item_id":' . $pId . ',%',
                                'm2' => '%"order_item_id":' . $pId . '}%',
                                'm3' => '%"item_id":' . $pId . ',%',
                                'm4' => '%"item_id":' . $pId . '}%'
                            ]);
                            $matchingSets = $stStmt->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($matchingSets as $ms) {
                                $clawAmt = Decimal::comp($oQty, '0') > 0 ? Decimal::div(Decimal::mul((string)$ms['amount'], $rQty), $oQty) : '0';
                                $newAmt = Decimal::sub((string)$ms['amount'], $clawAmt);
                                if (Decimal::comp($newAmt, '0') <= 0) {
                                    $db->prepare('UPDATE partner_settlements SET status = "cancelled", cancelled_at = NOW(), cancelled_by = :uid, cancel_reason = "Order item fully returned" WHERE id = :sid')
                                       ->execute(['uid' => $sessionUser, 'sid' => (int)$ms['id']]);
                                } else {
                                    $db->prepare('UPDATE partner_settlements SET amount = :newAmt WHERE id = :sid')
                                       ->execute(['newAmt' => $newAmt, 'sid' => (int)$ms['id']]);
                                }
                            }
                        }
                    }
                    $finalOrderStatus = 'completed';
                } else {
                    // FULL RETURN: mark order returned!
                    $db->prepare('UPDATE orders SET status = "returned", return_strategy = :strat, returned_at = NOW(), returned_by = :uid, amount_paid = 0 WHERE id = :id')
                       ->execute(['strat' => $returnStrategy, 'uid' => $sellerId, 'id' => $orderId]);

                    // Refund any manual outlays debited for this order back to the paying users
                    $outlayStmt = $db->prepare("SELECT user_id, 
                        COALESCE(SUM(CASE WHEN direction = 'out' AND type IN ('manual_outlay_expense', 'manual_cost_expense') THEN amount ELSE 0 END), 0) as total_outlay_out,
                        COALESCE(SUM(CASE WHEN direction = 'in' AND type IN ('manual_outlay_refund', 'manual_cost_refund') THEN amount ELSE 0 END), 0) as total_outlay_in
                        FROM cash_transactions WHERE related_entity_type = 'orders' AND related_entity_id = :id
                        GROUP BY user_id");
                    $outlayStmt->execute(['id' => $orderId]);
                    $outlayRows = $outlayStmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($outlayRows as $orow) {
                        $netOutlay = Decimal::sub((string)$orow['total_outlay_out'], (string)$orow['total_outlay_in']);
                        if (Decimal::comp($netOutlay, '0') > 0) {
                            CashVaultController::logFlow(
                                $db,
                                'manual_outlay_refund',
                                'in',
                                $netOutlay,
                                'orders',
                                (int)$orderId,
                                "Refund manual outlay on clawback acceptance return — " . ($order['uid'] ?? "Order #$orderId"),
                                (int)$orow['user_id'],
                                true
                            );
                        }
                    }

                    // Cancel original order settlements:
                    OrdersController::cancelPartnerSettlements($db, $orderId, 'Order returned after clawback accepted by stock owner');
                    $db->prepare('UPDATE partner_settlements SET status = "cancelled", cancelled_at = NOW(), cancelled_by = :uid, cancel_reason = "Order returned after clawback accepted by stock owner" WHERE related_entity_type = "orders" AND related_entity_id = :oid AND settlement_type != "order_return_clawback"')
                       ->execute(['uid' => $sessionUser, 'oid' => $orderId]);
                    $finalOrderStatus = 'returned';
                }

                // Notification to ALL mentioned stakeholders: All related users accepted
                $allMentioned = OrdersController::getOrderMentionedUserIds($db, $orderId, $order);
                $finalOrderUid = $order['uid'] ?? "#$orderId";
                foreach ($allMentioned as $mUid) {
                    if ($mUid === $sessionUser) continue;
                    try {
                        $db->prepare('INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at) VALUES (:uid, "settlement", :title, :body, :aurl, "orders", :eid, :stag, 0, NOW())')
                           ->execute([
                               'uid'   => $mUid,
                               'title' => "Return Finalized: {$finalOrderUid}",
                               'body'  => "All related users accepted the return for Order {$finalOrderUid}. Stock restored and customer refunded.",
                               'aurl'  => "#order-details:{$orderId}",
                               'eid'   => (int)$orderId,
                               'stag'  => "order_clawback_finalized_{$orderId}_{$mUid}",
                           ]);
                    } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
                }
            } else {
                // Partial progress notification to ALL mentioned stakeholders
                $allMentioned = OrdersController::getOrderMentionedUserIds($db, $orderId, $order);
                $progOrderUid = $order['uid'] ?? "#$orderId";
                foreach ($allMentioned as $mUid) {
                    if ($mUid === $sessionUser) continue;
                    try {
                        $db->prepare('INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at) VALUES (:uid, "settlement", :title, :body, :aurl, "orders", :eid, :stag, 0, NOW())')
                           ->execute([
                               'uid'   => $mUid,
                               'title' => "Return Progress: {$progOrderUid}",
                               'body'  => "@{$ownerName} accepted their part of the return for Order {$progOrderUid}. Waiting for remaining related users.",
                               'aurl'  => "#order-details:{$orderId}",
                               'eid'   => (int)$orderId,
                               'stag'  => "order_clawback_partial_{$orderId}_{$id}_{$mUid}",
                           ]);
                    } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
                }
            }

            // 7. Order History:
            $db->prepare('INSERT INTO order_history (order_id, edited_by, action, changes, reason, created_at) VALUES (:oid, :uid, :act, :chg, :rsn, NOW())')
               ->execute([
                   'oid' => $orderId,
                   'uid' => $sessionUser,
                   'act' => 'return_clawback_accepted',
                   'chg' => json_encode(['status' => $finalOrderStatus, 'return_strategy' => $returnStrategy, 'clawback_settled' => $clawbackAmount, 'remaining_pending' => $remainingClawsCount, 'restored' => $restoreSummary]),
                   'rsn' => 'Stock owner accepted return clawback'
               ]);

            // Mark pending return request notifications as read
            try {
                $db->prepare('UPDATE notifications SET is_read = 1 WHERE user_id = :uid AND entity_type = "orders" AND entity_id = :oid AND stage_tag LIKE :stag')
                   ->execute(['uid' => $sessionUser, 'oid' => $orderId, 'stag' => "order_clawback_requested_{$orderId}%"]);
                if ($remainingClawsCount === 0) {
                    $db->prepare('UPDATE notifications SET is_read = 1 WHERE entity_type = "orders" AND entity_id = :oid AND stage_tag LIKE :stag')
                       ->execute(['oid' => $orderId, 'stag' => "order_clawback_requested_{$orderId}%"]);
                }
            } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

            $db->commit();

            EntityVersion::bump($db, 'orders', 'partner_settlements', 'products', 'cash_vault');
            SystemLog::write('partner_settlements', 'clawback_accepted', (int)$id, "Settlement #$id", json_encode([
                'order_id' => $orderId,
                'clawback_amount' => $clawbackAmount,
                'stock_owner_id' => $stockOwnerId,
                'seller_id' => $sellerId,
                'return_strategy' => $returnStrategy,
            ]));

            Response::json([
                'ok' => true,
                'order_id' => $orderId,
                'remaining_pending' => $remainingClawsCount,
                'order_status' => $finalOrderStatus,
                'return_strategy' => $returnStrategy,
                'message' => ($remainingClawsCount === 0
                    ? ($finalOrderStatus === 'completed'
                        ? 'Return clawback accepted. Stock restored and order totals recalculated.'
                        : 'Return clawback accepted. All stock owners confirmed; order return finalized.')
                    : 'Return clawback accepted. Cash balances adjusted and stock returned to your inventory. Waiting for remaining stock owners.')
            ]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("SEC-40 Defensive exception in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Return clawback acceptance failed due to a system error'], 500);
        }
    }

    /** GET /api/partner-settlements/{id} - Retrieve single settlement details */
    public function show(string $id): void
    {
        $db = Database::getConnection();
        $this->ensureTable($db);
        $userId = (int)($_SESSION['user_id'] ?? 0);
        if ($userId <= 0) {
            Response::json(['error' => 'Unauthorized: Please log in.'], 401);
            return;
        }
        $stmt = $db->prepare('SELECT * FROM partner_settlements WHERE id = :id LIMIT 1');
        $stmt->execute(['id' => (int)$id]);
        $s = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$s) {
            Response::json(['error' => 'Settlement not found'], 404);
            return;
        }
        Response::json(['ok' => true, 'settlement' => $s]);
    }

    /** POST /api/partner-settlements/{id}/pay-manual-cost - Manual cost payer fulfills payment demand */
    public function payManualCostDemand(string $id): void
    {
        $db = Database::getConnection();
        $sessionUser = (int)($_SESSION['user_id'] ?? 0);
        if ($sessionUser === 0) {
            Response::json(['error' => 'Unauthorized'], 401);
            return;
        }

        $db->beginTransaction();
        try {
            $stmt = $db->prepare('SELECT * FROM partner_settlements WHERE id = :id FOR UPDATE');
            $stmt->execute(['id' => $id]);
            $s = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$s) {
                $db->rollBack();
                Response::json(['error' => 'Settlement not found'], 404);
                return;
            }

            if (($s['related_entity_type'] ?? '') !== 'orders') {
                $db->rollBack();
                Response::json(['error' => 'Invalid entity type'], 400);
                return;
            }


            $det = !empty($s['details']) ? (is_array($s['details']) ? $s['details'] : json_decode($s['details'], true)) : [];
            $designatedPayer = !empty($det['paid_by_user_id']) ? (int)$det['paid_by_user_id'] : (int)$s['payee_user_id'];
            if ((int)$s['payee_user_id'] !== $sessionUser || $designatedPayer !== $sessionUser) {
                $db->rollBack();
                Response::json(['error' => 'Only the designated partner can fulfill this payment demand'], 403);
                return;
            }

            $amount = (string)$s['amount'];
            $orderId = (int)$s['related_entity_id'];

            // Fetch order for context
            $orderStmt = $db->prepare('SELECT uid, service_name, owner_user_id, manual_costs_data, agreement_status, is_locked_for_edit FROM orders WHERE id = :oid');
            $orderStmt->execute(['oid' => $orderId]);
            $order = $orderStmt->fetch(PDO::FETCH_ASSOC);

            if (($s['payment_demand_status'] ?? '') === 'paid') {
                $db->rollBack();
                Response::json(['error' => 'This manual cost has already been paid'], 400);
                return;
            }

            $isPhase2 = (($order['agreement_status'] ?? '') === 'all_accepted' || !empty($order['is_locked_for_edit']));
            $hasActiveDemand = (($s['payment_demand_status'] ?? '') === 'awaiting_payment');

            if (!$isPhase2 && !$hasActiveDemand) {
                $db->rollBack();
                Response::json(['error' => 'Manual costs can only be paid once Phase 2 is entered or when an active demand is issued'], 400);
                return;
            }

            // Cash flow: Deducted purely as an operational expense from contributor's physical cash safe.
            // NEVER deposited into the seller/cashier's safe.
            CashVaultController::logFlow($db, 'manual_cost_expense', 'out', $amount, 'partner_settlements', (int)$id,
                "Manual Cost Expense: " . ($order['service_name'] ?? "Service #$orderId"),
                $sessionUser,
                true // Allow overdraft with trusted cashier logging
            );

            // Update settlement payment demand status (for Owner's own manual cost where payer == payee, paying the outlay completes the lifecycle)
            if ((int)$s['payer_user_id'] === (int)$s['payee_user_id']) {
                $db->prepare("UPDATE partner_settlements SET payment_demand_status = 'paid', payment_demand_paid_at = NOW(), status = 'settled', release_status = 'released', released_amount = amount, settled_amount = amount, settled_at = NOW(), settled_by = :uid WHERE id = :id")
                   ->execute(['uid' => $sessionUser, 'id' => $id]);
            } else {
                $db->prepare('UPDATE partner_settlements SET payment_demand_status = :s, payment_demand_paid_at = NOW() WHERE id = :id')
                   ->execute(['s' => 'paid', 'id' => $id]);
            }

            // Sync paid status into orders.manual_costs_data
            if (!empty($order['manual_costs_data'])) {
                $mcList = json_decode($order['manual_costs_data'], true);
                if (is_array($mcList)) {
                    $det = !empty($s['details']) ? (is_array($s['details']) ? $s['details'] : json_decode($s['details'], true)) : [];
                    $costIndex = isset($det['cost_index']) ? (int)$det['cost_index'] : null;
                    $updated = false;
                    foreach ($mcList as $idx => &$mcItem) {
                        $pBy = !empty($mcItem['paid_by_user_id']) ? (int)$mcItem['paid_by_user_id'] : (!empty($mcItem['payer_user_id']) ? (int)$mcItem['payer_user_id'] : null);
                        if (($costIndex !== null && $idx === $costIndex) || ($costIndex === null && $pBy === $sessionUser)) {
                            $mcItem['is_paid'] = true;
                            $mcItem['paid_at'] = date('Y-m-d H:i:s');
                            $mcItem['payment_settlement_id'] = (int)$id;
                            $updated = true;
                            if ($costIndex !== null) break;
                        }
                    }
                    unset($mcItem);
                    if ($updated) {
                        $db->prepare("UPDATE orders SET manual_costs_data = :mdata WHERE id = :oid")
                           ->execute(['mdata' => json_encode($mcList), 'oid' => $orderId]);
                    }
                }
            }

            $payerName = $_SESSION['username'] ?? "User #{$sessionUser}";
            $fmtAmount = Decimal::trimZero($amount);
            $serviceTitle = $order['service_name'] ?? "Order #{$orderId}";
            $notifRecipients = array_unique(array_filter([
                (int)($order['owner_user_id'] ?? 0),
                (int)($s['payer_user_id'] ?? 0)
            ], fn($u) => $u > 0 && $u !== $sessionUser));

            foreach ($notifRecipients as $notifyUid) {
                $db->prepare("INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at) VALUES (:uid, 'settlement', :t, :b, :aurl, :etype, :eid, :stage, 0, NOW())")
                   ->execute([
                       'uid'   => $notifyUid,
                       't'     => "Manual Cost Outlay Paid ({$serviceTitle})",
                       'b'     => "@{$payerName} paid manual cost of {$fmtAmount} from physical safe for {$serviceTitle}.",
                       'aurl'  => "#page-bills?tab=settlements",
                       'etype' => 'partner_settlements',
                       'eid'   => (int)$id,
                       'stage' => 'statements:custom_service:manual_cost_paid'
                   ]);
            }

            $db->commit();

            SystemLog::write('partner_settlements', 'manual_cost_paid', (int)$id, $order['service_name'] ?? "Settlement #$id", json_encode([
                'settlement_id' => (int)$id,
                'order_id' => $orderId,
                'order_uid' => $order['uid'] ?? null,
                'payer_user_id' => $sessionUser,
                'amount' => $amount,
                'entity_type' => 'custom_service',
                'action' => 'manual_cost_paid',
                'stage_tag' => 'statements:custom_service:payment_completed'
            ]), $sessionUser);

            EntityVersion::bump($db, 'partner_settlements', 'cash_vault', 'orders');

            Response::json(['ok' => true, 'payment_demand_status' => 'paid']);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("SEC-40 Defensive exception in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Payment processing failed due to a system error'], 500);
        }
    }

    public function refuseClawback(string $id, array $data): void
    {
        $sessionUser = (int)($_SESSION['user_id'] ?? 0);
        if ($sessionUser === 0) {
            Response::json(['error' => 'Unauthorized'], 401);
            return;
        }

        $sessionRole = $_SESSION['role'] ?? '';
        $reason = trim((string)($data['reason'] ?? 'Stock owner declined return request'));

        $db = Database::getConnection();
        $this->ensureTable($db);
        $db->beginTransaction();

        try {
            $stmt = $db->prepare('SELECT * FROM partner_settlements WHERE id = :id FOR UPDATE');
            $stmt->execute(['id' => $id]);
            $settlement = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$settlement) {
                $db->rollBack();
                Response::json(['error' => 'Settlement not found'], 404);
                return;
            }

            if ($settlement['settlement_type'] !== 'order_return_clawback') {
                $db->rollBack();
                Response::json(['error' => 'Invalid settlement type for clawback refusal'], 400);
                return;
            }

            if ($settlement['status'] !== 'pending') {
                $db->rollBack();
                Response::json(['error' => 'This clawback request is no longer pending'], 400);
                return;
            }

            // Authorization Guard: strictly only the payer (assigned user) or admin can refuse
            if ($sessionUser !== (int)$settlement['payer_user_id'] && !in_array($sessionRole, ['admin', 'superadmin'], true)) {
                $db->rollBack();
                Response::json(['error' => 'Forbidden: You are not authorized to refuse this return request.'], 403);
                return;
            }

            $orderId = (int)$settlement['related_entity_id'];
            $sellerId = (int)$settlement['payee_user_id'];

            // Fetch order details for notification and history
            $oStmt = $db->prepare('SELECT * FROM orders WHERE id = :id');
            $oStmt->execute(['id' => $orderId]);
            $order = $oStmt->fetch(PDO::FETCH_ASSOC) ?: [];
            $orderUid = $order['uid'] ?? "ORD-{$orderId}";

            // 1. Mark clawback ticket as refused:
            $db->prepare('UPDATE partner_settlements SET status = "refused", acceptance_status = "refused", refused_at = NOW(), refused_by = :uid, refusal_reason = :rsn WHERE id = :id')
               ->execute(['uid' => $sessionUser, 'rsn' => $reason, 'id' => $id]);

            $ownerName = $_SESSION['username'] ?? 'Stock Owner';

            // 2. Handle any sibling clawbacks for this order:
            $siblingStmt = $db->prepare('SELECT id, payer_user_id, payee_user_id, amount, status FROM partner_settlements 
                                         WHERE related_entity_type = "orders" AND related_entity_id = :oid 
                                           AND settlement_type = "order_return_clawback" AND id != :id');
            $siblingStmt->execute(['oid' => $orderId, 'id' => $id]);
            $siblings = $siblingStmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($siblings as $sib) {
                if ($sib['status'] === 'settled') {
                    // Reverse the cash transfer: refund the partner who previously accepted
                    $sibAmount = (string)($sib['amount'] ?? '0');
                    if (Decimal::comp($sibAmount, '0') > 0) {
                        CashVaultController::logFlow(
                            $db,
                            'partner_settlement',
                            'out',
                            $sibAmount,
                            'partner_settlements',
                            (int)$sib['id'],
                            "Reversal of Return Clawback Payout due to refusal by @{$ownerName}",
                            (int)$sellerId,
                            true
                        );
                        CashVaultController::logFlow(
                            $db,
                            'partner_settlement',
                            'in',
                            $sibAmount,
                            'partner_settlements',
                            (int)$sib['id'],
                            "Refund of Return Clawback due to refusal by @{$ownerName}",
                            (int)$sib['payer_user_id']
                        );
                    }
                }
                // Cancel sibling clawback
                $db->prepare('UPDATE partner_settlements SET status = "cancelled", acceptance_status = "revoked", cancelled_at = NOW(), cancelled_by = :uid, cancel_reason = :cr WHERE id = :sid')
                   ->execute([
                       'uid' => $sessionUser,
                       'cr' => "Return aborted due to refusal by @{$ownerName}: {$reason}",
                       'sid' => $sib['id']
                   ]);
            }

            // 3. Reset any pending order items and revert order back to target status:
            $targetStatus = OrdersController::getPreReturnStatus($db, (int)$orderId, $order);
            $db->prepare('UPDATE order_items SET return_acceptance_status = NULL, return_destination = NULL WHERE order_id = :oid AND return_acceptance_status = "pending"')
               ->execute(['oid' => $orderId]);
            if ($targetStatus === 'pending_money') {
                $db->prepare('UPDATE orders SET status = "pending_money", return_reason = NULL, return_strategy = NULL, returned_by = NULL, returned_at = NULL, refusal_card_dismissed = 0, money_pending_at = COALESCE(money_pending_at, NOW()) WHERE id = :id')
                   ->execute(['id' => $orderId]);
            } else {
                $db->prepare('UPDATE orders SET status = "completed", return_reason = NULL, return_strategy = NULL, returned_by = NULL, returned_at = NULL, refusal_card_dismissed = 0 WHERE id = :id')
                   ->execute(['id' => $orderId]);
            }

            // 4. Order History:
            $db->prepare('INSERT INTO order_history (order_id, edited_by, action, changes, reason, created_at) VALUES (:oid, :uid, :act, :chg, :rsn, NOW())')
               ->execute([
                   'oid' => $orderId,
                   'uid' => $sessionUser,
                   'act' => 'return_clawback_refused',
                   'chg' => json_encode(['status' => $targetStatus, 'refused_by' => $sessionUser, 'reason' => $reason]),
                   'rsn' => $reason
               ]);

            // 5. Notifications to ALL mentioned stakeholders:
            $allMentioned = OrdersController::getOrderMentionedUserIds($db, $orderId, $order);
            foreach ($allMentioned as $mUid) {
                if ($mUid === $sessionUser) continue;
                try {
                    $db->prepare('INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at) VALUES (:uid, "settlement", :title, :body, :aurl, "orders", :eid, :stag, 0, NOW())')
                       ->execute([
                           'uid'   => $mUid,
                           'title' => "Return Refused: Order #{$orderUid}",
                           'body'  => "@{$ownerName} refused the return request for Order #{$orderUid}: \"{$reason}\". The order reverted to " . (($targetStatus === 'pending_money') ? 'pending payment' : 'completed') . ".",
                           'aurl'  => "#order-details:{$orderId}",
                           'eid'   => (int)$orderId,
                           'stag'  => "order_clawback_refused_{$orderId}_{$mUid}",
                       ]);
                } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
            }

            // Mark pending return request notifications as read for all participants of this order
            try {
                $db->prepare('UPDATE notifications SET is_read = 1 WHERE entity_type = "orders" AND entity_id = :oid AND stage_tag LIKE :stag')
                   ->execute(['oid' => $orderId, 'stag' => "order_clawback_requested_{$orderId}%"]);
            } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

            $db->commit();

            EntityVersion::bump($db, 'orders', 'partner_settlements');
            SystemLog::write('partner_settlements', 'clawback_refused', (int)$id, "Settlement #$id", json_encode([
                'order_id' => $orderId,
                'refusal_reason' => $reason,
                'stock_owner_id' => $sessionUser,
                'seller_id' => $sellerId,
                'restored_status' => $targetStatus
            ]));

            $statusLabelMsg = ($targetStatus === 'pending_money') ? 'pending payment' : 'completed';
            Response::json([
                'ok' => true,
                'order_id' => $orderId,
                'order_status' => $targetStatus,
                'message' => "Return request refused. The order reverted to {$statusLabelMsg}."
            ]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("SEC-40 Defensive exception in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Return clawback refusal failed due to a system error'], 500);
        }
    }

    /** Helper: Remove participant entry from orders / order_items and recompute order settlements */
    private function syncRemovedParticipantOnOrder(PDO $db, array $order, array $s, bool $onlyUnaccepted = false): void
    {
        $orderId = (int)$order['id'];
        $payeeId = (int)$s['payee_user_id'];
        $sType = $s['settlement_type'] ?? '';
        $det = !empty($s['details']) ? (is_array($s['details']) ? $s['details'] : json_decode($s['details'], true)) : [];

        $updatedTeam = !empty($order['service_owners_data']) ? (json_decode($order['service_owners_data'], true) ?: []) : [];
        $updatedMcList = !empty($order['manual_costs_data']) ? (json_decode($order['manual_costs_data'], true) ?: []) : [];

        if ($sType === 'service_profit_share') {
            $collabPct = '0';
            foreach ($updatedTeam as $m) {
                if ((int)($m['user_id'] ?? 0) === $payeeId) {
                    $mPct = (is_numeric($m['share_pct'] ?? null)) ? (string)$m['share_pct'] : '0';
                    $collabPct = Decimal::add($collabPct, $mPct);
                }
            }
            $updatedTeam = array_values(array_filter($updatedTeam, fn($m) => (int)($m['user_id'] ?? 0) !== $payeeId));
            // Transfer collaborator share percentage directly back to the Custom Service Owner (Fix F-CS-07)
            if (Decimal::comp($collabPct, '0') > 0) {
                $ownerFound = false;
                foreach ($updatedTeam as &$m) {
                    if ((int)($m['user_id'] ?? 0) === (int)$order['owner_user_id']) {
                        $curPct = (is_numeric($m['share_pct'] ?? null)) ? (string)$m['share_pct'] : '0';
                        $newPct = Decimal::add($curPct, $collabPct);
                        if (Decimal::comp($newPct, '100') > 0) $newPct = '100';
                        if (Decimal::comp($newPct, '0') < 0) $newPct = '0';
                        $m['share_pct'] = Decimal::truncate($newPct, 2);
                        $ownerFound = true;
                        break;
                    }
                }
                unset($m);
                if (!$ownerFound) {
                    $uStmt = $db->prepare('SELECT id, name FROM users WHERE id = :id');
                    $uStmt->execute(['id' => $order['owner_user_id']]);
                    $ownerRow = $uStmt->fetch(PDO::FETCH_ASSOC);
                    $ownerName = $ownerRow['name'] ?? 'Service Owner';
                    $updatedTeam[] = [
                        'user_id' => (int)$order['owner_user_id'],
                        'name' => $ownerName,
                        'share_pct' => Decimal::truncate($collabPct, 2),
                    ];
                }
            }
        } elseif (in_array($sType, ['manual_cost_recovery', 'manual_outlay_recovery', 'manual_cost_markup'], true)) {
            $costIndex = isset($det['cost_index']) ? (int)$det['cost_index'] : null;
            if ($costIndex !== null && isset($updatedMcList[$costIndex])) {
                unset($updatedMcList[$costIndex]);
                $updatedMcList = array_values($updatedMcList);
            } else {
                $removedOne = false;
                $updatedMcList = array_values(array_filter($updatedMcList, function($mc) use ($payeeId, $s, &$removedOne) {
                    if ($removedOne) return true;
                    $pBy = !empty($mc['paid_by_user_id']) ? (int)$mc['paid_by_user_id'] : (!empty($mc['payer_user_id']) ? (int)$mc['payer_user_id'] : 0);
                    if ($pBy === $payeeId && Decimal::comp((string)($mc['amount'] ?? '0'), (string)($s['amount'] ?? '0')) === 0) {
                        $removedOne = true;
                        return false;
                    }
                    return true;
                }));
            }
        } elseif (in_array($sType, ['parts_cost_recovery', 'parts_profit_share', 'sale_cost_recovery'], true)) {
            // Cancel sibling parts settlement if one exists (scoped to specific order_item / product to avoid cancelling other parts)
            $siblingType = ($sType === 'parts_cost_recovery') ? 'parts_profit_share' : (($sType === 'parts_profit_share') ? 'parts_cost_recovery' : null);
            if ($siblingType) {
                $targetItemId = isset($det['order_item_id']) ? (int)$det['order_item_id'] : (isset($det['item_id']) ? (int)$det['item_id'] : 0);
                $targetPid = isset($det['product_id']) ? (int)$det['product_id'] : 0;

                $sibStmt = $db->prepare("SELECT id, details FROM partner_settlements WHERE related_entity_type = 'orders' AND related_entity_id = :oid AND payee_user_id = :pId AND settlement_type = :sibType AND status != 'cancelled'");
                $sibStmt->execute(['oid' => $orderId, 'pId' => $payeeId, 'sibType' => $siblingType]);
                $siblings = $sibStmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($siblings as $sibRow) {
                    $sibDet = !empty($sibRow['details']) ? (is_array($sibRow['details']) ? $sibRow['details'] : json_decode($sibRow['details'], true)) : [];
                    $sibOiId = isset($sibDet['order_item_id']) ? (int)$sibDet['order_item_id'] : (isset($sibDet['item_id']) ? (int)$sibDet['item_id'] : 0);
                    $sibPid = isset($sibDet['product_id']) ? (int)$sibDet['product_id'] : 0;

                    $matches = false;
                    if ($targetItemId > 0 && $sibOiId > 0) {
                        $matches = ($targetItemId === $sibOiId);
                    } elseif ($targetPid > 0 && $sibPid > 0) {
                        $matches = ($targetPid === $sibPid);
                    } else {
                        $matches = (count($siblings) === 1);
                    }

                    if ($matches) {
                        $db->prepare("UPDATE partner_settlements SET status = 'cancelled', cancelled_at = NOW(), cancel_reason = 'Participant removed from custom service' WHERE id = :sid")
                           ->execute(['sid' => (int)$sibRow['id']]);
                    }
                }
            }

            $oiStmt = $db->prepare("SELECT * FROM order_items WHERE order_id = :oid");
            $oiStmt->execute(['oid' => $orderId]);
            $allItems = $oiStmt->fetchAll(PDO::FETCH_ASSOC);
            $itemsToRelease = [];
            $itemsToRestore = [];
            $itemIdsToDelete = [];
            $targetItemId = isset($det['order_item_id']) ? (int)$det['order_item_id'] : (isset($det['item_id']) ? (int)$det['item_id'] : 0);
            $targetPid = isset($det['product_id']) ? (int)$det['product_id'] : 0;

            foreach ($allItems as $oi) {
                $iOwner = !empty($oi['cost_owner_id']) ? (int)$oi['cost_owner_id'] : (!empty($oi['owner_user_id']) ? (int)$oi['owner_user_id'] : 0);
                if ($iOwner === $payeeId) {
                    if ($targetItemId > 0 && (int)$oi['id'] !== $targetItemId) {
                        continue;
                    }
                    if ($targetItemId <= 0 && $targetPid > 0 && (int)($oi['product_id'] ?? 0) !== $targetPid) {
                        continue;
                    }
                    // Fix F-CS-01: include pending_money in restoral list
                    if (in_array($order['status'] ?? '', ['completed', 'delivered', 'pending_money'], true)) {
                        $itemsToRestore[] = $oi;
                    } else {
                        $itemsToRelease[] = $oi;
                    }
                    $itemIdsToDelete[] = (int)$oi['id'];
                }
            }

            // Fix F-CS-04: Restore/release inventory FIRST before deleting rows
            if (!empty($itemsToRestore)) {
                OrdersController::restoreInventory($db, $itemsToRestore, 'absorb_master', $order['uid'] ?? null, (int)$orderId);
            }
            if (!empty($itemsToRelease)) {
                OrdersController::releaseInventory($db, $itemsToRelease);
            }
            foreach ($itemIdsToDelete as $delId) {
                $db->prepare('DELETE FROM order_items WHERE id = :id')->execute(['id' => $delId]);
            }
        }

        // Recompute products_cost, manual_cost, and profit on orders
        $remOiStmt = $db->prepare("SELECT * FROM order_items WHERE order_id = :oid");
        $remOiStmt->execute(['oid' => $orderId]);
        $remItems = $remOiStmt->fetchAll(PDO::FETCH_ASSOC);
        $newProductsCost = '0';
        foreach ($remItems as $roi) {
            $newProductsCost = Decimal::add($newProductsCost, Decimal::mul((string)($roi['cost'] ?? '0'), (string)($roi['quantity'] ?? '0')));
        }
        $newManualCost = '0';
        foreach ($updatedMcList as $mc) {
            $newManualCost = Decimal::add($newManualCost, (string)($mc['amount'] ?? '0'));
        }
        $orderTotal = (string)($order['total'] ?? '0');
        $newProfit = Decimal::sub($orderTotal, Decimal::add($newProductsCost, $newManualCost));

        // Recompute member dollar profit in updatedTeam (Fix F-CS-08)
        foreach ($updatedTeam as &$m) {
            $mPct = (is_numeric($m['share_pct'] ?? null)) ? (string)$m['share_pct'] : '0';
            if (isset($m['amount']) || isset($m['profit']) || isset($m['profit_share'])) {
                $mProf = Decimal::div(Decimal::mul($newProfit, $mPct), '100');
                if (isset($m['amount'])) $m['amount'] = $mProf;
                if (isset($m['profit'])) $m['profit'] = $mProf;
                if (isset($m['profit_share'])) $m['profit_share'] = $mProf;
            }
        }
        unset($m);

        $teamJson = !empty($updatedTeam) ? json_encode($updatedTeam, JSON_UNESCAPED_UNICODE) : null;
        $mcJson = !empty($updatedMcList) ? json_encode($updatedMcList, JSON_UNESCAPED_UNICODE) : null;

        $db->prepare("UPDATE orders SET products_cost = :pc, manual_cost = :mc, profit = :prof, service_owners_data = :team, manual_costs_data = :mcd WHERE id = :oid")
           ->execute([
               'pc'   => $newProductsCost,
               'mc'   => $newManualCost,
               'prof' => $newProfit,
               'team' => $teamJson,
               'mcd'  => $mcJson,
               'oid'  => $orderId
           ]);

        $updatedOrder = $order;
        $updatedOrder['products_cost'] = $newProductsCost;
        $updatedOrder['manual_cost'] = $newManualCost;
        $updatedOrder['profit'] = $newProfit;
        $updatedOrder['service_owners_data'] = $teamJson;
        $updatedOrder['manual_costs_data'] = $mcJson;

        OrdersController::generatePartnerSettlements($db, $orderId, (string)($order['uid'] ?? "ORD-{$orderId}"), (int)$order['owner_user_id']);
        OrdersController::syncOrderAgreementStatus($db, $orderId);
    }

    /** POST /api/partner-settlements/{id}/request-removal - Owner requests participant removal */
    public function requestRemoval(string $id, array $data = []): void
    {
        $db = Database::getConnection();
        $sessionUser = (int)($_SESSION['user_id'] ?? 0);

        try {
            $db->beginTransaction();

            $stmt = $db->prepare("SELECT * FROM partner_settlements WHERE id = :id FOR UPDATE");
            $stmt->execute(['id' => $id]);
            $s = $stmt->fetch(\PDO::FETCH_ASSOC);

            if (!$s) {
                throw new \Exception('Settlement not found.');
            }
            if ($s['status'] === 'cancelled') {
                throw new \Exception('Settlement is already cancelled.');
            }
            if ($s['related_entity_type'] !== 'orders') {
                throw new \Exception('Invalid entity type for this operation.');
            }

            $orderId = (int)$s['related_entity_id'];
            $stmt = $db->prepare("SELECT * FROM orders WHERE id = :oid FOR UPDATE");
            $stmt->execute(['oid' => $orderId]);
            $order = $stmt->fetch(\PDO::FETCH_ASSOC);

            if (!$order) {
                throw new \Exception('Order not found.');
            }
            $isOwnerOrPhase1Creator = ((int)$order['owner_user_id'] === $sessionUser) || (empty($order['is_locked_for_edit']) && (int)($order['created_by'] ?? 0) === $sessionUser);
            if (!$isOwnerOrPhase1Creator) {
                throw new \Exception('Only the order owner can request removal.');
            }

            // Direct removal is allowed if:
            // 1. Order is still in Phase 1 (agreement_status !== 'all_accepted' and empty(is_locked_for_edit)), OR
            // 2. Order is in Phase 2, AND this partner's settlement has NOT been accepted yet ('pending' or 'refused')!
            $isPartnerUnaccepted = (($s['acceptance_status'] ?? 'pending') !== 'accepted' || ($s['status'] ?? '') === 'refused');
            if (($order['agreement_status'] !== 'all_accepted' && empty($order['is_locked_for_edit'])) || $isPartnerUnaccepted) {
                // Direct immediate removal without participant permission
                $stmt = $db->prepare("UPDATE partner_settlements SET status = 'cancelled', removal_request_status = 'direct_removal', cancelled_at = NOW(), cancel_reason = 'Removed directly before participant acceptance' WHERE id = :id");
                $stmt->execute(['id' => $id]);

                $this->syncRemovedParticipantOnOrder($db, $order, $s, true);

                $snapshot = OrdersController::captureOrderSnapshot($db, $orderId);
                $stmt = $db->prepare("INSERT INTO order_history (order_id, edited_by, action, changes, snapshot, created_at) VALUES (:order_id, :edited_by, :action, :changes, :snapshot, NOW())");
                $stmt->execute([
                    'order_id' => $orderId,
                    'edited_by' => $sessionUser,
                    'action' => 'participant_removed_direct',
                    'changes' => json_encode(['settlement_id' => $id, 'payee_user_id' => (int)$s['payee_user_id']], JSON_UNESCAPED_UNICODE),
                    'snapshot' => !empty($snapshot) ? json_encode($snapshot, JSON_UNESCAPED_UNICODE) : null
                ]);

                SystemLog::write('partner_settlements', 'direct_removal', (int)$id, $order['service_name'] ?? "Service #{$orderId}", json_encode([
                    'settlement_id'   => (int)$id,
                    'order_id'        => $orderId,
                    'order_uid'       => $order['uid'] ?? null,
                    'target_user_id'  => (int)$s['payee_user_id'],
                    'sender_user_id'  => $sessionUser,
                    'entity_type'     => 'custom_service',
                    'action'          => 'direct_removal',
                    'stage_tag'       => 'statements:custom_service:direct_removal'
                ]), $sessionUser);

                if ($db->inTransaction()) {
                    $db->commit();
                }
                EntityVersion::bump($db, 'orders', 'partner_settlements', 'products');
                Response::json(['ok' => true, 'removal_type' => 'direct']);
                return;
            }

            // Consent-based removal (for already-accepted Phase 2 participants)
            $refundEligible = ($s['payment_demand_status'] === 'paid') ? 1 : 0;
            
            $det = !empty($s['details']) ? (is_array($s['details']) ? $s['details'] : json_decode($s['details'], true)) : [];
            if (!empty($data['removal_metadata'])) {
                $det['removal_metadata'] = $data['removal_metadata'];
                $stmt = $db->prepare("UPDATE partner_settlements SET removal_request_status = 'pending', removal_requested_at = NOW(), removal_refund_eligible = :elig, details = :det WHERE id = :id");
                $stmt->execute(['id' => $id, 'elig' => $refundEligible, 'det' => json_encode($det, JSON_UNESCAPED_UNICODE)]);
            } else {
                $stmt = $db->prepare("UPDATE partner_settlements SET removal_request_status = 'pending', removal_requested_at = NOW(), removal_refund_eligible = :elig WHERE id = :id");
                $stmt->execute(['id' => $id, 'elig' => $refundEligible]);
            }

            $payeeUser = '';
            try {
                $uStmt = $db->prepare("SELECT username FROM users WHERE id = :uid LIMIT 1");
                $uStmt->execute(['uid' => (int)$s['payee_user_id']]);
                $payeeUser = (string)$uStmt->fetchColumn();
            } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

            $partnerLabel = '@' . ($payeeUser ?: 'User #' . $s['payee_user_id']);
            $removalChanges = [
                'Participant Removal'  => ['from' => 'Active Participant (' . $partnerLabel . ')', 'to' => 'Removal Requested (Pending Consent)'],
                'Refund Status'        => ['from' => null, 'to' => $refundEligible ? 'Eligible for Safe Refund' : 'No Refund Required'],
                'Settlement Reference' => ['from' => null, 'to' => (string)($s['uid'] ?? $s['settlement_number'] ?? $id)]
            ];
            $removalNote = "Requested removal of collaborator {$partnerLabel} from Custom Service (Pending Consent)";

            $snapshot = OrdersController::captureOrderSnapshot($db, $orderId);
            $stmt = $db->prepare("INSERT INTO order_history (order_id, edited_by, action, changes, reason, note, snapshot, created_at) VALUES (:order_id, :edited_by, :action, :changes, :reason, :note, :snapshot, NOW())");
            $stmt->execute([
                'order_id' => $orderId,
                'edited_by' => $sessionUser,
                'action' => 'removal_requested',
                'changes' => json_encode($removalChanges, JSON_UNESCAPED_UNICODE),
                'reason' => $removalNote,
                'note' => $removalNote,
                'snapshot' => !empty($snapshot) ? json_encode($snapshot, JSON_UNESCAPED_UNICODE) : null
            ]);

            SystemLog::write('partner_settlements', 'removal_requested', (int)$id, $order['service_name'] ?? "Service #{$orderId}", json_encode([
                'settlement_id' => (int)$id,
                'order_id' => $orderId,
                'order_uid' => $order['uid'] ?? null,
                'target_user_id' => (int)$s['payee_user_id'],
                'sender_user_id' => $sessionUser,
                'entity_type' => 'custom_service',
                'action' => 'removal_request',
                'refund_eligible' => $refundEligible ? true : false,
                'amount' => (string)$s['amount'],
                'stage_tag' => 'statements:custom_service:removal_request'
            ]), $sessionUser);

            // Dispatch notification to payee
            try {
                $serviceTitle = $order['service_name'] ?? "Custom Service #{$orderId}";
                $notifSummary = !empty($data['removal_metadata']['summary'])
                    ? $data['removal_metadata']['summary']
                    : "The owner of \"{$serviceTitle}\" has requested to remove your participation/items from this service.";

                $db->prepare("INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at)
                    VALUES (:uid, 'settlement', :t, :b, :aurl, 'partner_settlements', :eid, 'statements:custom_service:removal_request', 0, NOW())")
                   ->execute([
                       'uid'  => (int)$s['payee_user_id'],
                       't'    => "Removal Request: {$serviceTitle}",
                       'b'    => $notifSummary,
                       'aurl' => "#order-details:{$orderId}?settlement={$id}",
                       'eid'  => (int)$id
                   ]);
            } catch (\Throwable $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }

            if ($db->inTransaction()) {
                $db->commit();
            }
            EntityVersion::bump($db, 'orders', 'partner_settlements');
            Response::json(['ok' => true, 'removal_type' => 'consent_required', 'refund_eligible' => $refundEligible]);

        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("SEC-40 Defensive exception in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Removal request failed due to a system error'], 500);
        }
    }

    /** POST /api/partner-settlements/{id}/accept-removal - Participant accepts removal */
    public function acceptRemoval(string $id): void
    {
        $db = Database::getConnection();
        $sessionUser = (int)($_SESSION['user_id'] ?? 0);

        try {
            $db->beginTransaction();

            $stmt = $db->prepare("SELECT * FROM partner_settlements WHERE id = :id FOR UPDATE");
            $stmt->execute(['id' => $id]);
            $s = $stmt->fetch(\PDO::FETCH_ASSOC);

            if (!$s) {
                throw new \Exception('Settlement not found.');
            }
            if ($s['removal_request_status'] !== 'pending') {
                throw new \Exception('No pending removal request.');
            }
            if ((int)$s['payee_user_id'] !== $sessionUser) {
                throw new \Exception('Only the participant can accept the removal.');
            }

            $orderId = (int)$s['related_entity_id'];
            $stmt = $db->prepare("SELECT * FROM orders WHERE id = :oid FOR UPDATE");
            $stmt->execute(['oid' => $orderId]);
            $order = $stmt->fetch(\PDO::FETCH_ASSOC);

            $payerId = (int)($s['payer_user_id'] ?: ($order['owner_user_id'] ?? 1));
            $payeeId = (int)$s['payee_user_id'];
            $serviceTitle = $order['service_name'] ?? "Service #{$orderId}";
            $settledAmount = (string)($s['settled_amount'] ?? '0');
            $isAlreadySettled = ($s['status'] === 'settled' || Decimal::comp($settledAmount, '0') > 0);

            if ($isAlreadySettled) {
                // The participant claimed payout from the service owner, but has now agreed to be removed.
                // The claimed amount must be returned directly to the service owner's safe!
                $clawbackAmount = Decimal::comp($settledAmount, '0') > 0 ? $settledAmount : (string)$s['amount'];
                if (Decimal::comp($clawbackAmount, '0') > 0) {
                    $descClawback = "Removal Payout Reversal: Returned " . Decimal::format($clawbackAmount, 2) . " DZD for {$serviceTitle} back to Service Owner";
                    CashVaultController::logFlow($db, 'partner_settlement_reversal', 'out', $clawbackAmount, 'orders', $orderId, $descClawback, $payeeId, true);
                    CashVaultController::logFlow($db, 'partner_settlement_reversal', 'in', $clawbackAmount, 'orders', $orderId, $descClawback, $payerId);
                }
            } elseif (!empty($s['removal_refund_eligible'])) {
                // Manual cost that was paid into safe by partner: refund it back to the partner
                $refundAmount = (string)$s['amount'];
                $descRefund = "Removal Outlay Refund: " . $serviceTitle;
                CashVaultController::logFlow($db, 'manual_cost_refund', 'out', $refundAmount, 'orders', $orderId, $descRefund, $payerId, true);
                CashVaultController::logFlow($db, 'manual_cost_refund', 'in', $refundAmount, 'orders', $orderId, $descRefund, $payeeId);
            }

            $stmt = $db->prepare("UPDATE partner_settlements SET status = 'cancelled', removal_request_status = 'accepted', cancelled_at = NOW() WHERE id = :id");
            $stmt->execute(['id' => $id]);

            $this->syncRemovedParticipantOnOrder($db, $order, $s, false);

            $snapshot = OrdersController::captureOrderSnapshot($db, $orderId);
            $stmt = $db->prepare("INSERT INTO order_history (order_id, edited_by, action, changes, snapshot, created_at) VALUES (:order_id, :edited_by, :action, :changes, :snapshot, NOW())");
            $stmt->execute([
                'order_id' => $orderId,
                'edited_by' => $sessionUser,
                'action' => 'removal_accepted',
                'changes' => json_encode(['settlement_id' => $id, 'refund_issued' => !empty($s['removal_refund_eligible'])], JSON_UNESCAPED_UNICODE),
                'snapshot' => !empty($snapshot) ? json_encode($snapshot, JSON_UNESCAPED_UNICODE) : null
            ]);

            SystemLog::write('partner_settlements', 'removal_accepted', (int)$id, $order['service_name'] ?? "Service #{$orderId}", json_encode([
                'settlement_id' => (int)$id,
                'order_id' => $orderId,
                'target_user_id' => (int)$order['owner_user_id'],
                'sender_user_id' => $sessionUser,
                'entity_type' => 'custom_service',
                'action' => 'removal_accepted',
                'refund_issued' => !empty($s['removal_refund_eligible']),
                'amount' => (string)$s['amount'],
                'stage_tag' => 'statements:custom_service:removal_completed'
            ]), $sessionUser);

            // Notify the order owner about acceptance
            try {
                $ownerId = (int)$order['owner_user_id'];
                if ($ownerId > 0 && $ownerId !== $sessionUser) {
                    $serviceTitle = $order['service_name'] ?? "Service #{$orderId}";
                    $db->prepare("INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at)
                        VALUES (:uid, 'settlement', :t, :b, :aurl, 'orders', :eid, 'statements:custom_service:removal_accepted', 0, NOW())")
                       ->execute([
                           'uid'  => $ownerId,
                           't'    => "Removal Accepted: {$serviceTitle}",
                           'b'    => "Partner has accepted the removal request. All associated items and shares have been detached.",
                           'aurl' => "#page-services?edit={$orderId}",
                           'eid'  => $orderId
                       ]);
                }
            } catch (\Throwable $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }

            if ($db->inTransaction()) {
                $db->commit();
            }
            EntityVersion::bump($db, 'orders', 'partner_settlements', 'cash_vault');
            Response::json(['ok' => true, 'refund_issued' => !empty($s['removal_refund_eligible'])]);

        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("SEC-40 Defensive exception in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Removal acceptance failed due to a system error'], 500);
        }
    }

    /** POST /api/partner-settlements/{id}/refuse-removal - Participant refuses removal */
    public function refuseRemoval(string $id, array $data): void
    {
        $db = Database::getConnection();
        $sessionUser = (int)($_SESSION['user_id'] ?? 0);

        try {
            $db->beginTransaction();

            $stmt = $db->prepare("SELECT * FROM partner_settlements WHERE id = :id FOR UPDATE");
            $stmt->execute(['id' => $id]);
            $s = $stmt->fetch(\PDO::FETCH_ASSOC);

            if (!$s) {
                throw new \Exception('Settlement not found.');
            }
            if ($s['removal_request_status'] !== 'pending') {
                throw new \Exception('No pending removal request.');
            }
            if ((int)$s['payee_user_id'] !== $sessionUser) {
                throw new \Exception('Only the participant can refuse the removal.');
            }

            $orderId = $s['related_entity_id'];
            $stmt = $db->prepare("SELECT * FROM orders WHERE id = :oid FOR UPDATE");
            $stmt->execute(['oid' => $orderId]);
            $order = $stmt->fetch(\PDO::FETCH_ASSOC);

            $stmt = $db->prepare("UPDATE partner_settlements SET removal_request_status = 'refused' WHERE id = :id");
            $stmt->execute(['id' => $id]);

            $reason = trim((string)($data['reason'] ?? ''));
            $changes = ['settlement_id' => $id];
            if ($reason !== '') {
                $changes['reason'] = $reason;
            }

            $snapshot = OrdersController::captureOrderSnapshot($db, $orderId);
            $stmt = $db->prepare("INSERT INTO order_history (order_id, edited_by, action, changes, snapshot, created_at) VALUES (:order_id, :edited_by, :action, :changes, :snapshot, NOW())");
            $stmt->execute([
                'order_id' => $orderId,
                'edited_by' => $sessionUser,
                'action' => 'removal_refused',
                'changes' => json_encode($changes, JSON_UNESCAPED_UNICODE),
                'snapshot' => !empty($snapshot) ? json_encode($snapshot, JSON_UNESCAPED_UNICODE) : null
            ]);

            SystemLog::write('partner_settlements', 'removal_refused', (int)$id, $order['service_name'] ?? "Service #{$orderId}", json_encode([
                'settlement_id' => (int)$id,
                'order_id' => $orderId,
                'target_user_id' => (int)$order['owner_user_id'],
                'sender_user_id' => $sessionUser,
                'entity_type' => 'custom_service',
                'action' => 'removal_refused',
                'reason' => $reason,
                'stage_tag' => 'statements:custom_service:removal_refused'
            ]), $sessionUser);

            // Notify the order owner about refusal
            try {
                $ownerId = (int)$order['owner_user_id'];
                if ($ownerId > 0 && $ownerId !== $sessionUser) {
                    $serviceTitle = $order['service_name'] ?? "Service #{$orderId}";
                    $bodyMsg = "Partner has refused the removal request for \"{$serviceTitle}\"." . ($reason !== '' ? " Reason: {$reason}" : "");
                    $db->prepare("INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at)
                        VALUES (:uid, 'settlement', :t, :b, :aurl, 'orders', :eid, 'statements:custom_service:removal_refused', 0, NOW())")
                       ->execute([
                           'uid'  => $ownerId,
                           't'    => "Removal Refused: {$serviceTitle}",
                           'b'    => $bodyMsg,
                           'aurl' => "#page-services?edit={$orderId}",
                           'eid'  => $orderId
                       ]);
                }
            } catch (\Throwable $ignored) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $ignored->getMessage());
        }

            if ($db->inTransaction()) {
                $db->commit();
            }
            EntityVersion::bump($db, 'orders', 'partner_settlements');
            Response::json(['ok' => true, 'removal_request_status' => 'refused']);

        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("SEC-40 Defensive exception in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Removal refusal failed due to a system error'], 500);
        }
    }

    /** POST /api/partner-settlements/{id}/cancel-removal - Initiator or related service participant cancels pending removal request */
    public function cancelRemoval(string $id, array $data = []): void
    {
        $db = Database::getConnection();
        $sessionUser = (int)($_SESSION['user_id'] ?? 0);

        if ($sessionUser <= 0) {
            Response::json(['error' => 'Unauthorized'], 401);
            return;
        }

        try {
            $db->beginTransaction();

            $stmt = $db->prepare("SELECT * FROM partner_settlements WHERE id = :id FOR UPDATE");
            $stmt->execute(['id' => $id]);
            $s = $stmt->fetch(\PDO::FETCH_ASSOC);

            if (!$s) {
                throw new \Exception('Settlement not found.');
            }
            if ($s['status'] === 'cancelled') {
                throw new \Exception('Settlement is already cancelled.');
            }
            if ($s['related_entity_type'] !== 'orders') {
                throw new \Exception('Invalid entity type for this operation.');
            }
            if (($s['removal_request_status'] ?? '') !== 'pending') {
                throw new \Exception('No pending removal request to cancel.');
            }

            $orderId = (int)$s['related_entity_id'];
            $stmt = $db->prepare("SELECT * FROM orders WHERE id = :oid FOR UPDATE");
            $stmt->execute(['oid' => $orderId]);
            $order = $stmt->fetch(\PDO::FETCH_ASSOC);

            if (!$order) {
                throw new \Exception('Associated service order not found.');
            }

            // Permission Guard: Admin, Order Owner, Creator, or Any Mentioned/Related Participant
            $isAdmin = !empty($_SESSION['is_admin']) || in_array($_SESSION['role'] ?? '', ['admin', 'super_admin'], true);
            $isOwner = ((int)$order['owner_user_id'] === $sessionUser);
            $isCreator = ((int)($order['created_by'] ?? 0) === $sessionUser);
            $mentionedUsers = OrdersController::getOrderMentionedUserIds($db, $orderId, $order);
            $isRelatedParticipant = in_array($sessionUser, $mentionedUsers, true);

            if (!$isAdmin && !$isOwner && !$isCreator && !$isRelatedParticipant) {
                throw new \Exception('Forbidden: Only the service owner, creator, or a related service participant can cancel this removal request.');
            }

            // Clean up details removal_metadata
            $det = !empty($s['details']) ? (is_array($s['details']) ? $s['details'] : json_decode($s['details'], true)) : [];
            if (isset($det['removal_metadata'])) {
                unset($det['removal_metadata']);
            }
            $detJson = !empty($det) ? json_encode($det, JSON_UNESCAPED_UNICODE) : null;

            // 1. Reset settlement removal state back to pristine active agreement
            $stmt = $db->prepare("UPDATE partner_settlements 
                                  SET removal_request_status = NULL, 
                                      removal_requested_at = NULL, 
                                      removal_refund_eligible = 0, 
                                      details = :det 
                                  WHERE id = :id");
            $stmt->execute([
                'id'  => $id,
                'det' => $detJson
            ]);

            // 2. Mark pending removal notification as read
            try {
                $db->prepare("UPDATE notifications 
                              SET is_read = 1 
                              WHERE user_id = :uid 
                                AND entity_type = 'orders' 
                                AND entity_id = :oid 
                                AND stage_tag = 'statements:custom_service:removal_request'")
                   ->execute([
                       'uid' => (int)$s['payee_user_id'],
                       'oid' => $orderId
                   ]);
            } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

            // 3. Notify payee that the removal request was withdrawn/cancelled
            try {
                $serviceTitle = $order['service_name'] ?? "Custom Service #{$orderId}";
                $cancellerName = $_SESSION['username'] ?? 'The service team';
                $db->prepare("INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at)
                              VALUES (:uid, 'settlement', :t, :b, :aurl, 'orders', :eid, 'statements:custom_service:removal_cancelled', 0, NOW())")
                   ->execute([
                       'uid'  => (int)$s['payee_user_id'],
                       't'    => "Removal Request Cancelled: {$serviceTitle}",
                       'b'    => "The removal request for your participation in \"{$serviceTitle}\" was cancelled by @{$cancellerName}. Your agreement remains intact.",
                       'aurl' => "#order-details:{$orderId}",
                       'eid'  => $orderId
                   ]);
            } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

            // 4. Audit Logging in order_history (Human-readable Before/After diff structure)
            $reason = trim((string)($data['reason'] ?? 'Removal request cancelled by service participant'));
            $payeeUser = '';
            try {
                $uStmt = $db->prepare("SELECT username FROM users WHERE id = :uid");
                $uStmt->execute(['uid' => (int)$s['payee_user_id']]);
                $payeeUser = (string)$uStmt->fetchColumn();
            } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

            $changes = [
                'Removal Status'  => ['from' => 'Removal Pending Consent', 'to' => 'Active Agreement Restored'],
                'Target Partner'  => ['from' => null, 'to' => '@' . ($payeeUser ?: 'User #' . $s['payee_user_id'])],
                'Settlement ID'   => ['from' => null, 'to' => (string)$id],
                'Settlement Type' => ['from' => null, 'to' => (string)($s['settlement_type'] ?? '')],
                'Action Note'     => ['from' => null, 'to' => $reason]
            ];

            $snapshot = OrdersController::captureOrderSnapshot($db, $orderId);
            $stmt = $db->prepare("INSERT INTO order_history (order_id, edited_by, action, changes, reason, snapshot, created_at) 
                                  VALUES (:order_id, :edited_by, :action, :changes, :reason, :snapshot, NOW())");
            $stmt->execute([
                'order_id'  => $orderId,
                'edited_by' => $sessionUser,
                'action'    => 'removal_request_cancelled',
                'changes'   => json_encode($changes, JSON_UNESCAPED_UNICODE),
                'reason'    => $reason,
                'snapshot'  => !empty($snapshot) ? json_encode($snapshot, JSON_UNESCAPED_UNICODE) : null
            ]);

            // 5. SystemLog audit trail
            SystemLog::write('partner_settlements', 'removal_cancelled', (int)$id, $order['service_name'] ?? "Service #{$orderId}", json_encode([
                'settlement_id'  => (int)$id,
                'order_id'       => $orderId,
                'order_uid'      => $order['uid'] ?? null,
                'target_user_id' => (int)$s['payee_user_id'],
                'sender_user_id' => $sessionUser,
                'entity_type'    => 'custom_service',
                'action'         => 'removal_request_cancelled',
                'reason'         => $reason,
                'stage_tag'      => 'statements:custom_service:removal_cancelled'
            ]), $sessionUser);

            if ($db->inTransaction()) {
                $db->commit();
            }
            EntityVersion::bump($db, 'orders', 'partner_settlements');
            Response::json([
                'ok'                     => true, 
                'removal_request_status' => null, 
                'message'                => 'Removal request cancelled successfully.'
            ]);

        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("SEC-40 Defensive exception in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Removal cancellation failed due to a system error'], 500);
        }
    }

    /** POST /api/order-items/{id}/accept-return-destination */
    public function acceptReturnDestination(string $itemId): void
    {
        $sessionUser = (int)($_SESSION['user_id'] ?? 0);
        $db = Database::getConnection();
        
        try {
            $db->beginTransaction();
            
            $stmt = $db->prepare('SELECT * FROM order_items WHERE id = :id FOR UPDATE');
            $stmt->execute(['id' => $itemId]);
            $item = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if (!$item) {
                $db->rollBack();
                Response::json(['error' => 'Item not found'], 404);
                return;
            }
            
            if (($item['return_acceptance_status'] ?? '') !== 'pending') {
                $db->rollBack();
                Response::json(['error' => 'Return destination is not pending'], 400);
                return;
            }
            
            if ((int)$item['cost_owner_id'] !== $sessionUser) {
                $db->rollBack();
                Response::json(['error' => 'Unauthorized'], 403);
                return;
            }
            
            $db->prepare('UPDATE order_items SET return_acceptance_status = "accepted" WHERE id = :id')
               ->execute(['id' => $itemId]);
               
            \OrdersController::processReturnDestination($db, $item, $item['return_destination'], (int)$item['order_id']);
            
            $chkStmt = $db->prepare("SELECT COUNT(*) as tot, SUM(CASE WHEN return_acceptance_status = 'accepted' THEN 1 ELSE 0 END) as acc FROM order_items WHERE order_id = :oid");
            $chkStmt->execute(['oid' => $item['order_id']]);
            $chk = $chkStmt->fetch();
            if ((int)$chk['tot'] > 0 && (int)$chk['tot'] === (int)$chk['acc']) {
                $db->prepare("UPDATE orders SET status = 'returned' WHERE id = :oid")->execute(['oid' => $item['order_id']]);
                
                $ordStmt = $db->prepare("SELECT total, owner_user_id FROM orders WHERE id = :oid");
                $ordStmt->execute(['oid' => $item['order_id']]);
                $ordData = $ordStmt->fetch();
                if ($ordData) {
                    CashVaultController::logFlow($db, 'order_refund', 'out', (string)$ordData['total'], 'orders', (int)$item['order_id'], 'Full order refund (all returns accepted)', (int)$ordData['owner_user_id']);
                }
                
                $db->prepare("UPDATE partner_settlements SET status = 'cancelled', cancelled_at = NOW(), cancel_reason = 'Order returned' WHERE related_entity_type = 'orders' AND related_entity_id = :oid AND settlement_type != 'order_return_clawback' AND status != 'cancelled'")->execute(['oid' => $item['order_id']]);
                
                $db->prepare("INSERT INTO order_history (order_id, edited_by, action, changes, reason, created_at) VALUES (:oid, :uid, 'order_returned_fully', :chg, 'All items return accepted', NOW())")->execute([
                    'oid' => $item['order_id'],
                    'uid' => $sessionUser,
                    'chg' => json_encode(['status' => 'returned'])
                ]);
            }
            
            $db->prepare('INSERT INTO order_history (order_id, edited_by, action, changes, created_at) VALUES (:order_id, :edited_by, :action, :changes, NOW())')
               ->execute([
                   'order_id' => $item['order_id'],
                   'edited_by' => $sessionUser,
                   'action' => 'return_destination_accepted',
                   'changes' => json_encode(['item_id' => $itemId, 'destination' => $item['return_destination']])
               ]);
               
            $orderStmt = $db->prepare('SELECT owner_user_id FROM orders WHERE id = :oid');
            $orderStmt->execute(['oid' => $item['order_id']]);
            $orderOwner = $orderStmt->fetchColumn();
            
            if ($orderOwner) {
                SystemLog::write('orders', 'return_destination_accepted', $itemId, "Item #{$itemId}", json_encode([
                    'message' => "Return destination accepted by owner",
                    'item_id' => $itemId,
                    'order_id' => $item['order_id']
                ]), (int)$orderOwner);

                $db->prepare("INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, created_at) VALUES (:uid, :type, :title, :body, :url, :etype, :eid, :stag, NOW())")
                   ->execute([
                       'uid' => $orderOwner,
                       'type' => 'settlement',
                       'title' => 'Return Accepted',
                       'body' => 'Return destination accepted',
                       'url' => '#order-details:' . $item['order_id'],
                       'etype' => 'orders',
                       'eid' => (int)$item['order_id'],
                       'stag' => 'return:destination_accepted'
                   ]);
            }
            
            $db->commit();
            EntityVersion::bump($db, 'orders', 'partner_settlements', 'products');
            Response::json(['ok' => true]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("SEC-40 Defensive exception in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Accept return destination failed due to a system error'], 500);
        }
    }

    /** POST /api/order-items/{id}/refuse-return-destination */
    public function refuseReturnDestination(string $itemId, array $data): void
    {
        $sessionUser = (int)($_SESSION['user_id'] ?? 0);
        $db = Database::getConnection();
        
        try {
            $db->beginTransaction();
            
            $stmt = $db->prepare('SELECT * FROM order_items WHERE id = :id FOR UPDATE');
            $stmt->execute(['id' => $itemId]);
            $item = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if (!$item) {
                $db->rollBack();
                Response::json(['error' => 'Item not found'], 404);
                return;
            }
            
            if (($item['return_acceptance_status'] ?? '') !== 'pending') {
                $db->rollBack();
                Response::json(['error' => 'Return destination is not pending'], 400);
                return;
            }
            
            if ((int)$item['cost_owner_id'] !== $sessionUser) {
                $db->rollBack();
                Response::json(['error' => 'Unauthorized'], 403);
                return;
            }
            
            $db->prepare('UPDATE order_items SET return_acceptance_status = "refused", return_destination = NULL WHERE id = :id')
               ->execute(['id' => $itemId]);
               
            // Check if all items resolved
            $chkStmt = $db->prepare("SELECT COUNT(*) as tot, SUM(CASE WHEN return_acceptance_status IN ('accepted', 'refused') THEN 1 ELSE 0 END) as res, SUM(CASE WHEN return_acceptance_status = 'refused' THEN 1 ELSE 0 END) as ref FROM order_items WHERE order_id = :oid");
            $chkStmt->execute(['oid' => $item['order_id']]);
            $chk = $chkStmt->fetch();
            $notifyReSelect = false;
            if ((int)$chk['tot'] > 0 && (int)$chk['tot'] === (int)$chk['res'] && (int)$chk['ref'] > 0) {
                $notifyReSelect = true;
            }
               
            $reason = $data['reason'] ?? '';
               
            $db->prepare('INSERT INTO order_history (order_id, edited_by, action, changes, reason, created_at) VALUES (:order_id, :edited_by, :action, :changes, :reason, NOW())')
               ->execute([
                   'order_id' => $item['order_id'],
                   'edited_by' => $sessionUser,
                   'action' => 'return_destination_refused',
                   'changes' => json_encode(['item_id' => $itemId]),
                   'reason' => $reason
               ]);
               
            $orderStmt = $db->prepare('SELECT owner_user_id FROM orders WHERE id = :oid');
            $orderStmt->execute(['oid' => $item['order_id']]);
            $orderOwner = $orderStmt->fetchColumn();
            
            if ($orderOwner) {
                SystemLog::write('orders', 'return_destination_refused', $itemId, "Item #{$itemId}", json_encode([
                    'message' => "Return destination refused by owner",
                    'item_id' => $itemId,
                    'order_id' => $item['order_id'],
                    'reason' => $reason
                ]), (int)$orderOwner);

                $db->prepare("INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, created_at) VALUES (:uid, :type, :title, :body, :url, :etype, :eid, :stag, NOW())")
                   ->execute([
                       'uid' => $orderOwner,
                       'type' => 'settlement',
                       'title' => 'Return Refused',
                       'body' => 'Return destination refused: ' . $reason,
                       'url' => '#order-details:' . $item['order_id'],
                       'etype' => 'orders',
                       'eid' => (int)$item['order_id'],
                       'stag' => 'return:destination_refused'
                   ]);

                if (isset($notifyReSelect) && $notifyReSelect) {
                    $db->prepare("INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, created_at) VALUES (:uid, :type, :title, :body, :url, :etype, :eid, :stag, NOW())")
                       ->execute([
                           'uid' => $orderOwner,
                           'type' => 'settlement',
                           'title' => 'Re-select Destinations',
                           'body' => 'Some return destinations were refused. Please re-select destinations for the refused items.',
                           'url' => '#order-details:' . $item['order_id'],
                           'etype' => 'orders',
                           'eid' => (int)$item['order_id'],
                           'stag' => 'return:reselect_required'
                       ]);
                }
            }
            
            $db->commit();
            EntityVersion::bump($db, 'orders', 'partner_settlements');
            Response::json(['ok' => true]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log("SEC-40 Defensive exception in " . __METHOD__ . ": " . $e->getMessage());
            Response::json(['error' => 'Refuse return destination failed due to a system error'], 500);
        }
    }
}
/* [END_OF_MODULE_SECURITY_SEAL] ‍﻿​‌​‌‌​‌‌​‌​​​​‌‌​‌​‌​​‌​​‌​‌‌​​‌​‌​‌​​​​​‌​‌​‌​​​‌​​‌‌‌‌​‌​​​‌‌‌​‌​‌​​‌​​‌​​​​​‌​‌​‌​​​​​‌​​‌​​​​‌​​‌​​‌​‌​​​​‌‌​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​‌‌​​‌​​​‌​‌​‌​​‌‌‌​​‌​​​​​‌​‌​​‌‌‌​​‌​​​​‌‌​‌​​​‌​‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​​‌‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​‌​‌​‌​‌​​​​​‌​‌​​‌‌​​​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​‌​​​‌​‌‌​​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​‌​​‌​​‌​​​‌​​​‌​‌‌‌​‌​​​​‌​‌​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​​‌​​​‌‌‌​‌​‌​‌‌​​​‌‌​‌‌‌​‌​​​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​​‌​​​​​​​‌​‌​​​​‌​​‌​​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​​‌​‌‌​‌​‌​‌​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​​​​​‌​​​​​​‌​​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​‌​​‌‌​‌‌‌​‌​‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​‌​‌​​‌​‌​​‌​​​​‌​‌​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​‌​‌​​‌​​​​​​‌​​​​‌‌​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌‌​​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​‌‌‌​‌​​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​​‌‌‌​‌​​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​​​‌​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​​​‌​‌​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​​‌‌‌​‌​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​​‌‌‌​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​​‌​​​​‌​‌​​‌​​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​​​​​​‌​​​‌​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌​‌‌​​​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​​​​‌​‌​​​​​‌​‌​​‌​‌‌​‌‌​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌‌​​‌​​‌​​‌​‌​​‌‌‌‌​‌​​‌‌​​​‌​​​​​‌​‌​​​​‌​​‌​​‌‌​​​‌​​​‌​‌​​‌​​​​​​‌​​​‌​​​‌​​‌​​‌​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​​‌​​‌​‌​‌​‌‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​‌​​​‌​​‌‌‌‌​​‌​​​​​​‌​​​​​‌​‌​​‌‌​​​‌​​‌‌​​​​‌​​​​​​‌​​​​​‌​‌​​‌​​‌​​‌​​​​​​‌​​​​​‌​‌​‌​​‌‌​‌​‌​​‌‌​‌​​‌​​‌​‌​‌​​‌‌​‌​‌​‌​​​‌​​​​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌​​​‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​​‌‌​‌​‌​‌​​​​​‌​​‌​​‌​‌​​‌‌​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​​​‌​‌​‌​‌​‌​‌​‌​‌​​​‌​​‌‌‌‌​‌​​‌‌​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​​​​‌​‌​​​‌‌‌​‌​​​‌​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​‌​‌‌‌​‌​​‌‌‌​‌​​​​​‌​‌​​‌​‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌​​‌​‌​‌‌‌‌​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​‌​​​​​​​‌​‌​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​‌​​‌​​‌​‌‌‌​​​​​‌​‌​​‌​‌‌​​‌​‌‌​‌‌‌‌​‌‌‌​‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌‌​‌​​​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​‌‌​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​​‌​​‌‌​‌​​‌​‌‌​​‌​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​‌‌​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​‌​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​​​‌​‌‌​‌‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌​​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​​​​‌​‌‌​‌‌​​​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​​​‌​‌​​‌‌​‌‌‌‌​‌‌​​‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌​​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌‌​​‌‌​​‌​‌‌‌​​​​​‌​‌​​‌​​​​​‌​‌‌​‌‌‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌‌​​​‌​‌‌‌​‌​‌​‌‌​​‌​‌​‌‌‌​​‌‌​‌‌‌​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌​‌​​‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​‌‌​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​​​​​‌​‌‌​​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​‌​‌​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌​​​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​‌‌​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​‌‌‌​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌​​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​​​‌​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​‌​‌‌​‌‌‌​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌‌​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌​​‌‌​‌​‌​‌​‌​‌​‌​‌​​‌‌​‌​‌​‌​​​​‌​​​​​​‌​​​​‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​‌‌​​‌​‌​‌​‌​‌​‌​​‌‌​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌​‌​‌​​‌‌​‌​‌​​​‌​‌​‌​​​‌​​​‌​​‌​​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​‌‌​​‌​​‌​‌‌‌​﻿‍ */
