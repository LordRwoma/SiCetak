@extends('layouts.dashboard')

@section('title', 'SiBot - Asisten Virtual')

@section('content')
<div class="sibot-container">
    <div class="sibot-header">
        <div class="sibot-avatar">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="3" y="11" width="18" height="10" rx="2"/>
                <circle cx="12" cy="5" r="2"/>
                <path d="M12 7v4"/>
                <line x1="8" y1="16" x2="8" y2="16"/>
                <line x1="16" y1="16" x2="16" y2="16"/>
            </svg>
        </div>
        <div>
            <h2 class="sibot-title">SiBot Assistant</h2>
            <p class="sibot-status">
                <span class="status-dot"></span> Online
            </p>
        </div>
    </div>
    
    <div class="chat-messages" id="chatMessages">
        <div class="message bot-message">
            <div class="message-content">
                Halo! Saya SiBot, asisten virtual Anda. Ada yang bisa saya bantu?
            </div>
            <span class="message-time">Just now</span>
        </div>
    </div>
    
    <div class="chat-input-container">
        <input type="text" class="chat-input" id="chatInput" placeholder="Ketik pesan Anda...">
        <button class="btn-send" id="btnSend">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="22" y1="2" x2="11" y2="13"/>
                <polygon points="22 2 15 22 11 13 2 9 22 2"/>
            </svg>
        </button>
    </div>
    
    <div class="quick-questions">
        <p class="quick-title">Pertanyaan Cepat:</p>
        <button class="quick-btn">Cara memesan?</button>
        <button class="quick-btn">Harga cetak?</button>
        <button class="quick-btn">Jam operasional?</button>
    </div>
</div>
@endsection