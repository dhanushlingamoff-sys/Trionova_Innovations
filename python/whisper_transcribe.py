from faster_whisper import WhisperModel
import sys, json

audio_path = sys.argv[1]

model = WhisperModel(
    "base",        # 🔥 faster than small
    device="cpu",
    compute_type="int8"
)

segments, info = model.transcribe(
    audio_path,
    beam_size=1,           # 🔥 IMPORTANT: faster + often same accuracy
    vad_filter=True,
    language="en"          # 🔥 forces language (major speed + accuracy boost)
)

text = " ".join(segment.text for segment in segments)

print(json.dumps({"text": text.strip()}))